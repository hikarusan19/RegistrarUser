<?php
include '../other/connection.php'; // ✅ Include database connection

// 🧩 Helper function to safely execute COUNT queries
function getCount($conn, $sql) {
    $result = $conn->query($sql);
    if (!$result) {
        die("❌ SQL Error: " . $conn->error . "<br>Query: " . $sql);
    }
    $row = $result->fetch_assoc();
    return $row['total'];
}

// 📊 Retrieve key metrics for the dashboard
$total_students       = getCount($conn, "SELECT COUNT(*) AS total FROM students");
$active_students      = getCount($conn, "SELECT COUNT(*) AS total FROM students WHERE Status='Active'");
$graduated_students   = getCount($conn, "SELECT COUNT(*) AS total FROM students WHERE Status='Graduated'");
$current_semester     = '1st Semester 2025'; // ✏️ Static semester (adjust if dynamic)
$new_enrollees        = getCount($conn, "SELECT COUNT(*) AS total FROM students WHERE Status='New Enrollee'");
$pending_requests     = getCount($conn, "SELECT COUNT(*) AS total FROM document_requests WHERE Status='Pending'");
$total_faculty        = getCount($conn, "SELECT COUNT(*) AS total FROM departments");
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Registrar Dashboard</title>

  <!-- ✅ Bootstrap & Icons -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="style.css?v=1.1" />
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.css">
</head>

<body>
<!-- Sidebar -->
<div class="sidebar d-flex flex-column vh-100 position-fixed shadow-lg" id="sidebar">
  <!-- Header -->
  <div class="d-flex align-items-center justify-content-between p-3 border-bottom">
    <div class="d-flex align-items-center">
      <img src="../img\LOGO.png" alt="Logo" class="rounded-circle me-2 border border-light" style="width:50px;height:50px;">
      <div>
        <div class="fw-bold fs-6">Registrar</div>
        <div class="small text-light opacity-75">Student Information System</div>
      </div>
    </div>
  </div>

  <!-- Navigation -->
    <div class="mt-4 flex-grow-1">
      <a href="../Dashboard/index.php" class="nav-link px-3 py-2 active">
        <i class="bi bi-speedometer2 me-3"></i> Dashboard
      </a>
      <a href="../Personal_Info/personalinfo.php" class="nav-link px-3 py-2">
        <i class="bi bi-person-vcard me-3"></i> Student Information
      </a>
      <a href="../Academic_history/academic.php" class="nav-link px-3 py-2">
        <i class="bi bi-mortarboard me-3"></i> Academic Records
      </a>
      <a href="../Document_Request/document.php" class="nav-link px-3 py-2">
        <i class="bi bi-file-earmark-text me-3"></i> Document Requests
      </a>
      <a href="../Student_status/student_status.php" class="nav-link px-3 py-2">
        <i class="bi bi-clipboard-data me-3"></i> Student Status Tracker
      </a>
      <a href="../Digital_file_storage/digital_file.php" class="nav-link px-3 py-2">
        <i class="bi bi-cloud-arrow-up me-3"></i> Digital File Storage
      </a>
      <a href="../Student_masterlist/student_masterlist.php" class="nav-link px-3 py-2">
        <i class="bi bi-list-columns-reverse me-3"></i> Student Masterlist
      </a>
    </div>
  <!-- User Info Dropdown -->
  <div class="user-box mt-auto p-3 border-top dropdown">
    <div
      class="d-flex align-items-center justify-content-between text-decoration-none text-light"
      id="userMenu"
      data-bs-toggle="dropdown"
      aria-expanded="false"
      style="cursor:pointer;"
    >
      <div class="d-flex align-items-center">
        <div class="rounded-circle border border-light me-3"
             style="width:40px;height:40px;background:#ffffff22;"></div>
        <div>
          <div class="fw-semibold mb-0 text-light">Emmar John</div>
          <span class="small text-light">Staff</span>
        </div>
      </div>
      <i class="bi bi-chevron-up ms-2 small opacity-75"></i>
    </div>

    <!-- Dropdown Menu -->
    <ul class="dropdown-menu dropdown-menu-end shadow border-0 mt-2"
        aria-labelledby="userMenu"
        style="background:#1f355f;">
      <li>
        <a class="dropdown-item text-light py-2" href="profile.php">
          <i class="bi bi-person-gear me-2"></i> Profile Settings
        </a>
      </li>
      <li>
        <hr class="dropdown-divider border-light opacity-25">
      </li>
      <li>
        <a class="dropdown-item text-danger py-2" href="logout.php">
          <i class="bi bi-box-arrow-right me-2"></i> Log Out
        </a>
      </li>
    </ul>
  </div>
