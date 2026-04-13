<?php
session_start();
require_once '../../db.php';

if (!isset($_SESSION['user_id'])) {
    header("Location: login.php");
    exit;
}

function h($value) {
    return htmlspecialchars((string)($value ?? ''), ENT_QUOTES, 'UTF-8');
}

$message = "";
$error = "";
$edit_mode = false;
$upload_dir = 'uploads/ielts-courses/';

$edit_data = [
    'id' => '',
    'course_image' => '',
    'course_title' => '',
    'course_short_description' => '',
    'lecture_hour_details' => '',
    'course_amount' => '',
    'course_level' => '',
    'total_lecture' => '',
    'how_many_hour_lecture' => '',
    'course_long_description' => '',
    'course_curriculum' => ''
];

if (!is_dir($upload_dir)) {
    mkdir($upload_dir, 0777, true);
}

/* DELETE */
if (isset($_GET['delete_id'])) {
    $delete_id = (int) $_GET['delete_id'];

    $old_q = mysqli_query($conn, "SELECT course_image FROM ielts_courses WHERE id = $delete_id LIMIT 1");
    if ($old_q && mysqli_num_rows($old_q) > 0) {
        $old_data = mysqli_fetch_assoc($old_q);
        $old_image = $old_data['course_image'] ?? '';
        if (!empty($old_image) && file_exists($old_image)) {
            unlink($old_image);
        }
    }

    $delete_query = mysqli_query($conn, "DELETE FROM ielts_courses WHERE id = $delete_id");
    if ($delete_query) {
        header("Location: ielts-courses.php?deleted=1");
        exit;
    } else {
        $error = "Delete failed.";
    }
}

/* EDIT LOAD */
if (isset($_GET['edit_id'])) {
    $edit_id = (int) $_GET['edit_id'];
    $edit_query = mysqli_query($conn, "SELECT * FROM ielts_courses WHERE id = $edit_id LIMIT 1");

    if ($edit_query && mysqli_num_rows($edit_query) > 0) {
        $edit_data = mysqli_fetch_assoc($edit_query);
        $edit_mode = true;
    }
}

/* SUCCESS MSG */
if (isset($_GET['deleted'])) {
    $message = "IELTS course deleted successfully.";
}
if (isset($_GET['added'])) {
    $message = "IELTS course added successfully.";
}
if (isset($_GET['updated'])) {
    $message = "IELTS course updated successfully.";
}

