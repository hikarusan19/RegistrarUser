<?php
include '../other/connection.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Document Requests</title>

  <!-- ✅ Bootstrap & Icons -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="style.css?v=1.2" />
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.css">
</head>

<body>
  <!-- ✅ Sidebar -->
  <div class="sidebar d-flex flex-column vh-100 position-fixed shadow-lg" id="sidebar">
    <!-- Header -->
    <div class="d-flex align-items-center justify-content-between p-3 border-bottom">
      <div class="d-flex align-items-center">
        <img src="../img/LOGO.png" alt="Logo" class="rounded-circle me-2 border border-light" style="width:50px;height:50px;">
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
      <a href="../Document_Request/document.php" class="nav-link px-3 py-2 active">
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
      <div class="d-flex align-items-center justify-content-between dropdown-toggle text-decoration-none text-light"
           id="userMenu" data-bs-toggle="dropdown" aria-expanded="false" style="cursor:pointer;">
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

      <ul class="dropdown-menu dropdown-menu-end shadow border-0 mt-2" aria-labelledby="userMenu"
          style="background:#1f355f;">
        <li>
          <a class="dropdown-item text-light py-2" href="profile.php">
            <i class="bi bi-person-gear me-2"></i> Profile Settings
          </a>
        </li>
        <li><hr class="dropdown-divider border-light opacity-25"></li>
        <li>
          <a class="dropdown-item text-danger py-2" href="logout.php">
            <i class="bi bi-box-arrow-right me-2"></i> Log Out
          </a>
        </li>
      </ul>
    </div>
  </div>

  <!-- ✅ Main Content -->
  <div class="main-content" style="margin-left:260px;">
    
    <!-- ✅ Sticky Navbar -->
    <nav class="navbar navbar-light bg-white border-bottom px-4 py-2 d-flex align-items-center justify-content-between shadow-sm"
         style="position:sticky; top:0; z-index:1020;">
      <button id="toggleSidebarBtn" class="btn btn-light p-2 border-0">
        <i class="bi bi-list" style="font-size: 1.7rem;"></i>
      </button>
      <h5 class="fw-bold mb-0 text-dark">Registrar Panel</h5>
    </nav>

    <!-- ✅ Page Header -->
    <div class="page-header text-center my-4">
      <h1>Document Requests</h1>
      <div class="page-subtitle">"Check your eligibility and request official documents"</div>
    </div>

<!-- ✅ Summary Cards (with shadow effect) -->
<div class="container-fluid mt-4">
  <div class="row g-4">
  <div class="col-md-4">
    <div class="card card-box p-3 mb-3">
      <div class="d-flex justify-content-between align-items-start">
        <div>
          <h6 class="text-secondary mb-1">Pending Requests</h6>
          <h2 class="fw-bold mb-0 text-dark">45</h2>
          <small class="text-muted">Awaiting review</small>
        </div>
        <i class="bi bi-hourglass-split fs-2 text-warning"></i>
      </div>
    </div>
  </div>

  <div class="col-md-4">
    <div class="card card-box p-3 mb-3">
      <div class="d-flex justify-content-between align-items-start">
        <div>
          <h6 class="text-secondary mb-1">Processing</h6>
          <h2 class="fw-bold mb-0 text-dark">30</h2>
          <small class="text-muted">Currently in progress</small>
        </div>
        <i class="bi bi-gear-wide-connected fs-2 text-info"></i>
      </div>
    </div>
  </div>


  <div class="col-md-4">
    <div class="card card-box p-3 mb-3">
      <div class="d-flex justify-content-between align-items-start">
        <div>
          <h6 class="text-secondary mb-1">Approved Requests</h6>
          <h2 class="fw-bold mb-0 text-dark">50</h2>
          <small class="text-muted">Completed and released</small>
        </div>
        <i class="bi bi-check-circle fs-1 text-success"></i>
      </div>
    </div>
  </div>

</div>
</div>
      <div class="card shadow-sm border-0 rounded-4">
        <div class="card-body p-4">
          <div class="d-flex justify-content-between align-items-center mb-3">
            <h4 class="fw-semibold text-dark">Student Document Requests</h4>
<div class="d-flex justify-content-between align-items-center mb-3">
  <button class="btn btn-new-request" data-bs-toggle="modal" data-bs-target="#newRequestModal">
    <i class="bi bi-plus-circle"></i> New Request
  </button>
  <input type="text" class="form-control search-box" placeholder="Search Request..." style="width: 250px;">
