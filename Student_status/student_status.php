<?php
include '../other/connection.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Student Information</title>

  <!-- ✅ Bootstrap & Icons -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="style.css?v=1.6" />
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.css">
</head>

<body>
  <!-- ✅ Sidebar -->
<!-- Sidebar -->
<div class="sidebar d-flex flex-column vh-100 position-fixed shadow-lg" id="sidebar">
  <!-- Header -->
  <div class="d-flex align-items-center justify-content-between p-3 border-bottom">
    <div class="d-flex align-items-center">
      <img src="..\img\LOGO.png" alt="Logo" class="rounded-circle me-2 border border-light" style="width:50px;height:50px;">
      <div>
        <div class="fw-bold fs-6">Registrar</div>
        <div class="small text-light opacity-75">Student Information System</div>
      </div>
    </div>
  </div>

  <!-- Navigation -->
    <div class="mt-4 flex-grow-1">
      <a href="../Dashboard/index.php" class="nav-link px-3 py-2">
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
      <a href="../Student_status/student_status.php" class="nav-link px-3 py-2 active">
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
      class="d-flex align-items-center justify-content-between dropdown-toggle text-decoration-none text-light"
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

    <!-- ✅ Navbar -->
    <nav class="navbar navbar-light bg-white border-bottom px-4 py-2 d-flex align-items-center justify-content-between shadow-sm"
         style="position:sticky; top:0; z-index:1020;">
      <button id="toggleSidebarBtn" class="btn btn-light p-2 border-0">
        <i class="bi bi-list" style="font-size: 1.7rem;"></i>
      </button>
      <h5 class="fw-bold mb-0 text-dark">Registrar Panel</h5>
    </nav>

    <!-- ✅ Page Header -->
      <div class="page-header text-center my-4">
      <h1>View Student Status Overview</h1>
      <div class="page-subtitle">"Displays each student’s current academic status and summary statistics"</div>
    </div>
  <!-- 📊 Summary Cards -->
   <div class="container-fluid mt-4">
  <div class="row g-3 mb-4">
    <div class="col-md-3">
      <div class="card shadow-sm border-0 rounded-3">
        <div class="card-body text-center">
          <i class="bi bi-person-check text-success fs-2"></i>
          <h6 class="mt-2 fw-semibold">Active Students</h6>
          <h3 class="fw-bold text-dark">31</h3>
        </div>
      </div>
    </div>
    <div class="col-md-3">
      <div class="card shadow-sm border-0 rounded-3">
        <div class="card-body text-center">
          <i class="bi bi-person-exclamation text-warning fs-2"></i>
          <h6 class="mt-2 fw-semibold">Irregular Students</h6>
          <h3 class="fw-bold text-dark">5</h3>
        </div>
      </div>
    </div>
    <div class="col-md-3">
      <div class="card shadow-sm border-0 rounded-3">
        <div class="card-body text-center">
          <i class="bi bi-person-dash text-danger fs-2"></i>
          <h6 class="mt-2 fw-semibold">Dropped Students</h6>
          <h3 class="fw-bold text-dark">2</h3>
        </div>
      </div>
    </div>
    <div class="col-md-3">
      <div class="card shadow-sm border-0 rounded-3">
        <div class="card-body text-center">
          <i class="bi bi-person-plus text-info fs-2"></i>
          <h6 class="mt-2 fw-semibold">New Students</h6>
          <h3 class="fw-bold text-dark">17</h3>
        </div>
      </div>
    </div>
  </div>

  <!-- 🔍 Filters -->
  <div class="card shadow-sm border-0 mb-3">
    <div class="card-body">
      <div class="row g-3 align-items-center">
        <div class="col-md-3">
          <input type="text" class="form-control" placeholder="Student ID">
        </div>
        <div class="col-md-2">
          <select class="form-select">
            <option selected>Course</option>
            <option>BSIT</option>
            <option>BSED</option>
            <option>BSBA</option>
          </select>
        </div>
        <div class="col-md-2">
          <select class="form-select">
            <option selected>Year</option>
            <option>1st Year</option>
            <option>2nd Year</option>
            <option>3rd Year</option>
            <option>4th Year</option>
          </select>
        </div>
        <div class="col-md-2">
          <select class="form-select">
            <option selected>Status</option>
            <option>Active</option>
            <option>Irregular</option>
            <option>Dropped</option>
            <option>Graduated</option>
          </select>
        </div>
        <div class="col-md-1 text-end">
          <button class="btn btn-primary w-100">
            <i class="bi bi-search"></i>
          </button>
        </div>
      </div>
    </div>
  </div>
  <!-- ➕ Add New Status Button -->
  <div class="text-end mt-3">
    <button class="btn btn-success rounded-3 px-4" data-bs-toggle="modal" data-bs-target="#addStatusModal">
      <i class="bi bi-plus-circle me-1"></i> Add New Status
    </button>
  </div>
  
  <!-- 📋 Student Status Table -->
