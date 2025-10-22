<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Student Information</title>

  <!-- ✅ Bootstrap & Icons -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.css">
  <link rel="stylesheet" href="style.css" />

</head>

<body>
  <!-- ✅ Sidebar -->
  <div class="sidebar d-flex flex-column vh-100 position-fixed shadow-lg" id="sidebar">
    <div class="d-flex align-items-center justify-content-between p-3 border-bottom">
      <div class="d-flex align-items-center">
        <img src="img/LOGO.png" alt="Logo" class="rounded-circle me-2 border border-light" style="width:50px;height:50px;">
        <div>
          <div class="fw-bold fs-6">Registrar</div>
          <div class="small text-light opacity-75">Student Information System</div>
        </div>
      </div>
    </div>
    <div class="mt-4 flex-grow-1">
      <a href="../Dashboard/index.php" class="nav-link px-3 py-2">
        <i class="bi bi-speedometer2 me-3"></i> Dashboard
      </a>
      <a href="../Personal_Info/personalinfo.php" class="nav-link px-3 py-2   active">
        <i class="bi bi-person-vcard me-3"></i> Student Information
      </a>
      <a href="../Academic_history/academic.php" class="nav-link px-3 py-2">
        <i class="bi bi-mortarboard me-3"></i> Academic Records
      </a>
      <a href="../Document_Request/document.php" class="nav-link px-3 py-2 ">
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


    <div class="user-box mt-auto p-3 border-top">
      <div class="d-flex align-items-center">
        <div class="rounded-circle border border-light me-3" style="width:40px;height:40px;background:#ffffff22;"></div>
        <div>
          <div class="fw-semibold mb-0 text-light">Emmar John</div>
          <span class="small text-light">Staff</span>
        </div>
      </div>
    </div>
  </div>

  <!-- ✅ Main Content -->
  <div class="main-content" style="margin-left:260px;">
    <nav class="navbar navbar-light bg-white border-bottom px-4 py-2 d-flex align-items-center justify-content-between shadow-sm"
         style="position:sticky; top:0; z-index:1020;">
      <button id="toggleSidebarBtn" class="btn btn-light p-2 border-0">
        <i class="bi bi-list" style="font-size: 1.7rem;"></i>
      </button>
      <h5 class="fw-bold mb-0 text-dark">Registrar Panel</h5>
    </nav>

    <div class="page-header text-center my-4">
      <h1>Student Information</h1>
      <div class="page-subtitle">"Student List and Details Overview"</div>
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
        <div class="col-md-1 text-end">
          <button class="btn btn-primary w-100">
            <i class="bi bi-search"></i>
          </button>
        </div>
      </div>
    </div>
  </div>
    <div class="container-fluid p-4">
      <div class="table-responsive">
        <table class="table table-bordered table-striped align-middle text-center" id="studentTable">
          <thead class="table-light">
            <tr>
              <th>No.</th>
              <th>Student ID</th>
              <th class="sortable" onclick="sortTable(2)">Last Name <i id="sortIcon" class="bi bi-arrow-down-up"></i></th>
              <th>First Name</th>
              <th>Middle Name</th>
              <th>Course</th>
              <th>Year</th>
              <th>Section</th>
              <th>Action</th>
            </tr>
          </thead>
          <tbody>
            <tr><td>1</td><td>21000001</td><td>Garcia</td><td>Juan</td><td>Dela Cruz</td><td>BS Information Technology</td><td>1st Year</td><td>11002</td><td><button class="btn btn-sm btn-primary">View</button></td></tr>
            <tr><td>2</td><td>21000002</td><td>Santos</td><td>Maria</td><td>Lopez</td><td>BS Criminology</td><td>1st Year</td><td>11002</td><td><button class="btn btn-sm btn-primary">View</button></td></tr>
            <tr><td>3</td><td>21000003</td><td>Reyes</td><td>Carlos</td><td>Torres</td><td>BS Business Administration</td><td>1st Year</td><td>11002</td><td><button class="btn btn-sm btn-primary">View</button></td></tr>
            <tr><td>4</td><td>21000004</td><td>Fernandez</td><td>Ana</td><td>Gomez</td><td>BS Information Technology</td><td>1st Year</td><td>11002</td><td><button class="btn btn-sm btn-primary">View</button></td></tr>
            <tr><td>5</td><td>21000005</td><td>Delos Santos</td><td>Mark</td><td>Villanueva</td><td>BS Office Administration</td><td>1st Year</td><td>11002</td><td><button class="btn btn-sm btn-primary">View</button></td></tr>
            <tr><td>6</td><td>21000006</td><td>Lopez</td><td>Grace</td><td>Ramos</td><td>BS Criminology</td><td>1st Year</td><td>11002</td><td><button class="btn btn-sm btn-primary">View</button></td></tr>
            <tr><td>7</td><td>21000007</td><td>Mendoza</td><td>Erwin</td><td>Castro</td><td>BS Information Technology</td><td>1st Year</td><td>11002</td><td><button class="btn btn-sm btn-primary">View</button></td></tr>
            <tr><td>8</td><td>21000008</td><td>Villanueva</td><td>Lara</td><td>Reyes</td><td>BS Business Administration</td><td>1st Year</td><td>11002</td><td><button class="btn btn-sm btn-primary">View</button></td></tr>
            <tr><td>9</td><td>21000009</td><td>Torres</td><td>David</td><td>Marquez</td><td>BS Office Administration</td><td>1st Year</td><td>11002</td><td><button class="btn btn-sm btn-primary">View</button></td></tr>
            <tr><td>10</td><td>21000010</td><td>Cruz</td><td>Ella</td><td>Fernandez</td><td>BS Information Technology</td><td>1st Year</td><td>11002</td><td><button class="btn btn-sm btn-primary">View</button></td></tr>
          </tbody>
        </table>
      </div>
    </div>
  </div>
  <div id="loader" class="loader-overlay">
    <div class="spinner-border text-light" role="status"></div>
    <p class="text-white mt-3 fw-semibold">Loading, please wait...</p>
  </div>
  <!-- 📜 Scripts -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
  <script src="../other/sidebar.js"></script>
  <script src="../other/loading.js"></script>
  <script>
    let ascending = true;

    function sortTable(colIndex) {
      const table = document.getElementById("studentTable");
      const tbody = table.tBodies[0];
      const rows = Array.from(tbody.rows);
      const icon = document.getElementById("sortIcon");

      rows.sort((a, b) => {
        const nameA = a.cells[colIndex].innerText.toLowerCase();
        const nameB = b.cells[colIndex].innerText.toLowerCase();
        return ascending ? nameA.localeCompare(nameB) : nameB.localeCompare(nameA);
      });

      // Toggle order and icon
      ascending = !ascending;
      icon.className = ascending ? "bi bi-arrow-down" : "bi bi-arrow-up";

      // Rebuild table
      rows.forEach(row => tbody.appendChild(row));
    }

    // Sidebar toggle
    document.getElementById("toggleSidebarBtn").addEventListener("click", () => {
      const sidebar = document.getElementById("sidebar");
      const mainContent = document.querySelector(".main-content");
      if (sidebar.style.display === "none") {
        sidebar.style.display = "flex";
        mainContent.style.marginLeft = "260px";
      } else {
        sidebar.style.display = "none";
        mainContent.style.marginLeft = "0";
      }
    });
  </script>

</body>
</html>