</div>

</div>

<!-- ✅ Document Requests Table -->
<div class="table-responsive">
<table class="table table-bordered table-striped align-middle">
          <thead class="table-light">

      <tr>
        <th>No.</th>
        <th>Request No.</th>
        <th>Student ID</th>
        <th>Last Name</th>
        <th>First Name</th>
        <th>Document Type</th>
        <th>Status</th>
        <th>Action</th>
      </tr>
    </thead>
    <tbody class="text-center">
      <tr>
        <td>1</td>
        <td>REQ-2025-001</td>
        <td>220001</td>
        <td>Santos</td>
        <td>Maria</td>
        <td>Form 137</td>
        <td><span class="badge bg-warning text-dark">Pending</span></td>
        <td>
          <button class="btn btn-sm btn-primary btn-view" 
            data-bs-toggle="modal"
            data-bs-target="#pendingModal"
            data-request="REQ-2025-001"
            data-id="220001"
            data-last="Santos"
            data-first="Maria"
            data-document="Form 137">
            View
          </button>
        </td>
      </tr>
      <tr>
        <td>2</td>
        <td>REQ-2025-002</td>
        <td>220002</td>
        <td>Cruz</td>
        <td>Juan</td>
        <td>Good Moral</td>
        <td><span class="badge bg-secondary text-light">Waiting for Payment</span></td>
        <td>
          <button class="btn btn-sm btn-primary btn-view" 
            data-bs-toggle="modal"
            data-bs-target="#waitingPaymentModal"
            data-request="REQ-2025-002"
            data-id="220002"
            data-last="Cruz"
            data-first="Juan"
            data-document="Good Moral">
            View
          </button>
        </td>
      </tr>
      <tr>
        <td>3</td>
        <td>REQ-2025-003</td>
        <td>220003</td>
        <td>Lopez</td>
        <td>Andrea</td>
        <td>Transcript of Records</td>
        <td><span class="badge bg-info text-dark">Process</span></td>
        <td>
          <button class="btn btn-sm btn-primary btn-view" 
            data-bs-toggle="modal"
            data-bs-target="#processModal"
            data-request="REQ-2025-003"
            data-id="220003"
            data-last="Lopez"
            data-first="Andrea"
            data-document="Transcript of Records">
            View
          </button>
        </td>
      </tr>
      <tr>
        <td>4</td>
        <td>REQ-2025-004</td>
        <td>220004</td>
        <td>Garcia</td>
        <td>Carlos</td>
        <td>Certificate of Enrollment</td>
        <td><span class="badge bg-primary">Ready to Claim</span></td>
        <td>
          <button class="btn btn-sm btn-primary btn-view" 
            data-bs-toggle="modal"
            data-bs-target="#readyModal"
            data-request="REQ-2025-004"
            data-id="220004"
            data-last="Garcia"
            data-first="Carlos"
            data-document="Certificate of Enrollment">
            View
          </button>
        </td>
      </tr>
      <tr>
        <td>5</td>
        <td>REQ-2025-005</td>
        <td>220005</td>
        <td>Reyes</td>
        <td>Angela</td>
        <td>Diploma</td>
        <td><span class="badge bg-success">Complete</span></td>
        <td>
          <button class="btn btn-sm btn-primary btn-view" 
            data-bs-toggle="modal"
            data-bs-target="#completeModal"
            data-request="REQ-2025-005"
            data-id="220005"
            data-last="Reyes"
            data-first="Angela"
            data-document="Diploma">
            View
          </button>
        </td>
      </tr>
    </tbody>
  </table>
</div>

<!-- ✅ Modal -->

<!-- 1. Pending Modal -->
<div class="modal fade" id="pendingModal" tabindex="-1">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header bg-warning">
        <h5 class="modal-title">Pending Request</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
      </div>
      <div class="modal-body">
        <p><strong>Request No.:</strong> <span id="pendingRequest"></span></p>
        <p><strong>Student Name:</strong> <span id="pendingName"></span></p>
        <p><strong>Student ID:</strong> <span id="pendingID"></span></p>
        <p><strong>Document Request:</strong> <span id="pendingDoc"></span></p>
        <div class="mb-3">
          <label class="form-label">Verification</label>
          <textarea class="form-control" readonly>Eligible to request if currently enrolled</textarea>
        </div>
        <div class="mb-3">
          <label class="form-label">Remarks / Feedback</label>
          <textarea class="form-control"></textarea>
        </div>
      </div>
      <div class="modal-footer">
        <button class="btn btn-success">Approve</button>
        <button class="btn btn-danger" data-bs-dismiss="modal">Reject</button>
      </div>
    </div>
  </div>