<div class="container-fluid p-4">
  <div class="table-responsive">
    <table class="table table-bordered table-striped text-center custom-table" id="studentTable">
      <thead class="table-light">
        <tr>
          <th>No.</th>
          <th>Student ID</th>
          <th>Last Name</th>
          <th>First Name</th>
          <th>Course</th>
          <th>Year</th>
          <th>Status</th>
          <th>Action</th>
        </tr>
      </thead>
<tbody>
  <tr>
    <td>1</td>
    <td>220001</td>
    <td>Santos</td>
    <td>Maria</td>
    <td>BSIT</td>
    <td>3rd Year</td>
    <td><span class="badge bg-success px-3 py-2"> Active</span></td>
    <td>
      <button class="btn btn-primary btn-sm rounded-3" data-bs-toggle="modal" data-bs-target="#viewStatusModal">View</button>

      <button class="btn btn-warning btn-sm rounded-3" data-bs-toggle="modal" data-bs-target="#editStatusModal">Edit</button>
    </td>
  </tr>
  <tr>
    <td>2</td>
    <td>220002</td>
    <td>Cruz</td>
    <td>Juan</td>
    <td>BSED</td>
    <td>2nd Year</td>
    <td><span class="badge bg-warning text-dark px-3 py-2">Irregular</span></td>
    <td>
      <button class="btn btn-primary btn-sm rounded-3" data-bs-toggle="modal" data-bs-target="#viewStatusModal">View</button>
      <button class="btn btn-warning btn-sm rounded-3" data-bs-toggle="modal" data-bs-target="#editStatusModal">Edit</button>
    </td>
  </tr>
  <tr>
    <td>3</td>
    <td>220003</td>
    <td>Lopez</td>
    <td>Andrea</td>
    <td>BSBA</td>
    <td>4th Year</td>
    <td><span class="badge bg-primary px-3 py-2">Octoberian</span></td>
    <td>
      <button class="btn btn-primary btn-sm rounded-3" data-bs-toggle="modal" data-bs-target="#viewStatusModal">View</button>

      <button class="btn btn-warning btn-sm rounded-3" data-bs-toggle="modal" data-bs-target="#editStatusModal">Edit</button>
    </td>
  </tr>
  <tr>
    <td>4</td>
    <td>220004</td>
    <td>Garcia</td>
    <td>Carlos</td>
    <td>BSIT</td>
    <td>1st Year</td>
    <td><span class="badge bg-danger px-3 py-2">Dropped</span></td>
    <td>
      <button class="btn btn-primary btn-sm rounded-3" data-bs-toggle="modal" data-bs-target="#viewStatusModal">View</button>

      <button class="btn btn-warning btn-sm rounded-3" data-bs-toggle="modal" data-bs-target="#editStatusModal">Edit</button>
    </td>
  </tr>
  <tr>
    <td>5</td>
    <td>220005</td>
    <td>Mendoza</td>
    <td>Ella</td>
    <td>BSA</td>
    <td>4th Year</td>
    <td><span class="badge bg-light text-dark px-3 py-2">Graduated</span></td>
    <td>
      <button class="btn btn-primary btn-sm rounded-3" data-bs-toggle="modal" data-bs-target="#viewStatusModal">View</button>

      <button class="btn btn-warning btn-sm rounded-3" data-bs-toggle="modal" data-bs-target="#editStatusModal">Edit</button>
    </td>
  </tr>
  <tr>
    <td>6</td>
    <td>220006</td>
    <td>Reyes</td>
    <td>Alex</td>
    <td>BSIT</td>
    <td>2nd Year</td>
    <td><span class="badge bg-dark px-3 py-2">Inactive</span></td>
    <td>
      <button class="btn btn-primary btn-sm rounded-3" data-bs-toggle="modal" data-bs-target="#viewStatusModal">View</button>

      <button class="btn btn-warning btn-sm rounded-3" data-bs-toggle="modal" data-bs-target="#editStatusModal">Edit</button>
    </td>
  </tr>
