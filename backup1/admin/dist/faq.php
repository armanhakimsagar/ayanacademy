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
    'question' => '',
    'answer' => ''
];

if (isset($_GET['delete_id'])) {
    $delete_id = (int) $_GET['delete_id'];
    $delete_query = mysqli_query($conn, "DELETE FROM faq WHERE id = $delete_id");
    if ($delete_query) {
        header("Location: faq.php?deleted=1");
        exit;
    } else {
        $error = "Delete failed.";
    }
}

if (isset($_GET['edit_id'])) {
    $edit_id = (int) $_GET['edit_id'];
    $edit_query = mysqli_query($conn, "SELECT * FROM faq WHERE id = $edit_id LIMIT 1");
    if ($edit_query && mysqli_num_rows($edit_query) > 0) {
        $edit_data = mysqli_fetch_assoc($edit_query);
        $edit_mode = true;
    }
}

if (isset($_GET['deleted'])) $message = "FAQ deleted successfully.";
if (isset($_GET['added'])) $message = "FAQ added successfully.";
if (isset($_GET['updated'])) $message = "FAQ updated successfully.";

if (isset($_POST['submit_faq'])) {
    $id = isset($_POST['id']) ? (int) $_POST['id'] : 0;
    $question = trim($_POST['question'] ?? '');
    $answer = trim($_POST['answer'] ?? '');

    if ($question === '') {
        $error = "Question is required.";
    } elseif ($answer === '') {
        $error = "Answer is required.";
    } else {
        $question_esc = mysqli_real_escape_string($conn, $question);
        $answer_esc = mysqli_real_escape_string($conn, $answer);

        if ($id > 0) {
            $update = "UPDATE faq SET question = '$question_esc', answer = '$answer_esc' WHERE id = $id";
            if (mysqli_query($conn, $update)) {
                header("Location: faq.php?updated=1");
                exit;
            } else {
                $error = "Update failed.";
            }
        } else {
            $insert = "INSERT INTO faq (question, answer) VALUES ('$question_esc', '$answer_esc')";
            if (mysqli_query($conn, $insert)) {
                header("Location: faq.php?added=1");
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
  <meta name="title" content="Admin Panel | FAQ" />
  <meta name="author" content="Starkology" />
  <meta name="description" content="FAQ Management" />
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fontsource/source-sans-3@5.0.12/index.css" crossorigin="anonymous" media="print" onload="this.media='all'" />
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/overlayscrollbars@2.11.0/styles/overlayscrollbars.min.css" crossorigin="anonymous" />
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.13.1/font/bootstrap-icons.min.css" crossorigin="anonymous" />
  <link rel="stylesheet" href="./css/adminlte.css" />
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/summernote@0.8.20/dist/summernote-lite.min.css" crossorigin="anonymous" />
  <style>
    .faq-answer-preview {max-width: 260px; white-space: normal; word-break: break-word;}
    .note-editor .note-editing-area .note-editable {min-height: 180px;}
  </style>
</head>
<body class="layout-fixed sidebar-expand-lg bg-body-tertiary">
<div class="app-wrapper">
<nav class="app-header navbar navbar-expand bg-body">
  <div class="container-fluid">
    <ul class="navbar-nav">
      <li class="nav-item"><a class="nav-link" data-lte-toggle="sidebar" href="#" role="button"><i class="bi bi-list"></i></a></li>
      <li class="nav-item d-none d-md-block"><a href="index.php" class="nav-link">Dashboard</a></li>
    </ul>
    <ul class="navbar-nav ms-auto">
      <li class="nav-item d-none d-md-block"><span class="nav-link">Welcome, <?php echo isset($_SESSION['name']) ? htmlspecialchars($_SESSION['name']) : 'Admin'; ?></span></li>
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
      <ul class="nav sidebar-menu flex-column" data-lte-toggle="treeview" role="navigation" aria-label="Main navigation" data-accordion="false" id="navigation">
        <li class="nav-header">CMS</li>
        <li class="nav-item"><a href="index.php" class="nav-link"><i class="nav-icon bi bi-image"></i><p>Banner</p></a></li>
        <li class="nav-item"><a href="logo.php" class="nav-link"><i class="nav-icon bi bi-badge-ad"></i><p>Logo</p></a></li>
        <li class="nav-item"><a href="pte-courses-campus.php" class="nav-link"><i class="nav-icon bi bi-book"></i><p>PTE Courses (On Campus)</p></a></li>
        <li class="nav-item"><a href="pte-courses-online.php" class="nav-link"><i class="nav-icon bi bi-laptop"></i><p>PTE Courses (Online)</p></a></li>
        <li class="nav-item"><a href="ielts-courses.php" class="nav-link"><i class="nav-icon bi bi-journal-text"></i><p>IELTS Courses</p></a></li>
        <li class="nav-item"><a href="tofel-courses.php" class="nav-link"><i class="nav-icon bi bi-journal-text"></i><p>TOFEL Courses</p></a></li>
        <li class="nav-item"><a href="our-achievements.php" class="nav-link"><i class="nav-icon bi bi-trophy"></i><p>Our Achievements</p></a></li>
        <li class="nav-item"><a href="blogs.php" class="nav-link"><i class="nav-icon bi bi-pencil-square"></i><p>Our Blogs</p></a></li>
        <li class="nav-item"><a href="testimonials.php" class="nav-link"><i class="nav-icon bi bi-chat-left-quote"></i><p>Testimonials</p></a></li>
        <li class="nav-item"><a href="overseas-universities.php" class="nav-link"><i class="nav-icon bi bi-mortarboard"></i><p>Overseas Universities</p></a></li>
        <li class="nav-item"><a href="about-us.php" class="nav-link"><i class="nav-icon bi bi-info-circle"></i><p>About Us</p></a></li>
        <li class="nav-item"><a href="team.php" class="nav-link"><i class="nav-icon bi bi-people"></i><p>Team</p></a></li>
        <li class="nav-item"><a href="mission-vision.php" class="nav-link"><i class="nav-icon bi bi-bullseye"></i><p>Mission / Vision</p></a></li>
        <li class="nav-item"><a href="achievement.php" class="nav-link"><i class="nav-icon bi bi-award"></i><p>Achievement</p></a></li>
        <li class="nav-item"><a href="services.php" class="nav-link"><i class="nav-icon bi bi-briefcase"></i><p>Service</p></a></li>
        <li class="nav-item"><a href="courses.php" class="nav-link"><i class="nav-icon bi bi-journal-text"></i><p>Course</p></a></li>
        <li class="nav-item"><a href="gallery.php" class="nav-link"><i class="nav-icon bi bi-images"></i><p>Gallery</p></a></li>
        <li class="nav-item"><a href="faq.php" class="nav-link active"><i class="nav-icon bi bi-question-circle"></i><p>FAQ</p></a></li>
        <li class="nav-item"><a href="logout.php" class="nav-link"><i class="nav-icon bi bi-box-arrow-right"></i><p>Logout</p></a></li>
      </ul>
    </nav>
  </div>
</aside>

<main class="app-main">
  <div class="app-content-header">
    <div class="container-fluid">
      <div class="row">
        <div class="col-sm-6"><h3 class="mb-0">FAQ</h3></div>
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-end">
            <li class="breadcrumb-item"><a href="index.php">Home</a></li>
            <li class="breadcrumb-item active" aria-current="page">FAQ</li>
          </ol>
        </div>
      </div>
    </div>
  </div>

  <div class="app-content">
    <div class="container-fluid">
      <?php if (!empty($message)) { ?>
        <div class="alert alert-success alert-dismissible fade show" role="alert"><?php echo $message; ?><button type="button" class="btn-close" data-bs-dismiss="alert"></button></div>
      <?php } ?>
      <?php if (!empty($error)) { ?>
        <div class="alert alert-danger alert-dismissible fade show" role="alert"><?php echo $error; ?><button type="button" class="btn-close" data-bs-dismiss="alert"></button></div>
      <?php } ?>

      <div class="row">
        <div class="col-md-5">
          <div class="card card-primary card-outline mb-4">
            <div class="card-header"><div class="card-title"><?php echo $edit_mode ? 'Edit FAQ' : 'Add FAQ'; ?></div></div>
            <form action="" method="post">
              <input type="hidden" name="id" value="<?php echo htmlspecialchars($edit_data['id']); ?>">
              <div class="card-body">
                <div class="mb-3">
                  <label class="form-label">Question</label>
                  <input type="text" name="question" class="form-control" value="<?php echo htmlspecialchars($edit_data['question']); ?>" required>
                </div>
                <div class="mb-3">
                  <label class="form-label">Answer</label>
                  <textarea name="answer" id="answer" class="form-control" rows="8"><?php echo htmlspecialchars($edit_data['answer']); ?></textarea>
                </div>
              </div>
              <div class="card-footer">
                <button type="submit" name="submit_faq" class="btn btn-primary"><?php echo $edit_mode ? 'Update FAQ' : 'Add FAQ'; ?></button>
                <?php if ($edit_mode): ?><a href="faq.php" class="btn btn-secondary ms-2">Cancel</a><?php endif; ?>
              </div>
            </form>
          </div>
        </div>

        <div class="col-md-7">
          <div class="card card-primary card-outline mb-4">
            <div class="card-header"><div class="card-title">View FAQ</div></div>
            <div class="card-body table-responsive">
              <table class="table table-bordered table-striped align-middle">
                <thead>
                  <tr>
                    <th style="width: 60px;">ID</th>
                    <th style="width: 220px;">Question</th>
                    <th>Answer</th>
                    <th style="width: 140px;">Action</th>
                  </tr>
                </thead>
                <tbody>
                <?php
                $faq_query = mysqli_query($conn, "SELECT * FROM faq ORDER BY id DESC");
                if ($faq_query && mysqli_num_rows($faq_query) > 0) {
                    while ($row = mysqli_fetch_assoc($faq_query)) {
                ?>
                  <tr>
                    <td><?php echo $row['id']; ?></td>
                    <td><?php echo htmlspecialchars($row['question']); ?></td>
                    <td class="faq-answer-preview"><?php echo strip_tags($row['answer']); ?></td>
                    <td>
                      <a href="faq.php?edit_id=<?php echo $row['id']; ?>" class="btn btn-primary btn-sm mb-1">Edit</a>
                      <a href="faq.php?delete_id=<?php echo $row['id']; ?>" class="btn btn-danger btn-sm" onclick="return confirm('Are you sure you want to delete this FAQ?')">Delete</a>
                    </td>
                  </tr>
                <?php
                    }
                } else {
                    echo '<tr><td colspan="4" class="text-center">No FAQ found.</td></tr>';
                }
                ?>
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

<script src="./js/adminlte.js"></script>
<script src="https://cdn.jsdelivr.net/npm/jquery@3.7.1/dist/jquery.min.js" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/summernote@0.8.20/dist/summernote-lite.min.js" crossorigin="anonymous"></script>
<script>
$(function () {
    $('#answer').summernote({
        height: 220,
        placeholder: 'Write answer here...',
        toolbar: [
            ['style', ['style']],
            ['font', ['bold', 'italic', 'underline', 'clear']],
            ['para', ['ul', 'ol', 'paragraph']],
            ['insert', ['link', 'picture', 'table']],
            ['view', ['codeview']]
        ]
    });
});
</script>
</body>
</html>