</div>

<!-- 2. Waiting for Payment Modal -->
<div class="modal fade" id="waitingPaymentModal" tabindex="-1">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header bg-secondary text-white">
        <h5 class="modal-title">Waiting for Payment</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
      </div>
      <div class="modal-body">
        <p><strong>Request No.:</strong> <span id="waitingRequest"></span></p>
        <p><strong>Student Name:</strong> <span id="waitingName"></span></p>
        <p><strong>Student ID:</strong> <span id="waitingID"></span></p>
        <p><strong>Document Request:</strong> <span id="waitingDoc"></span></p>
        <p><strong>Total Amount:</strong> ₱150</p>
        <p><strong>Payment Method:</strong> GCash</p>
        <div class="mb-3">
          <label class="form-label">Reference Number</label>
          <input type="text" class="form-control" placeholder="Enter reference number">
        </div>
        <div class="mb-3">
          <label class="form-label">Feedback (Optional)</label>
          <textarea class="form-control"></textarea>
        </div>
      </div>
      <div class="modal-footer">
        <button class="btn btn-success">Approve</button>
        <button class="btn btn-danger" data-bs-dismiss="modal">Decline</button>
      </div>
    </div>
  </div>
</div>

<!-- 3. Process Modal -->
<div class="modal fade" id="processModal" tabindex="-1">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header bg-info">
        <h5 class="modal-title">Processing Request</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
      </div>
      <div class="modal-body">
        <p><strong>Request No.:</strong> <span id="processRequest"></span></p>
        <p><strong>Student Name:</strong> <span id="processName"></span></p>
        <p><strong>Student ID:</strong> <span id="processID"></span></p>
        <p><strong>Document Request:</strong> <span id="processDoc"></span></p>
        <p><strong>Workdays:</strong> 3 Days</p>
        <p><strong>Estimated Completion:</strong> Oct 20, 2025</p>
        <div class="mb-3">
          <label class="form-label">Feedback (Optional)</label>
          <textarea class="form-control"></textarea>
        </div>
      </div>
      <div class="modal-footer">
        <button class="btn btn-warning">Follow-up</button>
        <button class="btn btn-secondary" data-bs-dismiss="modal">Back</button>
      </div>
    </div>
  </div>
</div>

<!-- 4. Ready to Claim Modal -->
<div class="modal fade" id="readyModal" tabindex="-1">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header bg-primary text-white">
        <h5 class="modal-title">Ready to Claim</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
      </div>
      <div class="modal-body">
        <p><strong>Request No.:</strong> <span id="readyRequest"></span></p>
        <p><strong>Student Name:</strong> <span id="readyName"></span></p>
        <p><strong>Student ID:</strong> <span id="readyID"></span></p>
        <p><strong>Document Request:</strong> <span id="readyDoc"></span></p>
        <p><strong>Reference Number:</strong> 987654321</p>
        <p><strong>Price:</strong> ₱100</p>
        <p><strong>Total Amount:</strong> ₱100</p>
        <div class="mb-3">
          <label class="form-label">Feedback</label>
          <textarea class="form-control"></textarea>
        </div>
      </div>
      <div class="modal-footer">
        <button class="btn btn-success">Claimed</button>
        <button class="btn btn-secondary" data-bs-dismiss="modal">Back</button>
      </div>
    </div>
  </div>
</div>

<!-- 5. Complete Modal -->
<div class="modal fade" id="completeModal" tabindex="-1">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header bg-success text-white">
        <h5 class="modal-title">Completed Request</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
      </div>
      <div class="modal-body">
        <p><strong>Request No.:</strong> <span id="completeRequest"></span></p>
        <p><strong>Student Name:</strong> <span id="completeName"></span></p>
        <p><strong>Student ID:</strong> <span id="completeID"></span></p>
        <p><strong>Document Request:</strong> <span id="completeDoc"></span></p>
        <p><strong>Date Request Started:</strong> Oct 10, 2025</p>
        <p><strong>Date Request Completed:</strong> Oct 15, 2025</p>
        <p><strong>Reference Number:</strong> 123456789</p>
        <p><strong>Total Amount:</strong> ₱200</p>
      </div>
      <div class="modal-footer">
        <button class="btn btn-warning">Appeal</button>
        <button class="btn btn-secondary" data-bs-dismiss="modal">Back</button>
      </div>
    </div>
  </div>