</tbody>
    </table>

    <!-- 📊 Generate Reports Section -->
<div class="card shadow-sm border-0 mt-4">
  <div class="card-body">
    <div class="d-flex align-items-center justify-content-between flex-wrap mb-3">
      <h5 class="fw-bold text-primary mb-0">
        <i class="bi bi-graph-up-arrow me-2"></i>Generate Student Status Reports
      </h5>
      <div>
        <button class="btn btn-outline-primary me-2" data-bs-toggle="modal" data-bs-target="#generateReportModal">
          <i class="bi bi-gear-fill me-1"></i> Generate Report
        </button>
        <div class="btn-group">
          <button class="btn btn-success">
            <i class="bi bi-file-earmark-pdf me-1"></i> PDF
          </button>
          <button class="btn btn-warning text-dark">
            <i class="bi bi-file-earmark-excel me-1"></i> Excel
          </button>
          <button class="btn btn-info text-dark">
            <i class="bi bi-file-earmark-spreadsheet me-1"></i> CSV
          </button>
        </div>
      </div>
    </div>

    <p class="text-muted small mb-0">
      Generate summarized reports by Course, Year Level, Status Type, and Academic Period for CHED or management use.
    </p>
  </div>
</div>

<!-- ⚙️ Generate Report Modal -->
<div class="modal fade" id="generateReportModal" tabindex="-1" aria-labelledby="generateReportModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content border-0 shadow-lg rounded-4">
      
      <!-- Header -->
      <div class="modal-header">
        <h5 class="modal-title fw-bold" id="generateReportModalLabel">
          <i class="bi bi-gear-fill me-2"></i>Generate Student Status Report
        </h5>
        <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal"></button>
      </div>

      <!-- Body -->
      <div class="modal-body">
        <form id="reportForm">
          <div class="row g-3 mb-3">
            <div class="col-md-6">
              <label class="form-label fw-semibold">Course</label>
              <select class="form-select">
                <option selected>All Courses</option>
                <option>BSIT</option>
                <option>BSED</option>
                <option>BSBA</option>
              </select>
            </div>
            <div class="col-md-6">
              <label class="form-label fw-semibold">Year Level</label>
              <select class="form-select">
                <option selected>All Year Levels</option>
                <option>1st Year</option>
                <option>2nd Year</option>
                <option>3rd Year</option>
                <option>4th Year</option>
              </select>
            </div>
            <div class="col-md-6">
              <label class="form-label fw-semibold">Status Type</label>
              <select class="form-select">
                <option selected>All Status</option>
                <option>Active</option>
                <option>Irregular</option>
                <option>Octoberian</option>
                <option>Dropped</option>
                <option>Graduated</option>
                <option>Inactive</option>
              </select>
            </div>
            <div class="col-md-6">
              <label class="form-label fw-semibold">Academic Year</label>
              <input type="text" class="form-control" placeholder="e.g. 2025–2026">
            </div>
            <div class="col-md-6">
              <label class="form-label fw-semibold">Semester</label>
              <select class="form-select">
                <option selected>All Semesters</option>
                <option>1st Semester</option>
                <option>2nd Semester</option>
              </select>
            </div>
          </div>
        </form>
      </div>

      <!-- Footer -->
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">
          Cancel
        </button>
        <button type="button" class="btn btn-primary">
          <i class="bi bi-graph-up-arrow me-1"></i> Generate Report
        </button>
      </div>
    </div>
  </div>
</div>
<!-- 🔔 Notifications / Alerts Section -->
<div class="card shadow-sm border-0 mt-4">
  <div class="card-body">
    <div class="d-flex align-items-center justify-content-between flex-wrap mb-3">
      <h5 class="fw-bold text-primary mb-0">
        <i class="bi bi-bell-fill me-2"></i>Notifications & Alerts
      </h5>
      <button class="btn btn-outline-danger" data-bs-toggle="modal" data-bs-target="#notificationModal">
        <i class="bi bi-bell me-1"></i> View Notifications
      </button>
    </div>

    <p class="text-muted small mb-0">
      Automatically alert the registrar when a student's status changes (Dropped, Inactive, or Returned).
    </p>
  </div>
</div>

