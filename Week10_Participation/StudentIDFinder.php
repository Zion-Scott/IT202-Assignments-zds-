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
    <button type="submit">Lookup</button>
  </form>

  <p><a href="index.php">Home</a></p>
</body>
</html>