</div>

</div>
</div>
<!-- ✅ New Document Request Modal -->
<div class="modal fade" id="newRequestModal" tabindex="-1" aria-labelledby="newRequestModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content border-0 shadow-lg">

      <!-- Modal Header -->
      <div class="modal-header" style="background-color: #1e3261; color: #fff;">
        <h5 class="modal-title fw-semibold" id="newRequestModalLabel">New Document Request</h5>
        <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>

      <!-- Modal Body -->
      <form>
        <div class="modal-body bg-light">

          <!-- Student Info -->
          <div class="row mb-3">
            <div class="col-md-6">
              <label for="studentID" class="form-label fw-semibold text-dark">Student ID</label>
              <input type="text" class="form-control" id="studentID" placeholder="Enter student ID">
            </div>
            <div class="col-md-6">
              <label for="purpose" class="form-label fw-semibold text-dark">Purpose</label>
              <input type="text" class="form-control" id="purpose" placeholder="Enter purpose of request">
            </div>
          </div>

          <!-- Document Selector -->
          <div class="mb-3">
            <label class="form-label fw-semibold text-dark">Select documents</label>

            <!-- Dropdown trigger -->
            <div class="dropdown">
              <button 
                class="btn w-100 text-start text-white dropdown-toggle" 
                type="button" 
                id="docDropdown" 
                data-bs-toggle="dropdown" 
                aria-expanded="false"
                style="background-color: #1e3261;"
              >
                Choose documents
              </button>

              <!-- Dropdown menu with checkboxes -->
              <ul class="dropdown-menu p-3 w-100 shadow" aria-labelledby="docDropdown" style="max-height: 260px; overflow-y: auto;">
                <div class="row">
                  <div class="col-md-6">
                    <li><label class="form-check text-dark"><input class="form-check-input doc-check" type="checkbox" value="General weighted average certificate (GWA)"> General weighted average certificate (GWA)</label></li>
                    <li><label class="form-check text-dark"><input class="form-check-input doc-check" type="checkbox" value="General weighted average computation (GWA)"> General weighted average computation (GWA)</label></li>
                    <li><label class="form-check text-dark"><input class="form-check-input doc-check" type="checkbox" value="Transcript of record (TOR)"> Transcript of record (TOR)</label></li>
                    <li><label class="form-check text-dark"><input class="form-check-input doc-check" type="checkbox" value="Diploma"> Diploma</label></li>
                    <li><label class="form-check text-dark"><input class="form-check-input doc-check" type="checkbox" value="Honorable dismissal (HD)"> Honorable dismissal (HD)</label></li>
                    <li><label class="form-check text-dark"><input class="form-check-input doc-check" type="checkbox" value="Certified true copy (CTC)"> Certified true copy (CTC)</label></li>
                    <li><label class="form-check text-dark"><input class="form-check-input doc-check" type="checkbox" value="Certificate of registration (COR)"> Certificate of registration (COR)</label></li>
                    <li><label class="form-check text-dark"><input class="form-check-input doc-check" type="checkbox" value="Copy of grades (COG)"> Copy of grades (COG)</label></li>
                    <li><label class="form-check text-dark"><input class="form-check-input doc-check" type="checkbox" value="Statement of account"> Statement of account</label></li>
                  </div>

                  <div class="col-md-6">
                    <li><label class="form-check text-dark"><input class="form-check-input doc-check" type="checkbox" value="Evaluation of grades"> Evaluation of grades</label></li>
                    <li><label class="form-check text-dark"><input class="form-check-input doc-check" type="checkbox" value="Certificate, authentication and verification (CAV)"> Certificate, authentication and verification (CAV)</label></li>
                    <li><label class="form-check text-dark"><input class="form-check-input doc-check" type="checkbox" value="NSTP certificate"> NSTP certificate</label></li>
                    <li><label class="form-check text-dark"><input class="form-check-input doc-check" type="checkbox" value="Certificate of graduation (COGRAD)"> Certificate of graduation (COGRAD)</label></li>
                    <li><label class="form-check text-dark"><input class="form-check-input doc-check" type="checkbox" value="Certificate of bonafide student (CBS)"> Certificate of bonafide student (CBS)</label></li>
                    <li><label class="form-check text-dark"><input class="form-check-input doc-check" type="checkbox" value="Medium of instruction"> Medium of instruction</label></li>
                    <li><label class="form-check text-dark"><input class="form-check-input doc-check" type="checkbox" value="Course description"> Course description</label></li>
                    <li><label class="form-check text-dark"><input class="form-check-input doc-check" type="checkbox" value="Certificate of earned units"> Certificate of earned units</label></li>
                    <li><label class="form-check text-dark"><input class="form-check-input doc-check" type="checkbox" value="Upper 25th rating"> Upper 25th rating</label></li>
                  </div>
                </div>
              </ul>
            </div>

            <!-- Selected Documents Preview -->
            <div class="mt-3">
              <label class="form-label fw-semibold text-dark">Selected documents:</label>
              <div id="selectedDocs" class="border rounded p-2 bg-white text-secondary" style="min-height: 50px;">
                None selected
              </div>
            </div>
          </div>

          <!-- Notes -->
          <div class="mb-3">
            <label for="notes" class="form-label fw-semibold text-dark">Additional notes</label>
            <textarea class="form-control" id="notes" placeholder="Optional notes or remarks" rows="3"></textarea>
          </div>
        </div>

        <!-- Footer -->
        <div class="modal-footer bg-white border-top">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
          <button type="submit" class="btn" style="background-color:#1e3261; color:white;">Submit Request</button>
        </div>
      </form>
    </div>
  </div>
