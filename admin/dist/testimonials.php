<?php
session_start();
require_once '../../db.php';

if (!isset($_SESSION['user_id'])) {
    header("Location: login.php");
    exit;
}

$message = "";
$error = "";
$edit_mode = false;

$edit_data = [
    'id' => '',
    'name' => '',
    'location_details' => '',
    'testimonial_details' => ''
];

/* DELETE */
if (isset($_GET['delete_id'])) {
    $delete_id = (int) $_GET['delete_id'];
    $delete_query = mysqli_query($conn, "DELETE FROM testimonials WHERE id = $delete_id");

    if ($delete_query) {
        header("Location: testimonials.php?deleted=1");
        exit;
    } else {
        $error = "Delete failed.";
    }
}

/* EDIT LOAD */
if (isset($_GET['edit_id'])) {
    $edit_id = (int) $_GET['edit_id'];
    $edit_query = mysqli_query($conn, "SELECT * FROM testimonials WHERE id = $edit_id LIMIT 1");

    if ($edit_query && mysqli_num_rows($edit_query) > 0) {
        $edit_data = mysqli_fetch_assoc($edit_query);
        $edit_mode = true;
    }
}

/* SUCCESS MSG */
if (isset($_GET['deleted'])) {
    $message = "Testimonial deleted successfully.";
}

if (isset($_GET['added'])) {
    $message = "Testimonial added successfully.";
}

if (isset($_GET['updated'])) {
    $message = "Testimonial updated successfully.";
}

/* INSERT / UPDATE */
if (isset($_POST['submit_testimonial'])) {
    $id = isset($_POST['id']) ? (int) $_POST['id'] : 0;
    $name = trim($_POST['name']);
    $location_details = trim($_POST['location_details']);
    $testimonial_details = trim($_POST['testimonial_details']);

    if ($name === '' || $location_details === '' || $testimonial_details === '') {
        $error = "All fields are required.";
    } else {
        $name = mysqli_real_escape_string($conn, $name);
        $location_details = mysqli_real_escape_string($conn, $location_details);
        $testimonial_details = mysqli_real_escape_string($conn, $testimonial_details);

        if ($id > 0) {
            $update = "UPDATE testimonials SET
                name = '$name',
                location_details = '$location_details',
                testimonial_details = '$testimonial_details'
                WHERE id = $id";

            if (mysqli_query($conn, $update)) {
                header("Location: testimonials.php?updated=1");
                exit;
            } else {
                $error = "Update failed.";
            }
        } else {
            $insert = "INSERT INTO testimonials (
                name,
                location_details,
                testimonial_details
            ) VALUES (
                '$name',
                '$location_details',
                '$testimonial_details'
            )";

            if (mysqli_query($conn, $insert)) {
                header("Location: testimonials.php?added=1");
                exit;
            } else {
                $error = "Insert failed.";
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

    <meta name="title" content="Admin Panel | Testimonials" />
    <meta name="author" content="Starkology" />
    <meta name="description" content="Testimonials Management" />
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
      .testimonial-preview {
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
                <a href="blogs.php" class="nav-link">
                  <i class="nav-icon bi bi-pencil-square"></i>
                  <p>Our Blogs</p>
                </a>
              </li>

              <li class="nav-item">
                <a href="testimonials.php" class="nav-link active">
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
                <h3 class="mb-0">Testimonials</h3>
              </div>
              <div class="col-sm-6">
                <ol class="breadcrumb float-sm-end">
                  <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                  <li class="breadcrumb-item active" aria-current="page">Testimonials</li>
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
                      <?php echo $edit_mode ? 'Edit Testimonial' : 'Add Testimonial'; ?>
                    </div>
                  </div>

                  <form action="" method="post">
                    <input type="hidden" name="id" value="<?php echo htmlspecialchars($edit_data['id']); ?>">

                    <div class="card-body">
                      <div class="mb-3">
                        <label class="form-label">Name</label>
                        <input
                          type="text"
                          name="name"
                          class="form-control"
                          value="<?php echo htmlspecialchars($edit_data['name']); ?>"
                        >
                      </div>

                      <div class="mb-3">
                        <label class="form-label">Location Details</label>
                        <input
                          type="text"
                          name="location_details"
                          class="form-control"
                          value="<?php echo htmlspecialchars($edit_data['location_details']); ?>"
                        >
                      </div>

                      <div class="mb-3">
                        <label class="form-label">Testimonials Details</label>
                        <textarea
                          name="testimonial_details"
                          class="form-control"
                          rows="6"
                        ><?php echo htmlspecialchars($edit_data['testimonial_details']); ?></textarea>
                      </div>
                    </div>

                    <div class="card-footer">
                      <button type="submit" name="submit_testimonial" class="btn btn-primary">
                        <?php echo $edit_mode ? 'Update' : 'Submit'; ?>
                      </button>

                      <?php if ($edit_mode) { ?>
                        <a href="testimonials.php" class="btn btn-secondary">Cancel</a>
                      <?php } ?>
                    </div>
                  </form>
                </div>
              </div>

              <div class="col-md-7">
                <div class="card card-primary card-outline mb-4">
                  <div class="card-header">
                    <div class="card-title">View Testimonials</div>
                  </div>

                  <div class="card-body table-responsive">
                    <table class="table table-bordered table-striped align-middle">
                      <thead>
                        <tr>
                          <th style="width: 50px;">ID</th>
                          <th style="width: 160px;">Name</th>
                          <th style="width: 180px;">Location</th>
                          <th>Testimonials Details</th>
                          <th style="width: 150px;">Action</th>
                        </tr>
                      </thead>
                      <tbody>
                        <?php
                        $testimonial_query = mysqli_query($conn, "SELECT * FROM testimonials ORDER BY id DESC");
                        if ($testimonial_query && mysqli_num_rows($testimonial_query) > 0) {
                            while ($row = mysqli_fetch_assoc($testimonial_query)) {
                        ?>
                          <tr>
                            <td><?php echo $row['id']; ?></td>
                            <td><?php echo htmlspecialchars($row['name']); ?></td>
                            <td><?php echo htmlspecialchars($row['location_details']); ?></td>
                            <td class="testimonial-preview">
                              <?php echo mb_strimwidth(strip_tags($row['testimonial_details']), 0, 120, '...'); ?>
                            </td>
                            <td>
                              <a
                                href="testimonials.php?edit_id=<?php echo $row['id']; ?>"
                                class="btn btn-success btn-sm"
                              >
                                Edit
                              </a>
                              <a
                                href="testimonials.php?delete_id=<?php echo $row['id']; ?>"
                                class="btn btn-danger btn-sm"
                                onclick="return confirm('Are you sure you want to delete this testimonial?')"
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
                            <td colspan="5" class="text-center">No testimonial found.</td>
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