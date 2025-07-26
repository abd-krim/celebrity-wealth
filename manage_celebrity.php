
<?php
session_start();
if (!isset($_SESSION['loggedin'])) {
    header("Location: login.php");
    exit;
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Add / Edit Celebrity</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">
<div class="container py-5">
  <h2 class="mb-4">Add / Edit Celebrity</h2>
  <form action="#" method="POST" enctype="multipart/form-data">
    <div class="mb-3">
      <label class="form-label">Celebrity Name</label>
      <input type="text" name="name" class="form-control" required />
    </div>
    <div class="mb-3">
      <label class="form-label">Net Worth (USD)</label>
      <input type="number" name="net_worth" class="form-control" required />
    </div>
    <div class="mb-3">
      <label class="form-label">Profession</label>
      <input type="text" name="profession" class="form-control" required />
    </div>
    <div class="mb-3">
      <label class="form-label">Biography</label>
      <textarea name="bio" class="form-control" rows="4" required></textarea>
    </div>
    <div class="mb-3">
      <label class="form-label">Upload Image</label>
      <input type="file" name="image" class="form-control" accept="image/*" />
    </div>
    <button type="submit" class="btn btn-primary">Save Celebrity</button>
    <a href="dashboard.php" class="btn btn-secondary">Back to Dashboard</a>
  </form>
</div>
</body>
</html>
