<?php
session_start();
require_once '../../db.php';

if (!isset($_SESSION['user_id'])) {
    header("Location: ../login.php");
    exit;
}

$message = "";
$error = "";
$edit_mode = false;

$edit_data = [
    'id' => '',
    'image' => ''
];

/* DELETE */
if (isset($_GET['delete_id'])) {
    $delete_id = (int) $_GET['delete_id'];

    $select_old = mysqli_query($conn, "SELECT image FROM achievement WHERE id = $delete_id");
    if ($select_old && mysqli_num_rows($select_old) > 0) {
        $old_data = mysqli_fetch_assoc($select_old);
        $old_file = $old_data['image'];

        if (!empty($old_file) && file_exists($old_file)) {
            unlink($old_file);
        }

        mysqli_query($conn, "DELETE FROM achievement WHERE id = $delete_id");
        header("Location: achievement.php?deleted=1");
        exit;
    }
}

/* EDIT LOAD */
if (isset($_GET['edit_id'])) {
    $edit_id = (int) $_GET['edit_id'];
    $edit_query = mysqli_query($conn, "SELECT * FROM achievement WHERE id = $edit_id LIMIT 1");

    if ($edit_query && mysqli_num_rows($edit_query) > 0) {
        $edit_data = mysqli_fetch_assoc($edit_query);
        $edit_mode = true;
    }
}

/* SUCCESS MSG */
if (isset($_GET['deleted'])) {
    $message = "Achievement image deleted successfully.";
}

if (isset($_GET['added'])) {
    $message = "Achievement image added successfully.";
}

if (isset($_GET['updated'])) {
    $message = "Achievement image updated successfully.";
}

