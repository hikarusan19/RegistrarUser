<?php
include 'connection.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  $student_id = $_POST['student_id'];
  $status = $_POST['status'];

  if (!empty($student_id)) {
    $stmt = $conn->prepare("UPDATE students SET status = ? WHERE Student_ID = ?");
    $stmt->bind_param("ss", $status, $student_id);

    if ($stmt->execute()) {
      // Redirect back to the table page
      header("Location: " . $_SERVER['HTTP_REFERER']);
      exit;
    } else {
      echo "Error updating status: " . $stmt->error;
    }
  }
}
?>