</div>

<!-- ✅ JS: Update Selected Documents -->
<script>
  document.querySelectorAll('.doc-check').forEach(chk => {
    chk.addEventListener('change', () => {
      const selected = Array.from(document.querySelectorAll('.doc-check:checked'))
        .map(c => c.value);
      const display = document.getElementById('selectedDocs');
      display.innerHTML = selected.length ? selected.join('<br>') : 'None selected';
    });
  });
</script>
<!-- ✅ JS -->
<script>
document.addEventListener("DOMContentLoaded", () => {
  const viewButtons = document.querySelectorAll(".view-btn, .btn-view");
  viewButtons.forEach(btn => {
    btn.addEventListener("click", () => {
      document.getElementById("reqNo").textContent = btn.getAttribute("data-request");
      document.getElementById("studentName").textContent = btn.getAttribute("data-student");
      document.getElementById("yearLevel").textContent = btn.getAttribute("data-year");
      document.getElementById("course").textContent = btn.getAttribute("data-course");
      document.getElementById("docType").textContent = btn.getAttribute("data-document");
      document.getElementById("validationMessage").textContent = btn.getAttribute("data-validation");
    });
  });
});
</script>
<script>
  document.querySelectorAll('.btn-view').forEach(btn => {
    btn.addEventListener('click', () => {
      const request = btn.dataset.request;
      const last = btn.dataset.last;
      const first = btn.dataset.first;
      const id = btn.dataset.id;
      const doc = btn.dataset.document;

      // Pending
      document.getElementById('pendingRequest').innerText = request;
      document.getElementById('pendingName').innerText = `${last}, ${first}`;
      document.getElementById('pendingID').innerText = id;
      document.getElementById('pendingDoc').innerText = doc;

      // Waiting
      document.getElementById('waitingRequest').innerText = request;
      document.getElementById('waitingName').innerText = `${last}, ${first}`;
      document.getElementById('waitingID').innerText = id;
      document.getElementById('waitingDoc').innerText = doc;

      // Process
      document.getElementById('processRequest').innerText = request;
      document.getElementById('processName').innerText = `${last}, ${first}`;
      document.getElementById('processID').innerText = id;
      document.getElementById('processDoc').innerText = doc;

      // Ready
      document.getElementById('readyRequest').innerText = request;
      document.getElementById('readyName').innerText = `${last}, ${first}`;
      document.getElementById('readyID').innerText = id;
      document.getElementById('readyDoc').innerText = doc;

      // Complete
      document.getElementById('completeRequest').innerText = request;
      document.getElementById('completeName').innerText = `${last}, ${first}`;
      document.getElementById('completeID').innerText = id;
      document.getElementById('completeDoc').innerText = doc;
    });
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
</body>
</html>
