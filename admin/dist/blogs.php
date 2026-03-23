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
    'blog_date' => '',
    'title' => '',
    'image' => '',
    'description' => ''
];

/* DELETE */
if (isset($_GET['delete_id'])) {
    $delete_id = (int) $_GET['delete_id'];

    $old_image = '';
    $old_image_query = mysqli_query($conn, "SELECT image FROM blogs WHERE id = $delete_id LIMIT 1");
    if ($old_image_query && mysqli_num_rows($old_image_query) > 0) {
        $old_image_row = mysqli_fetch_assoc($old_image_query);
        $old_image = $old_image_row['image'] ?? '';
    }

    $delete_query = mysqli_query($conn, "DELETE FROM blogs WHERE id = $delete_id");

    if ($delete_query) {
        if (!empty($old_image) && file_exists('../../' . $old_image)) {
            unlink('../../' . $old_image);
        }

        header("Location: blogs.php?deleted=1");
        exit;
    } else {
        $error = "Delete failed.";
    }
}

/* EDIT LOAD */
if (isset($_GET['edit_id'])) {
    $edit_id = (int) $_GET['edit_id'];
    $edit_query = mysqli_query($conn, "SELECT * FROM blogs WHERE id = $edit_id LIMIT 1");

    if ($edit_query && mysqli_num_rows($edit_query) > 0) {
        $edit_data = mysqli_fetch_assoc($edit_query);
        $edit_mode = true;
    }
}

/* SUCCESS MSG */
if (isset($_GET['deleted'])) {
    $message = "Blog deleted successfully.";
}

if (isset($_GET['added'])) {
    $message = "Blog added successfully.";
}

if (isset($_GET['updated'])) {
    $message = "Blog updated successfully.";
}

