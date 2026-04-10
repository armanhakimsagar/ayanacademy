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

$upload_dir = "uploads/gallery/";

if (!is_dir($upload_dir)) {
    mkdir($upload_dir, 0777, true);
}

$edit_data = [
    'id' => '',
    'gallery_type' => '',
    'image' => ''
];

/* DELETE */
if (isset($_GET['delete_id'])) {
    $delete_id = (int) $_GET['delete_id'];

    $old_q = mysqli_query($conn, "SELECT image FROM gallery WHERE id = $delete_id LIMIT 1");
    if ($old_q && mysqli_num_rows($old_q) > 0) {
        $old_data = mysqli_fetch_assoc($old_q);
        if (!empty($old_data['image']) && file_exists($old_data['image'])) {
            unlink($old_data['image']);
        }
    }

    $delete_query = mysqli_query($conn, "DELETE FROM gallery WHERE id = $delete_id");
    if ($delete_query) {
        header("Location: gallery.php?deleted=1");
        exit;
    } else {
        $error = "Delete failed.";
    }
}

/* EDIT LOAD */
if (isset($_GET['edit_id'])) {
    $edit_id = (int) $_GET['edit_id'];
    $edit_query = mysqli_query($conn, "SELECT * FROM gallery WHERE id = $edit_id LIMIT 1");

    if ($edit_query && mysqli_num_rows($edit_query) > 0) {
        $edit_data = mysqli_fetch_assoc($edit_query);
        $edit_mode = true;
    }
}

/* SUCCESS MESSAGE */
if (isset($_GET['deleted'])) {
    $message = "Gallery item deleted successfully.";
}

if (isset($_GET['added'])) {
    $message = "Gallery item added successfully.";
}

if (isset($_GET['updated'])) {
    $message = "Gallery item updated successfully.";
}

