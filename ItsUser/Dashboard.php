<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Student Information</title>

  <!-- ✅ Bootstrap & Icons -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.css">
  <link rel="stylesheet" href="style.css?v=1.6 " />

</head>

<body>
  <!-- ✅ Sidebar -->
  <div class="sidebar d-flex flex-column vh-100 position-fixed shadow-lg" id="sidebar">
    <div class="d-flex align-items-center justify-content-between p-3 border-bottom">
      <div class="d-flex align-items-center">
        <img src="../img/LOGO.png" alt="Logo" class="rounded-circle me-2 border border-light" style="width:50px;height:50px;">
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


    <!-- MAIN BODY CONTENT HERE -->

<div class="container mb-5">
  <div class="row g-4">
    <!-- LEFT FORM -->
    <div class="col-lg-6">
      <div class="card shadow-sm">
        <div class="card-header">
          Student ID Generator
        </div>

        <!-- ⬇️ FORM GOES HERE -->
        <div class="card-body">

          <!-- Student Number -->
          <div class="mb-3">
            <label class="form-label fw-semibold">Student Number (8 digits)</label>
            <input type="text" id="studentNumber" maxlength="8" class="form-control">
          </div>

          <!-- FRONT -->
          <div id="frontForm">
            <h6 class="fw-bold text-primary">Front ID Information</h6>

            <input id="studentName" class="form-control mb-2" readonly placeholder="Student Name">
            <input id="studentCourse" class="form-control mb-2" readonly placeholder="Course">
            <input id="studentAY" class="form-control mb-3" readonly placeholder="Academic Year">

            <div class="text-end">
              <button class="Button" onclick="showBackForm()">Next →</button>
            </div>
          </div>

          <!-- BACK -->
          <div id="backForm" style="display:none;">
            <h6 class="fw-bold text-primary">Back ID Information</h6>

            <input id="emergencyPerson" class="form-control mb-2" readonly placeholder="Emergency Person">
            <textarea id="studentAddress" class="form-control mb-2" readonly placeholder="Address"></textarea>
            <input id="emergencyContact" class="form-control mb-3" readonly placeholder="Contact No.">

            <button class="Button" onclick="showFrontForm()">← Back</button>
          </div>

        </div>
      </div>
    </div>

<!-- RIGHT: ID PREVIEW -->
<div class="col-lg-6">
  <div class="card shadow-sm">
    <div class="card-header fw-bold bg-dark text-white">
      ID Preview
    </div>

    <div class="card-body text-center">

      <!-- FRONT ID PREVIEW -->
      <div id="previewFront" class="id-card front-id mx-auto">
        <div class="id-header">BESTLINK COLLEGE</div>
        <div class="id-photo">PHOTO</div>
        <div class="id-info">
          <strong id="prevName">—</strong>
          <div id="prevNumber">Student No.</div>
          <div id="prevCourse">Course</div>
          <div id="prevAY">AY</div>
        </div>
      </div>

      <!-- BACK ID PREVIEW -->
      <div id="previewBack" class="id-card back-id mx-auto" style="display:none;">
        <p><strong>Emergency:</strong> <span id="prevEmergency">—</span></p>
        <p><strong>Address:</strong> <span id="prevAddress">—</span></p>
        <p><strong>Contact:</strong> <span id="prevContact">—</span></p>
        <div class="signature-box">Signature</div>
      </div>

    </div>
  </div>
</div>


  </div>
</div>


<script>
/* MOCK STUDENT DATA (simulate database) */
const students = {
  "22019812": {
    name: "Emmar John Cañas",
    course: "BSIT",
    ay: "2025 - 2026",
    emergency: "Yannicah Joy A. Gaspar",
    address: "Caloocan City",
    contact: "09304032926"
  }
};

document.getElementById("studentNumber").addEventListener("keyup", function () {
  const data = students[this.value];

  if (data) {
    studentName.value = data.name;
    studentCourse.value = data.course;
    studentAY.value = data.ay;
    emergencyPerson.value = data.emergency;
    studentAddress.value = data.address;
    emergencyContact.value = data.contact;

    prevName.innerText = data.name;
    prevNumber.innerText = this.value;
    prevCourse.innerText = data.course;
    prevAY.innerText = data.ay;
    prevEmergency.innerText = data.emergency;
    prevAddress.innerText = data.address;
    prevContact.innerText = data.contact;
  }
});
</script>


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
<script>
function showBackForm() {
  document.getElementById("frontForm").style.display = "none";
  document.getElementById("backForm").style.display = "block";

  // Switch preview
  document.getElementById("previewFront").style.display = "none";
  document.getElementById("previewBack").style.display = "block";
}

function showFrontForm() {
  document.getElementById("backForm").style.display = "none";
  document.getElementById("frontForm").style.display = "block";

  // Switch preview
  document.getElementById("previewBack").style.display = "none";
  document.getElementById("previewFront").style.display = "block";
}
</script>

</body>
</html>