/* INSERT / UPDATE */
if (isset($_POST['submit_course'])) {
    $id = isset($_POST['id']) ? (int) $_POST['id'] : 0;
    $course_title = trim($_POST['course_title'] ?? '');
    $course_short_description = trim($_POST['course_short_description'] ?? '');
    $lecture_hour_details = trim($_POST['lecture_hour_details'] ?? '');
    $course_amount = trim($_POST['course_amount'] ?? '');
    $course_level = trim($_POST['course_level'] ?? '');
    $total_lecture = trim($_POST['total_lecture'] ?? '');
    $how_many_hour_lecture = trim($_POST['how_many_hour_lecture'] ?? '');
    $course_long_description = trim($_POST['course_long_description'] ?? '');
    $course_curriculum = trim($_POST['course_curriculum'] ?? '');
    $existing_image = trim($_POST['existing_image'] ?? '');
    $course_image = $existing_image;

    if (
        $course_title === '' ||
        $course_short_description === '' ||
        $lecture_hour_details === '' ||
        $course_amount === '' ||
        $course_level === '' ||
        $total_lecture === '' ||
        $how_many_hour_lecture === '' ||
        $course_long_description === '' ||
        $course_curriculum === ''
    ) {
        $error = "All fields are required.";
    } elseif (!is_numeric($course_amount)) {
        $error = "Course amount must be numeric.";
    } elseif (!is_numeric($total_lecture)) {
        $error = "Total lecture must be numeric.";
    } else {
        if (isset($_FILES['course_image']) && !empty($_FILES['course_image']['name'])) {
            $file_name = $_FILES['course_image']['name'];
            $tmp_name = $_FILES['course_image']['tmp_name'];
            $file_size = $_FILES['course_image']['size'];
            $ext = strtolower(pathinfo($file_name, PATHINFO_EXTENSION));
            $allowed = ['jpg', 'jpeg', 'png', 'webp'];

            if (!in_array($ext, $allowed, true)) {
                $error = "Only JPG, JPEG, PNG, WEBP files are allowed.";
            } elseif ($file_size > 2 * 1024 * 1024) {
                $error = "Image size must be less than 2MB.";
            } else {
                $new_name = $upload_dir . time() . '_' . rand(1000, 9999) . '.' . $ext;
                if (move_uploaded_file($tmp_name, $new_name)) {
                    if (!empty($existing_image) && file_exists($existing_image)) {
                        unlink($existing_image);
                    }
                    $course_image = $new_name;
                } else {
                    $error = "Image upload failed.";
                }
            }
        } elseif ($id === 0) {
            $error = "Course image is required.";
        }
    }

    if ($error === '') {
        $course_title = mysqli_real_escape_string($conn, $course_title);
        $course_short_description = mysqli_real_escape_string($conn, $course_short_description);
        $lecture_hour_details = mysqli_real_escape_string($conn, $lecture_hour_details);
        $course_amount = mysqli_real_escape_string($conn, $course_amount);
        $course_level = mysqli_real_escape_string($conn, $course_level);
        $total_lecture = mysqli_real_escape_string($conn, $total_lecture);
        $how_many_hour_lecture = mysqli_real_escape_string($conn, $how_many_hour_lecture);
        $course_long_description = mysqli_real_escape_string($conn, $course_long_description);
        $course_curriculum = mysqli_real_escape_string($conn, $course_curriculum);
        $course_image_db = mysqli_real_escape_string($conn, $course_image);

        if ($id > 0) {
            $update = "UPDATE ielts_courses SET
                course_image = '$course_image_db',
                course_title = '$course_title',
                course_short_description = '$course_short_description',
                lecture_hour_details = '$lecture_hour_details',
                course_amount = '$course_amount',
                course_level = '$course_level',
                total_lecture = '$total_lecture',
                how_many_hour_lecture = '$how_many_hour_lecture',
                course_long_description = '$course_long_description',
                course_curriculum = '$course_curriculum'
                WHERE id = $id";

            if (mysqli_query($conn, $update)) {
                header("Location: ielts-courses.php?updated=1");
                exit;
            } else {
                $error = "Update failed.";
            }
        } else {
            $insert = "INSERT INTO ielts_courses (
                course_image,
                course_title,
                course_short_description,
                lecture_hour_details,
                course_amount,
                course_level,
                total_lecture,
                how_many_hour_lecture,
                course_long_description,
                course_curriculum
            ) VALUES (
                '$course_image_db',
                '$course_title',
                '$course_short_description',
                '$lecture_hour_details',
                '$course_amount',
                '$course_level',
                '$total_lecture',
                '$how_many_hour_lecture',
                '$course_long_description',
                '$course_curriculum'
            )";

            if (mysqli_query($conn, $insert)) {
                header("Location: ielts-courses.php?added=1");
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
    <meta name="title" content="Admin Panel | IELTS Courses" />
    <meta name="author" content="Starkology" />
    <meta name="description" content="IELTS Courses Management" />
    <meta name="supported-color-schemes" content="light dark" />

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fontsource/source-sans-3@5.0.12/index.css" crossorigin="anonymous" media="print" onload="this.media='all'" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/overlayscrollbars@2.11.0/styles/overlayscrollbars.min.css" crossorigin="anonymous" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.13.1/font/bootstrap-icons.min.css" crossorigin="anonymous" />
    <link rel="stylesheet" href="./css/adminlte.css" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/summernote@0.8.20/dist/summernote-lite.min.css" crossorigin="anonymous" />

    <style>
      .course-thumb {
        width: 90px;
        height: 65px;
        object-fit: cover;
        border-radius: 8px;
        border: 1px solid #ddd;
        background: #fff;
        padding: 2px;
      }
      .note-editor .note-editing-area .note-editable {
        min-height: 180px;
      }
      .text-preview {
        max-width: 220px;
        white-space: nowrap;
        overflow: hidden;
        text-overflow: ellipsis;
      }
    </style>
  </head>

  <body class="layout-fixed sidebar-expand-lg bg-body-tertiary">
    <div class="app-wrapper">
      <nav class="app-header navbar navbar-expand bg-body">
        <div class="container-fluid">
          <ul class="navbar-nav">
            <li class="nav-item">
              <a class="nav-link" data-lte-toggle="sidebar" href="#" role="button"><i class="bi bi-list"></i></a>
            </li>
            <li class="nav-item d-none d-md-block"><a href="index.php" class="nav-link">Dashboard</a></li>
          </ul>
          <ul class="navbar-nav ms-auto">
            <li class="nav-item d-none d-md-block">
              <span class="nav-link">Welcome, <?php echo isset($_SESSION['name']) ? h($_SESSION['name']) : 'Admin'; ?></span>
            </li>
            <li class="nav-item"><a href="logout.php" class="nav-link"><i class="bi bi-box-arrow-right me-1"></i> Logout</a></li>
          </ul>
        </div>
      </nav>

      <aside class="app-sidebar bg-body-secondary shadow" data-bs-theme="dark">
        <div class="sidebar-brand">
          <a href="index.php" class="brand-link">
            <img src="./assets/img/AdminLTELogo.png" alt="Admin Logo" class="brand-image opacity-75 shadow" />
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
              <div class="col-sm-6"><h3 class="mb-0">IELTS Courses</h3></div>
              <div class="col-sm-6">
                <ol class="breadcrumb float-sm-end">
                  <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                  <li class="breadcrumb-item active" aria-current="page">IELTS Courses</li>
                </ol>
              </div>
            </div>
          </div>
        </div>

        <div class="app-content">
          <div class="container-fluid">
            <?php if (!empty($message)) { ?>
              <div class="alert alert-success alert-dismissible fade show" role="alert"><?php echo h($message); ?><button type="button" class="btn-close" data-bs-dismiss="alert"></button></div>
            <?php } ?>
            <?php if (!empty($error)) { ?>
              <div class="alert alert-danger alert-dismissible fade show" role="alert"><?php echo h($error); ?><button type="button" class="btn-close" data-bs-dismiss="alert"></button></div>
            <?php } ?>

            <div class="row">
              <div class="col-md-5">
                <div class="card card-primary card-outline mb-4">
                  <div class="card-header"><div class="card-title"><?php echo $edit_mode ? 'Edit Course' : 'Add New Course'; ?></div></div>
                  <form action="" method="post" enctype="multipart/form-data">
                    <input type="hidden" name="id" value="<?php echo h($edit_data['id']); ?>">
                    <input type="hidden" name="existing_image" value="<?php echo h($edit_data['course_image']); ?>">
                    <div class="card-body">
                      <div class="mb-3">
                        <label class="form-label">Course Image</label>
                        <input type="file" name="course_image" class="form-control" accept=".jpg,.jpeg,.png,.webp">
                        <?php if (!empty($edit_data['course_image'])) { ?>
                          <div class="mt-2"><img src="<?php echo h($edit_data['course_image']); ?>" alt="Course Image" class="course-thumb"></div>
                        <?php } ?>
                      </div>
                      <div class="mb-3"><label class="form-label">Course Title</label><input type="text" name="course_title" class="form-control" value="<?php echo h($edit_data['course_title']); ?>"></div>
                      <div class="mb-3"><label class="form-label">Course Short Description</label><input type="text" name="course_short_description" class="form-control" value="<?php echo h($edit_data['course_short_description']); ?>"></div>
                      <div class="mb-3"><label class="form-label">Lecture Hour Details</label><input type="text" name="lecture_hour_details" class="form-control" value="<?php echo h($edit_data['lecture_hour_details']); ?>"></div>
                      <div class="mb-3"><label class="form-label">Course Amount</label><input type="text" name="course_amount" class="form-control" value="<?php echo h($edit_data['course_amount']); ?>"></div>
                      <div class="mb-3"><label class="form-label">Course Level</label><input type="text" name="course_level" class="form-control" value="<?php echo h($edit_data['course_level']); ?>"></div>
                      <div class="mb-3"><label class="form-label">Number of total Lecture</label><input type="text" name="total_lecture" class="form-control" value="<?php echo h($edit_data['total_lecture']); ?>"></div>
                      <div class="mb-3"><label class="form-label">Lecture Hour Per Class</label><input type="text" name="how_many_hour_lecture" class="form-control" value="<?php echo h($edit_data['how_many_hour_lecture']); ?>"></div>
                      <div class="mb-3"><label class="form-label">Course Details</label><textarea name="course_long_description" id="course_long_description" class="form-control summernote"><?php echo h($edit_data['course_long_description']); ?></textarea></div>
                      <div class="mb-3"><label class="form-label">Course Curriculum</label><textarea name="course_curriculum" id="course_curriculum" class="form-control summernote"><?php echo h($edit_data['course_curriculum']); ?></textarea></div>
                    </div>
                    <div class="card-footer">
                      <button type="submit" name="submit_course" class="btn btn-primary"><?php echo $edit_mode ? 'Update Course' : 'Add Course'; ?></button>
                      <?php if ($edit_mode) { ?><a href="ielts-courses.php" class="btn btn-secondary ms-2">Cancel</a><?php } ?>
                    </div>
                  </form>
                </div>
              </div>

              <div class="col-md-7">
                <div class="card card-primary card-outline mb-4">
                  <div class="card-header"><div class="card-title">View IELTS Courses</div></div>
                  <div class="card-body table-responsive">
                    <table class="table table-bordered table-striped align-middle">
                      <thead>
                        <tr>
                          <th style="width: 60px;">ID</th>
                          <th style="width: 100px;">Image</th>
                          <th>Title</th>
                          <th>Short Description</th>
                          <th style="width: 110px;">Amount</th>
                          <th style="width: 160px;">Action</th>
                        </tr>
                      </thead>
                      <tbody>
                        <?php
                        $course_query = mysqli_query($conn, "SELECT * FROM ielts_courses ORDER BY id DESC");
                        if ($course_query && mysqli_num_rows($course_query) > 0) {
                            while ($row = mysqli_fetch_assoc($course_query)) {
                        ?>
                          <tr>
                            <td><?php echo (int)$row['id']; ?></td>
                            <td>
                              <?php if (!empty($row['course_image'])) { ?>
                                <img src="<?php echo h($row['course_image']); ?>" alt="Course Image" class="course-thumb">
                              <?php } else { ?>
                                <span class="text-muted">No image</span>
                              <?php } ?>
                            </td>
                            <td><?php echo h($row['course_title']); ?></td>
                            <td><div class="text-preview"><?php echo h($row['course_short_description']); ?></div></td>
                            <td>TK<?php echo number_format((float)($row['course_amount'] ?? 0), 0); ?></td>
                            <td>
                              <a href="ielts-courses.php?edit_id=<?php echo (int)$row['id']; ?>" class="btn btn-warning btn-sm">Edit</a>
                              <a href="ielts-courses.php?delete_id=<?php echo (int)$row['id']; ?>" class="btn btn-danger btn-sm" onclick="return confirm('Are you sure you want to delete this course?')">Delete</a>
                            </td>
                          </tr>
                        <?php
                            }
                        } else {
                        ?>
                          <tr><td colspan="6" class="text-center">No IELTS course found.</td></tr>
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
        <div class="float-end d-none d-sm-inline">Anything you want</div>
        All rights reserved.
      </footer>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/jquery@3.7.1/dist/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/overlayscrollbars@2.11.0/browser/overlayscrollbars.browser.es6.min.js"></script>
    <script src="./js/adminlte.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/summernote@0.8.20/dist/summernote-lite.min.js"></script>
    <script>
      $(function () {
        $('.summernote').summernote({
          height: 220,
          placeholder: 'Write here...',
          toolbar: [
            ['style', ['style']],
            ['font', ['bold', 'italic', 'underline', 'clear']],
            ['para', ['ul', 'ol', 'paragraph']],
            ['insert', ['link', 'picture']],
            ['view', ['codeview']]
          ]
        });
      });
    </script>
  </body>
</html>
