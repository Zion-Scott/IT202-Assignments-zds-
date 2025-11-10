<?php
session_start();

require __DIR__ . '/../connect.php';

function alert($msg) {
    echo "<script>alert(" . json_encode($msg) . ");</script>";
}

$submittedId = '';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $submittedId = trim($_POST['student_id'] ?? '');

    if ($submittedId === '' || !ctype_digit($submittedId)) {
        alert("Please enter a valid numeric Student ID.");
    } else {
        // check if ID exists
        $stmt = mysqli_prepare($connect, "SELECT 1 FROM Student WHERE ID = ?");
        mysqli_stmt_bind_param($stmt, "i", $submittedId);
        mysqli_stmt_execute($stmt);
        mysqli_stmt_store_result($stmt);

        if (mysqli_stmt_num_rows($stmt) === 0) {
            alert("Student ID not found.");
        } else {
            $_SESSION['student_id'] = (int)$submittedId;
            header("Location: StudentInfo.php");
            exit;
        }
        mysqli_stmt_close($stmt);
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" />
  <title>Student ID Finder</title>
</head>
  <body>
    <h1>Find Student</h1>

    <form method="post" action="">
      <label for="student_id">Student ID:</label>
      <input type="text" id="student_id" name="student_id" required
            value="<?php echo htmlspecialchars($submittedId); ?>">
      <button type="submit">Search</button>
    </form>
  </body>
</html>