/* INSERT / UPDATE */
if (isset($_POST['submit_gallery'])) {
    $id = isset($_POST['id']) ? (int) $_POST['id'] : 0;
    $gallery_type = mysqli_real_escape_string($conn, trim($_POST['gallery_type']));

    if (empty($gallery_type)) {
        $error = "Gallery type is required.";
    } else {
        $image_name = "";
        $allowed = ['jpg', 'jpeg', 'png', 'webp'];

        if (!empty($_FILES['image']['name'])) {
            $file_name = $_FILES['image']['name'];
            $tmp_name = $_FILES['image']['tmp_name'];
            $file_size = $_FILES['image']['size'];
            $ext = strtolower(pathinfo($file_name, PATHINFO_EXTENSION));

            if (!in_array($ext, $allowed)) {
                $error = "Only jpg, jpeg, png, webp files are allowed.";
            } else {
                $new_name = time() . "_" . rand(1000,9999) . "." . $ext;
                $image_name = $upload_dir . $new_name;

                if (!move_uploaded_file($tmp_name, $image_name)) {
                    $error = "Image upload failed.";
                }
            }
        }

        if (empty($error)) {
            if ($id > 0) {
                $old_img = $edit_data['image'];

                if (!empty($image_name)) {
                    if (!empty($old_img) && file_exists($old_img)) {
                        unlink($old_img);
                    }

                    $update = "UPDATE gallery 
                               SET gallery_type = '$gallery_type', image = '$image_name' 
                               WHERE id = $id";
                } else {
                    $update = "UPDATE gallery 
                               SET gallery_type = '$gallery_type' 
                               WHERE id = $id";
                }

                if (mysqli_query($conn, $update)) {
                    header("Location: gallery.php?updated=1");
                    exit;
                } else {
                    $error = "Update failed.";
                }
            } else {
                if (empty($image_name)) {
                    $error = "Image is required.";
                } else {
                    $insert = "INSERT INTO gallery (gallery_type, image) 
                               VALUES ('$gallery_type', '$image_name')";

                    if (mysqli_query($conn, $insert)) {
                        header("Location: gallery.php?added=1");
                        exit;
                    } else {
                        $error = "Insert failed.";
                    }
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

    <meta name="title" content="Admin Panel | Gallery" />
    <meta name="author" content="Starkology" />
    <meta name="description" content="Gallery Management" />
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
      .gallery-thumb {
        width: 80px;
        height: 60px;
        object-fit: cover;
        border-radius: 6px;
        border: 1px solid #ddd;
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
  <!--begin::Sidebar Menu-->
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
      <a href="ielts-courses.php" class="nav-link">
        <i class="nav-icon bi bi-journal-text"></i>
        <p>IELTS Courses</p>
      </a>
    </li>

    <li class="nav-item">
      <a href="tofel-courses.php" class="nav-link">
        <i class="nav-icon bi bi-journal-text"></i>
        <p>TOFEL Courses</p>
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
      <a href="achievement.php" class="nav-link">
        <i class="nav-icon bi bi-award"></i>
        <p>Achievement</p>
      </a>
    </li>

    <li class="nav-item">
      <a href="services.php" class="nav-link">
        <i class="nav-icon bi bi-briefcase"></i>
        <p>
          Service
        </p>
      </a>
    </li>

    <li class="nav-item">
      <a href="courses.php" class="nav-link">
        <i class="nav-icon bi bi-journal-text"></i>
        <p>
          Course
        </p>
      </a>
    </li>

    <li class="nav-item">
      <a href="gallery.php" class="nav-link">
        
      <i class="nav-icon bi bi-journal-text"></i>
        <p>
          Gallery
        </p>
      </a>
    </li>

    <li class="nav-item">
      <a href="faq.php" class="nav-link">
        
      <i class="nav-icon bi bi-journal-text"></i>
        <p>FAQ</p>
      </a>
    </li>
    <li class="nav-item">
      
    <i class="nav-icon bi bi-journal-text"></i>
      <a href="logout.php" class="nav-link">
        <p>Logout</p>
      </a>
    </li>
  </ul>
  <!--end::Sidebar Menu-->
</nav>
        </div>
      </aside>

      <main class="app-main">
        <div class="app-content-header">
          <div class="container-fluid">
            <div class="row">
              <div class="col-sm-6">
                <h3 class="mb-0">Gallery</h3>
              </div>
              <div class="col-sm-6">
                <ol class="breadcrumb float-sm-end">
                  <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                  <li class="breadcrumb-item active" aria-current="page">Gallery</li>
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
                      <?php echo $edit_mode ? 'Edit Gallery Item' : 'Add Gallery Item'; ?>
                    </div>
                  </div>

                  <form action="" method="post" enctype="multipart/form-data">
                    <input type="hidden" name="id" value="<?php echo htmlspecialchars($edit_data['id']); ?>">

                    <div class="card-body">
                      <div class="mb-3">
                        <label class="form-label">Gallery Type</label>
                        <select name="gallery_type" class="form-select" required>
                          <option value="">Select Gallery Type</option>
                          <?php
                            $gallery_options = [
                                'pte score card',
                                'seminar pics'
                            ];

                            foreach ($gallery_options as $option) {
                                $selected = ($edit_data['gallery_type'] == $option) ? 'selected' : '';
                                echo '<option value="' . htmlspecialchars($option) . '" ' . $selected . '>' . ucwords($option) . '</option>';
                            }
                          ?>
                        </select>
                      </div>

                      <div class="mb-3">
                        <label class="form-label">Image</label>
                        <input type="file" name="image" class="form-control" <?php echo $edit_mode ? '' : 'required'; ?> accept="image/*">
                      </div>

                      <?php if ($edit_mode && !empty($edit_data['image'])) { ?>
                        <div class="mb-3">
                          <label class="form-label d-block">Current Image</label>
                          <img src="<?php echo $edit_data['image']; ?>" alt="Gallery Image" class="gallery-thumb">
                        </div>
                      <?php } ?>
                    </div>

                    <div class="card-footer">
                      <button type="submit" name="submit_gallery" class="btn btn-primary">
                        <?php echo $edit_mode ? 'Update' : 'Submit'; ?>
                      </button>

                      <?php if ($edit_mode) { ?>
                        <a href="gallery.php" class="btn btn-secondary">Cancel</a>
                      <?php } ?>
                    </div>
                  </form>
                </div>
              </div>

              <div class="col-md-7">
                <div class="card card-primary card-outline mb-4">
                  <div class="card-header">
                    <div class="card-title">View Gallery</div>
                  </div>

                  <div class="card-body table-responsive">
                    <table class="table table-bordered table-striped align-middle">
                      <thead>
                        <tr>
                          <th style="width: 60px;">ID</th>
                          <th style="width: 160px;">Image</th>
                          <th style="width: 220px;">Gallery Type</th>
                          <th style="width: 180px;">Created At</th>
                          <th style="width: 150px;">Action</th>
                        </tr>
                      </thead>
                      <tbody>
                        <?php
                        $gallery_query = mysqli_query($conn, "SELECT * FROM gallery ORDER BY id DESC");
                        if ($gallery_query && mysqli_num_rows($gallery_query) > 0) {
                            while ($row = mysqli_fetch_assoc($gallery_query)) {
                        ?>
                          <tr>
                            <td><?php echo $row['id']; ?></td>
                            <td>
                              <img src="<?php echo $row['image']; ?>" alt="Gallery Image" class="gallery-thumb">
                            </td>
                            <td><?php echo ucwords(htmlspecialchars($row['gallery_type'])); ?></td>
                            <td><?php echo $row['created_at']; ?></td>
                            <td>
                              <a
                                href="gallery.php?edit_id=<?php echo $row['id']; ?>"
                                class="btn btn-success btn-sm"
                              >
                                Edit
                              </a>
                              <a
                                href="gallery.php?delete_id=<?php echo $row['id']; ?>"
                                class="btn btn-danger btn-sm"
                                onclick="return confirm('Are you sure you want to delete this item?')"
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
                            <td colspan="5" class="text-center">No gallery item found.</td>
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
      src="https://cdn.jsdelivr.net/npm/jquery@3.7.1/dist/jquery.min.js"
      crossorigin="anonymous"
    ></script>
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