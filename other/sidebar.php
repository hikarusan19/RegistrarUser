<!-- Sidebar -->
<div class="sidebar d-flex flex-column vh-100 position-fixed shadow-lg" id="sidebar">
  <!-- Header -->
  <div class="d-flex align-items-center justify-content-between p-3 border-bottom">
    <div class="d-flex align-items-center">
      <img src="img\LOGO.png" alt="Logo" class="rounded-circle me-2 border border-light" style="width:50px;height:50px;">
      <div>
        <div class="fw-bold fs-6">Registrar</div>
        <div class="small text-light opacity-75">Student Information System</div>
      </div>
    </div>
  </div>

  <!-- Navigation -->
  <div class="mt-4 flex-grow-1">
    <a href="index.php" class="nav-link px-3 py-2 active ">
      <i class="bi bi-speedometer2 me-3"></i> Dashboard
    </a>
    <a href="personalinfo.php" class="nav-link px-3 py-2">
      <i class="bi bi-person-vcard me-3"></i> Student Information
    </a>
    <a href="academic.php" class="nav-link px-3 py-2">
      <i class="bi bi-mortarboard me-3"></i> Academic Records
    </a>
    <a href="document.php" class="nav-link px-3 py-2">
      <i class="bi bi-file-earmark-text me-3"></i> Document Requests
    </a>
    <a href="student_status.php" class="nav-link px-3 py-2">
      <i class="bi bi-clipboard-data me-3"></i> Student Status Tracker
    </a>
    <a href="digital_file.php" class="nav-link px-3 py-2">
      <i class="bi bi-cloud-arrow-up me-3"></i> Digital File Storage
    </a>
    <a href="student_masterlist.php" class="nav-link px-3 py-2">
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