/* INSERT / UPDATE */
if (isset($_POST['submit_blog'])) {
    $id = isset($_POST['id']) ? (int) $_POST['id'] : 0;
    $blog_date = trim($_POST['blog_date']);
    $title = trim($_POST['title']);
    $description = trim($_POST['description']);
    $existing_image = trim($_POST['existing_image'] ?? '');
    $image = $existing_image;

    if ($blog_date === '' || $title === '' || $description === '') {
        $error = "All fields are required.";
    } else {
        if (isset($_FILES['image']) && !empty($_FILES['image']['name'])) {
            $upload_dir = '../../uploads/blogs/';

            if (!is_dir($upload_dir)) {
                mkdir($upload_dir, 0777, true);
            }

            $file_name = time() . '_' . basename($_FILES['image']['name']);
            $target_file = $upload_dir . $file_name;
            $image_file_type = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));
            $allowed_types = ['jpg', 'jpeg', 'png', 'gif', 'webp'];

            if (!in_array($image_file_type, $allowed_types)) {
                $error = "Only JPG, JPEG, PNG, GIF, WEBP files are allowed.";
            } else {
                if (move_uploaded_file($_FILES['image']['tmp_name'], $target_file)) {
                    $image = 'uploads/blogs/' . $file_name;

                    if (!empty($existing_image) && file_exists('../../' . $existing_image)) {
                        unlink('../../' . $existing_image);
                    }
                } else {
                    $error = "Image upload failed.";
                }
            }
        }

        if ($error === '') {
            $blog_date = mysqli_real_escape_string($conn, $blog_date);
            $title = mysqli_real_escape_string($conn, $title);
            $description = mysqli_real_escape_string($conn, $description);
            $image = mysqli_real_escape_string($conn, $image);

            if ($id > 0) {
                $update = "UPDATE blogs SET
                    blog_date = '$blog_date',
                    title = '$title',
                    image = '$image',
                    description = '$description'
                    WHERE id = $id";

                if (mysqli_query($conn, $update)) {
                    header("Location: blogs.php?updated=1");
                    exit;
                } else {
                    $error = "Update failed.";
                }
            } else {
                $insert = "INSERT INTO blogs (
                    blog_date,
                    title,
                    image,
                    description
                ) VALUES (
                    '$blog_date',
                    '$title',
                    '$image',
                    '$description'
                )";

                if (mysqli_query($conn, $insert)) {
                    header("Location: blogs.php?added=1");
                    exit;
                } else {
                    $error = "Insert failed.";
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

    <meta name="title" content="Admin Panel | Blogs" />
    <meta name="author" content="Starkology" />
    <meta name="description" content="Blogs Management" />
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
      .description-preview {
        max-width: 320px;
        white-space: normal;
        word-break: break-word;
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
                <a href="blogs.php" class="nav-link active">
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
                <h3 class="mb-0">Our Blogs</h3>
              </div>
              <div class="col-sm-6">
                <ol class="breadcrumb float-sm-end">
                  <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                  <li class="breadcrumb-item active" aria-current="page">Blogs</li>
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
                      <?php echo $edit_mode ? 'Edit Blog' : 'Add Blog'; ?>
                    </div>
                  </div>

                  <form action="" method="post" enctype="multipart/form-data">
                    <input type="hidden" name="id" value="<?php echo htmlspecialchars($edit_data['id']); ?>">
                    <input type="hidden" name="existing_image" value="<?php echo htmlspecialchars($edit_data['image'] ?? ''); ?>">

                    <div class="card-body">
                      <div class="mb-3">
                        <label class="form-label">Date</label>
                        <input
                          type="date"
                          name="blog_date"
                          class="form-control"
                          value="<?php echo htmlspecialchars($edit_data['blog_date']); ?>"
                        >
                      </div>

                      <div class="mb-3">
                        <label class="form-label">Title</label>
                        <input
                          type="text"
                          name="title"
                          class="form-control"
                          value="<?php echo htmlspecialchars($edit_data['title']); ?>"
                        >
                      </div>

                      <div class="mb-3">
                        <label class="form-label">Image</label>
                        <input
                          type="file"
                          name="image"
                          class="form-control"
                          accept="image/*"
                        >
                      </div>

                      <?php if (!empty($edit_data['image'])) { ?>
                        <div class="mb-3">
                          <img src="../../<?php echo htmlspecialchars($edit_data['image']); ?>" alt="Blog Image" style="width: 80px; height: 60px; object-fit: cover;">
                        </div>
                      <?php } ?>

                      <div class="mb-3">
                        <label class="form-label">Description</label>
                        <textarea
                          name="description"
                          id="description"
                          class="form-control"
                          rows="8"
                        ><?php echo htmlspecialchars($edit_data['description']); ?></textarea>
                      </div>
                    </div>

                    <div class="card-footer">
                      <button type="submit" name="submit_blog" class="btn btn-primary">
                        <?php echo $edit_mode ? 'Update' : 'Submit'; ?>
                      </button>

                      <?php if ($edit_mode) { ?>
                        <a href="blogs.php" class="btn btn-secondary">Cancel</a>
                      <?php } ?>
                    </div>
                  </form>
                </div>
              </div>

              <div class="col-md-7">
                <div class="card card-primary card-outline mb-4">
                  <div class="card-header">
                    <div class="card-title">View Blogs</div>
                  </div>

                  <div class="card-body table-responsive">
                    <table class="table table-bordered table-striped align-middle">
                      <thead>
                        <tr>
                          <th style="width: 50px;">ID</th>
                          <th style="width: 120px;">Date</th>
                          <th style="width: 180px;">Title</th>
                          <th style="width: 100px;">Image</th>
                          <th>Description</th>
                          <th style="width: 150px;">Action</th>
                        </tr>
                      </thead>
                      <tbody>
                        <?php
                        $blog_query = mysqli_query($conn, "SELECT * FROM blogs ORDER BY id DESC");
                        if ($blog_query && mysqli_num_rows($blog_query) > 0) {
                            while ($row = mysqli_fetch_assoc($blog_query)) {
                        ?>
                          <tr>
                            <td><?php echo $row['id']; ?></td>
                            <td><?php echo htmlspecialchars($row['blog_date']); ?></td>
                            <td><?php echo htmlspecialchars($row['title']); ?></td>
                            <td>
                              <?php if (!empty($row['image'])) { ?>
                                <img src="../../<?php echo htmlspecialchars($row['image']); ?>" alt="Blog Image" style="width: 80px; height: 60px; object-fit: cover;">
                              <?php } ?>
                            </td>
                            <td class="description-preview">
                              <?php echo mb_strimwidth(strip_tags($row['description']), 0, 120, '...'); ?>
                            </td>
                            <td>
                              <a
                                href="blogs.php?edit_id=<?php echo $row['id']; ?>"
                                class="btn btn-success btn-sm"
                              >
                                Edit
                              </a>
                              <a
                                href="blogs.php?delete_id=<?php echo $row['id']; ?>"
                                class="btn btn-danger btn-sm"
                                onclick="return confirm('Are you sure you want to delete this blog?')"
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
                            <td colspan="6" class="text-center">No blog found.</td>
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

    <script src="https://cdn.ckeditor.com/ckeditor5/39.0.1/classic/ckeditor.js"></script>
    <script>
      ClassicEditor
        .create(document.querySelector('#description'))
        .catch(error => {
          console.error(error);
        });
    </script>

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