</div>


  <!-- ✅ Main Content Wrapper -->
  <div class="main-content" style="margin-left:260px;">

    <!-- 🔝 Navbar -->
    <nav class="navbar navbar-light bg-white border-bottom px-4 py-2 d-flex align-items-center justify-content-between shadow-sm"
         style="position:sticky; top:0; z-index:1020;">
      <button id="toggleSidebarBtn" class="btn btn-light p-2 border-0">
        <i class="bi bi-list" style="font-size: 1.7rem;"></i>
      </button>
      <h5 class="fw-bold mb-0 text-dark">Registrar Panel</h5>
    </nav>

    <!-- 📌 Page Header -->
    <div class="page-header text-center my-4">
      <h1>Registrar Dashboard</h1>
      <div class="page-subtitle">“Student Enrollment Overview and Registrar Insights”</div>
    </div>

    <!-- 🧮 Dashboard Insights -->
    <div class="container-fluid mt-4">
      <div class="row g-4">

        <!-- 🧑‍🎓 Total Students -->
        <div class="col-md-4">
          <div class="card card-box p-3 mb-3">
            <div class="d-flex justify-content-between align-items-center">
              <h5>Total number of students</h5>
              <i class="bi bi-people fs-3 text-primary"></i>
            </div>
            <h2><?php echo number_format($total_students); ?></h2>
            <span class="text-muted small">All enrolled students</span>
          </div>
        </div>

        <!-- 🟢 Active Students -->
        <div class="col-md-4">
          <div class="card card-box p-3 mb-3">
            <div class="d-flex justify-content-between align-items-center">
              <h5>Active students</h5>
              <i class="bi bi-person-check fs-3 text-success"></i>
            </div>
            <h2><?php echo number_format($active_students); ?></h2>
            <span class="text-muted small">Currently attending</span>
          </div>
        </div>

        <!-- 🎓 Graduated Students -->
        <div class="col-md-4">
          <div class="card card-box p-3 mb-3">
            <div class="d-flex justify-content-between align-items-center">
              <h5>Graduated students</h5>
              <i class="bi bi-mortarboard fs-3 text-warning"></i>
            </div>
            <h2><?php echo number_format($graduated_students); ?></h2>
            <span class="text-muted small">Total graduates</span>
          </div>
        </div>

        <!-- 🆕 New Enrollees -->
        <div class="col-md-4">
          <div class="card card-box p-3 mb-3">
            <div class="d-flex justify-content-between align-items-center">
              <h5>New enrollees (This Semester)</h5>
              <i class="bi bi-person-plus fs-3 text-info"></i>
            </div>
            <h2><?php echo number_format($new_enrollees); ?></h2>
            <span class="text-muted small">Joined this semester</span>
          </div>
        </div>

        <!-- 🕓 Pending Document Requests -->
        <div class="col-md-4">
          <div class="card card-box p-3 mb-3">
            <div class="d-flex justify-content-between align-items-center">
              <h5>Pending document requests</h5>
              <i class="bi bi-file-earmark-text fs-3 text-danger"></i>
            </div>
            <h2><?php echo number_format($pending_requests); ?></h2>
            <span class="text-muted small">Awaiting processing</span>
          </div>
        </div>

        <!-- 🏫 Total Faculty or Departments -->
        <div class="col-md-4">
          <div class="card card-box p-3 mb-3">
            <div class="d-flex justify-content-between align-items-center">
              <h5>Total faculty or departments</h5>
              <i class="bi bi-building fs-3 text-secondary"></i>
            </div>
            <h2><?php echo number_format($total_faculty); ?></h2>
            <span class="text-muted small">Academic units</span>
          </div>
        </div>
      </div>

      <!-- 📈 Charts Section -->
      <div class="row mt-4">

        <!-- 📊 Student Enrollment per Year -->
        <div class="col-12">
          <div class="card card-box p-4 mb-3">
            <div class="d-flex justify-content-between align-items-center mb-3">
              <h5>Student Enrollment Per Year</h5>
              <select id="enrollmentFilter" class="form-select w-auto ms-3">
                <option value="all">All Departments</option>
                <option value="cpe">BS Computer Engineering</option>
                <option value="it">BS Information Technology</option>
                <option value="crim">BS Criminology</option>
                <option value="ba">BS Business Administration</option>
                <option value="oa">BS Office Administration</option>
                <option value="elem">Bachelor of Elementary Education</option>
                <option value="sec">Bachelor of Secondary Education</option>
              </select>
            </div>
            <canvas id="enrollmentChart" height="100"></canvas>
            <div class="mt-3">
              <button class="btn btn-primary" id="makeReportBtn">Make Report</button>
            </div>
          </div>
        </div>

        <!-- 📑 Document Requests Chart -->
        <div class="col-12">
          <div class="card card-box p-4 mb-3">
            <div class="d-flex flex-wrap align-items-center mb-3 gap-2">
              <h5>Document Requests (Monthly)</h5>
              <select id="documentYearFilter" class="form-select w-auto ms-3">
                <!-- 📅 Years populated via JS -->
              </select>
              <select id="documentTypeFilter" class="form-select w-auto ms-3">
                <option value="all">All Types</option>
                <option value="form137">Form 137</option>
                <option value="goodmoral">Good Moral</option>
                <option value="tor">Transcript of Records</option>
                <option value="diploma">Diploma</option>
              </select>
            </div>
            <canvas id="documentChart" height="100"></canvas>
          </div>
        </div>

        <!-- 📚 Courses by Student Count -->
        <div class="col-12">
          <div class="card card-box p-4 mb-3">
            <div class="d-flex justify-content-between align-items-center mb-3">
              <h5>Courses by Student Count</h5>
              <select id="courseFilter" class="form-select w-auto ms-3">
                <option value="all">All Year Levels/Semesters</option>
                <option value="1st">1st Year</option>
                <option value="2nd">2nd Year</option>
                <option value="3rd">3rd Year</option>
                <option value="4th">4th Year</option>
                <option value="sem1">1st Semester</option>
                <option value="sem2">2nd Semester</option>
              </select>
            </div>
            <canvas id="coursesChart" height="120"></canvas>
          </div>
        </div>

        <!-- 🚻 Student Gender Chart -->
        <div class="col-12">
          <div class="card card-box p-4 mb-3">
            <div class="d-flex justify-content-between align-items-center mb-3">
              <h5>Student Gender</h5>
              <select id="genderDeptFilter" class="form-select w-auto ms-3">
                <option value="all">All Departments</option>
                <option value="cpe">BS Computer Engineering</option>
                <option value="it">BS Information Technology</option>
                <option value="crim">BS Criminology</option>
                <option value="ba">BS Business Administration</option>
                <option value="oa">BS Office Administration</option>
                <option value="elem">Bachelor of Elementary Education</option>
                <option value="sec">Bachelor of Secondary Education</option>
              </select>
            </div>
            <canvas id="genderChart" height="100"></canvas>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- 🌀 Loader Overlay -->
  <div id="loader" class="loader-overlay">
    <div class="spinner-border text-light" role="status"></div>
    <p class="text-white mt-3 fw-semibold">Loading, please wait...</p>
  </div>

  <!-- 📜 Scripts -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
  <script src="../other/sidebar.js"></script>
  <script src="../other/loading.js"></script>

</body>
</html>