/* INSERT / UPDATE */
if (isset($_POST['submit_achievement'])) {
    $id = isset($_POST['id']) ? (int) $_POST['id'] : 0;

    if ($id > 0) {
        $old_image = $edit_data['image'];

        if (isset($_FILES['image']) && $_FILES['image']['error'] == 0) {
            $file_name = $_FILES['image']['name'];
            $tmp_name = $_FILES['image']['tmp_name'];
            $file_size = $_FILES['image']['size'];

            $ext = strtolower(pathinfo($file_name, PATHINFO_EXTENSION));
            $allowed = ['jpg', 'jpeg', 'png', 'webp'];

            if (!in_array($ext, $allowed)) {
                $error = "Only JPG, JPEG, PNG, WEBP files are allowed.";
            } elseif ($file_size > 2 * 1024 * 1024) {
                $error = "Image size must be less than 2MB.";
            } else {
                if (!is_dir('uploads/achievement')) {
                    mkdir('uploads/achievement', 0777, true);
                }

                $new_name = 'uploads/achievement/' . time() . '_' . rand(1000, 9999) . '.' . $ext;

                if (move_uploaded_file($tmp_name, $new_name)) {
                    if (!empty($old_image) && file_exists($old_image)) {
                        unlink($old_image);
                    }

                    $image_path = mysqli_real_escape_string($conn, $new_name);

                    $update = "UPDATE achievement SET image = '$image_path' WHERE id = $id";

                    if (mysqli_query($conn, $update)) {
                        header("Location: achievement.php?updated=1");
                        exit;
                    } else {
                        $error = "Update failed.";
                    }
                } else {
                    $error = "Image upload failed.";
                }
            }
        } else {
            $error = "Please select a new image to update.";
        }
    } else {
        if (!isset($_FILES['image']) || $_FILES['image']['error'] != 0) {
            $error = "Image is required.";
        } else {
            $file_name = $_FILES['image']['name'];
            $tmp_name = $_FILES['image']['tmp_name'];
            $file_size = $_FILES['image']['size'];

            $ext = strtolower(pathinfo($file_name, PATHINFO_EXTENSION));
            $allowed = ['jpg', 'jpeg', 'png', 'webp'];

            if (!in_array($ext, $allowed)) {
                $error = "Only JPG, JPEG, PNG, WEBP files are allowed.";
            } elseif ($file_size > 2 * 1024 * 1024) {
                $error = "Image size must be less than 2MB.";
            } else {
                if (!is_dir('uploads/achievement')) {
                    mkdir('uploads/achievement', 0777, true);
                }

                $new_name = 'uploads/achievement/' . time() . '_' . rand(1000, 9999) . '.' . $ext;

                if (move_uploaded_file($tmp_name, $new_name)) {
                    $image_path = mysqli_real_escape_string($conn, $new_name);

                    $insert = "INSERT INTO achievement (image) VALUES ('$image_path')";

                    if (mysqli_query($conn, $insert)) {
                        header("Location: achievement.php?added=1");
                        exit;
                    } else {
                        $error = "Insert failed.";
                    }
                } else {
                    $error = "Image upload failed.";
                }
            }
        }
    }
}
?>
<!doctype html>
<html lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=yes" />
    <meta name="color-scheme" content="light dark" />
    <meta name="theme-color" content="#007bff" media="(prefers-color-scheme: light)" />
    <meta name="theme-color" content="#1a1a1a" media="(prefers-color-scheme: dark)" />

    <meta name="title" content="Admin Panel | Achievement" />
    <meta name="author" content="Starkology" />
    <meta name="description" content="Achievement Management" />
    <meta name="supported-color-schemes" content="light dark" />

    <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/@fontsource/source-sans-3@5.0.12/index.css"
      crossorigin="anonymous"
      media="print"
      onload="this.media='all'"
    />
    <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/overlayscrollbars@2.11.0/styles/overlayscrollbars.min.css"
      crossorigin="anonymous"
    />
    <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.13.1/font/bootstrap-icons.min.css"
      crossorigin="anonymous"
    />
    <link rel="stylesheet" href="./css/adminlte.css" />

    <style>
      .achievement-image-preview {
        width: 100px;
        height: 70px;
        object-fit: cover;
        border-radius: 8px;
        border: 1px solid #ddd;
        background: #fff;
        padding: 2px;
      }
    </style>
  </head>

  <body class="layout-fixed sidebar-expand-lg bg-body-tertiary">
    <div class="app-wrapper">

      <nav class="app-header navbar navbar-expand bg-body">
        <div class="container-fluid">
          <ul class="navbar-nav">
            <li class="nav-item">
              <a class="nav-link" data-lte-toggle="sidebar" href="#" role="button">
                <i class="bi bi-list"></i>
              </a>
            </li>
            <li class="nav-item d-none d-md-block">
              <a href="index.php" class="nav-link">Dashboard</a>
            </li>
          </ul>

          <ul class="navbar-nav ms-auto">
            <li class="nav-item d-none d-md-block">
              <span class="nav-link">
                Welcome,
                <?php echo isset($_SESSION['name']) ? htmlspecialchars($_SESSION['name']) : 'Admin'; ?>
              </span>
            </li>
            <li class="nav-item">
              <a href="logout.php" class="nav-link">
                <i class="bi bi-box-arrow-right me-1"></i> Logout
              </a>
            </li>
          </ul>
        </div>
      </nav>

      <aside class="app-sidebar bg-body-secondary shadow" data-bs-theme="dark">
        <div class="sidebar-brand">
          <a href="index.php" class="brand-link">
            <img
              src="./assets/img/AdminLTELogo.png"
              alt="Admin Logo"
              class="brand-image opacity-75 shadow"
            />
            <span class="brand-text fw-light">Admin Panel</span>
          </a>
        </div>

        <div class="sidebar-wrapper">
          <nav class="mt-2">
            <ul
              class="nav sidebar-menu flex-column"
              data-lte-toggle="treeview"
              role="navigation"
              aria-label="Main navigation"
              data-accordion="false"
              id="navigation"
            >
              <li class="nav-header">CMS</li>

              <li class="nav-item">
                <a href="index.php" class="nav-link">
                  <i class="nav-icon bi bi-image"></i>
                  <p>Banner</p>
                </a>
              </li>

              <li class="nav-item">
                <a href="logo.php" class="nav-link">
                  <i class="nav-icon bi bi-badge-ad"></i>
                  <p>Logo</p>
                </a>
              </li>

              <li class="nav-item">
                <a href="pte-courses-campus.php" class="nav-link">
                  <i class="nav-icon bi bi-book"></i>
                  <p>PTE Courses (On Campus)</p>
                </a>
              </li>

              <li class="nav-item">
                <a href="pte-courses-online.php" class="nav-link">
                  <i class="nav-icon bi bi-laptop"></i>
                  <p>PTE Courses (Online)</p>
                </a>
              </li>

              <li class="nav-item">
                <a href="our-achievements.php" class="nav-link">
                  <i class="nav-icon bi bi-trophy"></i>
                  <p>Our Achievements</p>
                </a>
              </li>

              <li class="nav-item">
                <a href="blogs.php" class="nav-link">
                  <i class="nav-icon bi bi-pencil-square"></i>
                  <p>Our Blogs</p>
                </a>
              </li>

              <li class="nav-item">
                <a href="testimonials.php" class="nav-link">
                  <i class="nav-icon bi bi-chat-left-quote"></i>
                  <p>Testimonials</p>
                </a>
              </li>

              <li class="nav-item">
                <a href="overseas-universities.php" class="nav-link">
                  <i class="nav-icon bi bi-mortarboard"></i>
                  <p>Overseas Universities</p>
                </a>
              </li>

              <li class="nav-item">
                <a href="about-us.php" class="nav-link">
                  <i class="nav-icon bi bi-info-circle"></i>
                  <p>About Us</p>
                </a>
              </li>

              <li class="nav-item">
                <a href="team.php" class="nav-link">
                  <i class="nav-icon bi bi-people"></i>
                  <p>Team</p>
                </a>
              </li>

              <li class="nav-item">
                <a href="mission-vision.php" class="nav-link">
                  <i class="nav-icon bi bi-bullseye"></i>
                  <p>Mission / Vision</p>
                </a>
              </li>

              <li class="nav-item">
                <a href="achievement.php" class="nav-link active">
                  <i class="nav-icon bi bi-award"></i>
                  <p>Achievement</p>
                </a>
              </li>

              <li class="nav-item">
                <a href="services.php" class="nav-link">
                  <i class="nav-icon bi bi-briefcase"></i>
                  <p>Service</p>
                </a>
              </li>

              <li class="nav-item">
                <a href="courses.php" class="nav-link">
                  <i class="nav-icon bi bi-journal-text"></i>
                  <p>Course</p>
                </a>
              </li>

              <li class="nav-item">
                <a href="gallery.php" class="nav-link">
                  <i class="nav-icon bi bi-images"></i>
                  <p>Gallery</p>
                </a>
              </li>

              <li class="nav-item">
                <a href="faq.php" class="nav-link">
                  <i class="nav-icon bi bi-question-circle"></i>
                  <p>FAQ</p>
                </a>
              </li>

              <li class="nav-item">
                <a href="logout.php" class="nav-link">
                  <i class="nav-icon bi bi-box-arrow-right"></i>
                  <p>Logout</p>
                </a>
              </li>
            </ul>
          </nav>
        </div>
      </aside>

      <main class="app-main">
        <div class="app-content-header">
          <div class="container-fluid">
            <div class="row">
              <div class="col-sm-6">
                <h3 class="mb-0">Achievement</h3>
              </div>
              <div class="col-sm-6">
                <ol class="breadcrumb float-sm-end">
                  <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                  <li class="breadcrumb-item active" aria-current="page">Achievement</li>
                </ol>
              </div>
            </div>
          </div>
        </div>

        <div class="app-content">
          <div class="container-fluid">

            <?php if (!empty($message)) { ?>
              <div class="alert alert-success alert-dismissible fade show" role="alert">
                <?php echo $message; ?>
                <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
              </div>
            <?php } ?>

            <?php if (!empty($error)) { ?>
              <div class="alert alert-danger alert-dismissible fade show" role="alert">
                <?php echo $error; ?>
                <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
              </div>
            <?php } ?>

            <div class="row">
              <div class="col-md-5">
                <div class="card card-primary card-outline mb-4">
                  <div class="card-header">
                    <div class="card-title">
                      <?php echo $edit_mode ? 'Edit Achievement Image' : 'Add Achievement Image'; ?>
                    </div>
                  </div>

                  <form action="" method="post" enctype="multipart/form-data">
                    <input type="hidden" name="id" value="<?php echo htmlspecialchars($edit_data['id']); ?>">

                    <div class="card-body">
                      <div class="mb-3">
                        <label class="form-label">Image</label>
                        <input
                          type="file"
                          name="image"
                          class="form-control"
                          accept=".jpg,.jpeg,.png,.webp"
                        >
                        <?php if ($edit_mode && !empty($edit_data['image'])) { ?>
                          <div class="mt-2">
                            <img
                              src="<?php echo htmlspecialchars($edit_data['image']); ?>"
                              alt="Current Achievement Image"
                              class="achievement-image-preview"
                            >
                          </div>
                        <?php } ?>
                      </div>
                    </div>

                    <div class="card-footer">
                      <button type="submit" name="submit_achievement" class="btn btn-primary">
                        <?php echo $edit_mode ? 'Update' : 'Submit'; ?>
                      </button>

                      <?php if ($edit_mode) { ?>
                        <a href="achievement.php" class="btn btn-secondary">Cancel</a>
                      <?php } ?>
                    </div>
                  </form>
                </div>
              </div>

              <div class="col-md-7">
                <div class="card card-primary card-outline mb-4">
                  <div class="card-header">
                    <div class="card-title">View Achievement Images</div>
                  </div>

                  <div class="card-body table-responsive">
                    <table class="table table-bordered table-striped align-middle">
                      <thead>
                        <tr>
                          <th style="width: 60px;">ID</th>
                          <th style="width: 140px;">Image</th>
                          <th style="width: 180px;">Created At</th>
                          <th style="width: 150px;">Action</th>
                        </tr>
                      </thead>
                      <tbody>
                        <?php
                        $achievement_query = mysqli_query($conn, "SELECT * FROM achievement ORDER BY id DESC");
                        if ($achievement_query && mysqli_num_rows($achievement_query) > 0) {
                            while ($row = mysqli_fetch_assoc($achievement_query)) {
                        ?>
                          <tr>
                            <td><?php echo $row['id']; ?></td>
                            <td>
                              <img
                                src="<?php echo htmlspecialchars($row['image']); ?>"
                                alt="Achievement Image"
                                class="achievement-image-preview"
                              >
                            </td>
                            <td><?php echo $row['created_at']; ?></td>
                            <td>
                              <a
                                href="achievement.php?edit_id=<?php echo $row['id']; ?>"
                                class="btn btn-success btn-sm"
                              >
                                Edit
                              </a>
                              <a
                                href="achievement.php?delete_id=<?php echo $row['id']; ?>"
                                class="btn btn-danger btn-sm"
                                onclick="return confirm('Are you sure you want to delete this image?')"
                              >
                                Delete
                              </a>
                            </td>
                          </tr>
                        <?php
                            }
                        } else {
                        ?>
                          <tr>
                            <td colspan="4" class="text-center">No achievement image found.</td>
                          </tr>
                        <?php } ?>
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
            </div>

          </div>
        </div>
      </main>

      <footer class="app-footer">
        <div class="float-end d-none d-sm-inline">CMS Management Panel</div>
        All rights reserved.
      </footer>
    </div>

    <script
      src="https://cdn.jsdelivr.net/npm/overlayscrollbars@2.11.0/browser/overlayscrollbars.browser.es6.min.js"
      crossorigin="anonymous"
    ></script>
    <script
      src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
      crossorigin="anonymous"
    ></script>
    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/js/bootstrap.min.js"
      crossorigin="anonymous"
    ></script>
    <script src="./js/adminlte.js"></script>

    <script>
      const SELECTOR_SIDEBAR_WRAPPER = '.sidebar-wrapper';
      const Default = {
        scrollbarTheme: 'os-theme-light',
        scrollbarAutoHide: 'leave',
        scrollbarClickScroll: true,
      };

      document.addEventListener('DOMContentLoaded', function () {
        const sidebarWrapper = document.querySelector(SELECTOR_SIDEBAR_WRAPPER);
        const isMobile = window.innerWidth <= 992;

        if (
          sidebarWrapper &&
          OverlayScrollbarsGlobal?.OverlayScrollbars !== undefined &&
          !isMobile
        ) {
          OverlayScrollbarsGlobal.OverlayScrollbars(sidebarWrapper, {
            scrollbars: {
              theme: Default.scrollbarTheme,
              autoHide: Default.scrollbarAutoHide,
              clickScroll: Default.scrollbarClickScroll,
            },
          });
        }
      });
    </script>
  </body>
</html>