<!-- 🔔 Notifications Modal -->
<div class="modal fade" id="notificationModal" tabindex="-1" aria-labelledby="notificationModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content border-0 shadow-lg rounded-4">
      
      <!-- Header -->
      <div class="modal-header">
        <h5 class="modal-title fw-bold" id="notificationModalLabel">
          <i class="bi bi-bell-fill me-2"></i>Recent Student Status Notifications
        </h5>
        <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal"></button>
      </div>

      <!-- Body -->
      <div class="modal-body">
        <!-- Sample Notification List -->
        <ul class="list-group list-group-flush">
          <li class="list-group-item d-flex justify-content-between align-items-start">
            <div>
              <span class="badge bg-danger me-2">Dropped</span>
              <strong>John Dela Cruz</strong> dropped out of BSIT - 2nd Year
              <div class="text-muted small">10 minutes ago</div>
            </div>
            <i class="bi bi-exclamation-circle text-danger"></i>
          </li>

          <li class="list-group-item d-flex justify-content-between align-items-start">
            <div>
              <span class="badge bg-dark me-2">Inactive</span>
              <strong>Maria Santos</strong> has not enrolled for AY 2025–2026
              <div class="text-muted small">2 hours ago</div>
            </div>
            <i class="bi bi-pause-circle text-secondary"></i>
          </li>

          <li class="list-group-item d-flex justify-content-between align-items-start">
            <div>
              <span class="badge bg-success me-2">Reactivated</span>
              <strong>Mark Villanueva</strong> returned after being inactive
              <div class="text-muted small">Yesterday</div>
            </div>
            <i class="bi bi-arrow-repeat text-success"></i>
          </li>
        </ul>
      </div>

      <!-- Footer -->
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">
          Close
        </button>
        <button type="button" class="btn btn-danger">
          <i class="bi bi-trash3 me-1"></i> Clear All
        </button>
      </div>
    </div>
  </div>
</div>

  </div>
</div>

<!-- 🟡 Edit / Update Status Modal -->
<div class="modal fade" id="editStatusModal" tabindex="-1" aria-labelledby="editStatusModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="editStatusModalLabel">Edit / Update Student Status</h5>
        <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal"></button>
      </div>
      <div class="modal-body">
        <form>
          <div class="row g-3">
            <div class="col-md-6">
              <label class="form-label">Student ID</label>
              <input type="text" class="form-control" value="220001" readonly>
            </div>
            <div class="col-md-6">
              <label class="form-label">Student Name</label>
              <input type="text" class="form-control" value="Maria Santos" readonly>
            </div>
            <div class="col-md-6">
              <label class="form-label">New Status</label>
              <select class="form-select">
                <option> Active</option>
                <option> Irregular</option>
                <option> Octoberian</option>
                <option> Dropped</option>
                <option> Graduated</option>
                <option> Inactive</option>
              </select>
            </div>
            <div class="col-md-3">
              <label class="form-label">Academic Year</label>
              <input type="text" class="form-control" placeholder="2025-2026">
            </div>
            <div class="col-md-3">
              <label class="form-label">Semester</label>
              <select class="form-select">
                <option>1st Semester</option>
                <option>2nd Semester</option>
              </select>
            </div>
            <div class="col-12">
              <label class="form-label">Remarks / Reason</label>
              <textarea class="form-control" rows="3" placeholder="Enter remarks or reason..."></textarea>
            </div>
            <div class="col-12">
              <label class="form-label">Attach Supporting Document (optional)</label>
              <input type="file" class="form-control">
            </div>
          </div>
        </form>
      </div>
      <div class="modal-footer">
        <button class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
        <button class="btn btn-success">Save Changes</button>
      </div>
    </div>
  </div>
</div>

<!-- 🟢 Add New Status Modal -->
<div class="modal fade" id="addStatusModal" tabindex="-1" aria-labelledby="addStatusModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="addStatusModalLabel">Add New Student Status</h5>
        <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal"></button>
      </div>
      <div class="modal-body">
        <form>
          <div class="row g-3">
            <div class="col-md-6">
              <label class="form-label">Student ID</label>
              <input type="text" class="form-control" placeholder="Enter Student ID">
            </div>
            <div class="col-md-6">
              <label class="form-label">Student Name</label>
              <input type="text" class="form-control" placeholder="Enter Student Name">
            </div>
            <div class="col-md-6">
              <label class="form-label">Status</label>
              <select class="form-select">
                <option>Active</option>
                <option>Irregular</option>
                <option>Octoberian</option>
                <option>Dropped</option>
                <option>Graduated</option>
                <option>Inactive</option>
              </select>
            </div>
            <div class="col-md-3">
              <label class="form-label">Academic Year</label>
              <input type="text" class="form-control" placeholder="2025-2026">
            </div>
            <div class="col-md-3">
              <label class="form-label">Semester</label>
              <select class="form-select">
                <option>1st Semester</option>
                <option>2nd Semester</option>
              </select>
            </div>
            <div class="col-12">
              <label class="form-label">Remarks / Reason</label>
              <textarea class="form-control" rows="3" placeholder="Enter remarks or reason..."></textarea>
            </div>
            <div class="col-12">
              <label class="form-label">Attach Supporting Document (optional)</label>
              <input type="file" class="form-control">
            </div>
          </div>
        </form>
      </div>
      <div class="modal-footer">
        <button class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
        <button class="btn btn-success">Save Status</button>
      </div>
    </div>
  </div>
