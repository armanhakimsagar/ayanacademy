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
    'service_type' => '',
    'description' => ''
];

/* DELETE */
if (isset($_GET['delete_id'])) {
    $delete_id = (int) $_GET['delete_id'];

    $delete_query = mysqli_query($conn, "DELETE FROM services WHERE id = $delete_id");
    if ($delete_query) {
        header("Location: services.php?deleted=1");
        exit;
    } else {
        $error = "Delete failed.";
    }
}

/* EDIT LOAD */
if (isset($_GET['edit_id'])) {
    $edit_id = (int) $_GET['edit_id'];
    $edit_query = mysqli_query($conn, "SELECT * FROM services WHERE id = $edit_id LIMIT 1");

    if ($edit_query && mysqli_num_rows($edit_query) > 0) {
        $edit_data = mysqli_fetch_assoc($edit_query);
        $edit_mode = true;
    }
}

/* SUCCESS MESSAGE */
if (isset($_GET['deleted'])) {
    $message = "Service deleted successfully.";
}

if (isset($_GET['added'])) {
    $message = "Service added successfully.";
}

if (isset($_GET['updated'])) {
    $message = "Service updated successfully.";
}

/* INSERT / UPDATE */
if (isset($_POST['submit_service'])) {
    $id = isset($_POST['id']) ? (int) $_POST['id'] : 0;
    $service_type = mysqli_real_escape_string($conn, trim($_POST['service_type']));
    $description = mysqli_real_escape_string($conn, trim($_POST['description']));

    if (empty($service_type)) {
        $error = "Service type is required.";
    } elseif (empty($description)) {
        $error = "Description is required.";
    } else {
        if ($id > 0) {
            $update = "UPDATE services 
                       SET service_type = '$service_type', description = '$description' 
                       WHERE id = $id";

            if (mysqli_query($conn, $update)) {
                header("Location: services.php?updated=1");
                exit;
            } else {
                $error = "Update failed.";
            }
        } else {
            $insert = "INSERT INTO services (service_type, description) 
                       VALUES ('$service_type', '$description')";

            if (mysqli_query($conn, $insert)) {
                header("Location: services.php?added=1");
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

    <meta name="title" content="Admin Panel | Service" />
    <meta name="author" content="Starkology" />
    <meta name="description" content="Service Management" />
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

    <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/summernote@0.8.20/dist/summernote-lite.min.css"
      crossorigin="anonymous"
    />

    <style>
      .service-desc-preview {
        max-width: 220px;
        white-space: nowrap;
        overflow: hidden;
        text-overflow: ellipsis;
      }

      .note-editor .note-editing-area .note-editable {
        min-height: 180px;
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
                <h3 class="mb-0">Service</h3>
              </div>
              <div class="col-sm-6">
                <ol class="breadcrumb float-sm-end">
                  <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                  <li class="breadcrumb-item active" aria-current="page">Service</li>
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
                      <?php echo $edit_mode ? 'Edit Service' : 'Add Service'; ?>
                    </div>
                  </div>

                  <form action="" method="post">
                    <input type="hidden" name="id" value="<?php echo htmlspecialchars($edit_data['id']); ?>">

                    <div class="card-body">
                      <div class="mb-3">
                        <label class="form-label">Service Type</label>
                        <select name="service_type" class="form-select" required>
                          <option value="">Select Service Type</option>
                          <?php
                            $service_options = [
                                'study aboard',
                                'pte exam registration',
                                'pte mock tests',
                                'study in usa',
                                'study in canada',
                                'study in australia',
                                'study in germany',
                                'study in new zealand',
                                'study in denmark',
                                'study in hungry',
                                'study in neatherlands'
                            ];

                            foreach ($service_options as $option) {
                                $selected = ($edit_data['service_type'] == $option) ? 'selected' : '';
                                echo '<option value="' . htmlspecialchars($option) . '" ' . $selected . '>' . ucwords($option) . '</option>';
                            }
                          ?>
                        </select>
                      </div>

                      <div class="mb-3">
                        <label class="form-label">Description</label>
                        <textarea
                          name="description"
                          id="summernote"
                          class="form-control"
                          required
                        ><?php echo htmlspecialchars($edit_data['description']); ?></textarea>
                      </div>
                    </div>

                    <div class="card-footer">
                      <button type="submit" name="submit_service" class="btn btn-primary">
                        <?php echo $edit_mode ? 'Update' : 'Submit'; ?>
                      </button>

                      <?php if ($edit_mode) { ?>
                        <a href="services.php" class="btn btn-secondary">Cancel</a>
                      <?php } ?>
                    </div>
                  </form>
                </div>
              </div>

              <div class="col-md-7">
                <div class="card card-primary card-outline mb-4">
                  <div class="card-header">
                    <div class="card-title">View Services</div>
                  </div>

                  <div class="card-body table-responsive">
                    <table class="table table-bordered table-striped align-middle">
                      <thead>
                        <tr>
                          <th style="width: 60px;">ID</th>
                          <th style="width: 220px;">Service Type</th>
                          <th>Description</th>
                          <th style="width: 180px;">Created At</th>
                          <th style="width: 150px;">Action</th>
                        </tr>
                      </thead>
                      <tbody>
                        <?php
                        $service_query = mysqli_query($conn, "SELECT * FROM services ORDER BY id DESC");
                        if ($service_query && mysqli_num_rows($service_query) > 0) {
                            while ($row = mysqli_fetch_assoc($service_query)) {
                        ?>
                          <tr>
                            <td><?php echo $row['id']; ?></td>
                            <td><?php echo ucwords(htmlspecialchars($row['service_type'])); ?></td>
                            <td
                              class="service-desc-preview"
                              title="<?php echo htmlspecialchars(strip_tags($row['description'])); ?>"
                            >
                              <?php
                                $text = strip_tags($row['description']);
                                $short = mb_substr($text, 0, 10);
                                echo htmlspecialchars($short) . (mb_strlen($text) > 10 ? '...' : '');
                              ?>
                            </td>
                            <td><?php echo $row['created_at']; ?></td>
                            <td>
                              <a
                                href="services.php?edit_id=<?php echo $row['id']; ?>"
                                class="btn btn-success btn-sm"
                              >
                                Edit
                              </a>
                              <a
                                href="services.php?delete_id=<?php echo $row['id']; ?>"
                                class="btn btn-danger btn-sm"
                                onclick="return confirm('Are you sure you want to delete this service?')"
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
                            <td colspan="5" class="text-center">No service found.</td>
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

    <script
      src="https://cdn.jsdelivr.net/npm/summernote@0.8.20/dist/summernote-lite.min.js"
      crossorigin="anonymous"
    ></script>

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

        $('#summernote').summernote({
          height: 220
        });
      });
    </script>
  </body>
</html>