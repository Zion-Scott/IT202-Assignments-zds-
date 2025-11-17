<?php
session_start();
if (!isset($_SESSION['student_id'])) {
    header("Location: StudentIDFinder.php");
    exit;
}

require __DIR__ . '/../connect.php';

$studentId = (int)$_SESSION['student_id'];

// Long, explicit SQL (no aliases), filtered by one Student ID
$sql = "
SELECT 
  Student.ID AS ID,
  Student.FirstName,
  Student.Major,
  Transcript.Course,
  Transcript.Grade
FROM Student
INNER JOIN Transcript
  ON Student.ID = Transcript.ID
WHERE Student.ID = ?;
";

$stmt = mysqli_prepare($connect, $sql);
mysqli_stmt_bind_param($stmt, "i", $studentId);
mysqli_stmt_execute($stmt);
$result = mysqli_stmt_get_result($stmt);

$rows = [];
while ($row = mysqli_fetch_assoc($result)) {
    $rows[] = $row;
}
mysqli_stmt_close($stmt);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <title>Student Info</title>
    <style>
        table { border-collapse: collapse; margin-top: 1rem; }
        th, td { border: 1px solid #aaa; padding: 8px; }
    </style>
</head>
    <body>
        <h1>Student Details</h1>

        <?php if (empty($rows)): ?>
            <p>No transcript rows found for Student ID <?php echo htmlspecialchars($studentId); ?>.</p>
        <?php else: ?>
            <table>
            <thead>
            <tr>
                <th>ID</th>
                <th>First Name</th>
                <th>Major</th>
                <th>Course</th>
                <th>Grade</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($rows as $r): ?>
            <tr>
                <td><?php echo htmlspecialchars($r['ID']); ?></td>
                <td><?php echo htmlspecialchars($r['FirstName']); ?></td>
                <td><?php echo htmlspecialchars($r['Major']); ?></td>
                <td><?php echo htmlspecialchars($r['Course']); ?></td>
                <td><?php echo htmlspecialchars($r['Grade']); ?></td>
            </tr>
            <?php endforeach; ?>
        </tbody>
        </table>
    <?php endif; ?>

    <p style="margin-top:1rem;">
        <a href="StudentIDFinder.php">Back</a>
    </p>
    </body>
</html>