</div>
<!-- 🔍 View Student Status Modal -->
<div class="modal fade" id="viewStatusModal" tabindex="-1" aria-labelledby="viewStatusModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-xl modal-dialog-scrollable">
    <div class="modal-content border-0 shadow-lg rounded-4">
      
      <!-- Header -->
      <div class="modal-header">
        <h5 class="modal-title fw-bold" id="viewStatusModalLabel">
          <i class="bi bi-person-lines-fill me-2"></i>View Student Status Overview
        </h5>
        <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal"></button>
      </div>

      <!-- Body -->
      <div class="modal-body">
        <!-- Student Info -->
        <div class="card shadow-sm mb-4 border-0">
          <div class="card-body">
            <h5 class="fw-bold mb-3">👤 Student Information</h5>
            <div class="row g-3">
              <div class="col-md-4">
                <label class="fw-semibold text-secondary">Student ID:</label>
                <p class="mb-0">220001</p>
              </div>
              <div class="col-md-4">
                <label class="fw-semibold text-secondary">Name:</label>
                <p class="mb-0">Maria Santos</p>
              </div>
              <div class="col-md-4">
                <label class="fw-semibold text-secondary">Course & Year:</label>
                <p class="mb-0">BSIT – 3rd Year</p>
              </div>
              <div class="col-md-4">
                <label class="fw-semibold text-secondary">Current Status:</label>
                <p class="mb-0"><span class="badge bg-success px-3 py-2">🟢 Active</span></p>
              </div>
              <div class="col-md-4">
                <label class="fw-semibold text-secondary">Academic Year:</label>
                <p class="mb-0">2025–2026</p>
              </div>
              <div class="col-md-4">
                <label class="fw-semibold text-secondary">Semester:</label>
                <p class="mb-0">1st Semester</p>
              </div>
            </div>
          </div>
        </div>

        <!-- Status History -->
        <h5 class="fw-bold mb-3">📊 Status History</h5>
        <div class="timeline">
          <div class="timeline-item">
            <div class="timeline-dot bg-success"></div>
            <div class="timeline-content">
              <h6 class="fw-bold">🟢 Active</h6>
              <p class="mb-1"><small>Updated: Oct 10, 2025 • Registrar: Ms. Dela Cruz</small></p>
              <p class="text-muted mb-0">Remarks: Regular student enrolled for 1st Semester AY 2025–2026.</p>
            </div>
          </div>

          <div class="timeline-item">
            <div class="timeline-dot bg-warning"></div>
            <div class="timeline-content">
              <h6 class="fw-bold">🟠 Irregular</h6>
              <p class="mb-1"><small>Updated: May 15, 2025 • Registrar: Ms. Dela Cruz</small></p>
              <p class="text-muted mb-0">Remarks: Failed 2 subjects from previous semester.</p>
            </div>
          </div>

          <div class="timeline-item">
            <div class="timeline-dot bg-primary"></div>
            <div class="timeline-content">
              <h6 class="fw-bold">🔵 Octoberian</h6>
              <p class="mb-1"><small>Updated: Nov 2024 • Registrar: Ms. Cruz</small></p>
              <p class="text-muted mb-0">Remarks: Enrolled late (October enrollment).</p>
            </div>
          </div>
        </div>
      </div>

      <!-- Footer -->
      <div class="modal-footer">
        <button class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
      </div>

    </div>
  </div>
</div>







  <!-- 🌀 Loader -->
  <div id="loader" class="loader-overlay">
    <div class="spinner-border text-light" role="status"></div>
    <p class="text-white mt-3 fw-semibold">Loading, please wait...</p>
  </div>

  <!-- 📜 Scripts -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
  <script src="../other/sidebar.js"></script>
  <script src="../other/loading.js"></script>


</body>
</html>
