<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/flowbite@3.1.2/dist/flowbite.min.css" rel="stylesheet" />
    <style>
        h2 {
            text-align: center;
            color: blue;
        }
        a:link, a:visited {
  /* background-color: green; */
  color: white;
  padding: 10px 20px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
}
    </style>
</head>
<body></body>

<h2>Record Deleted Successfully</h2>
    
</body>
</html>
<?php
include 'db.php';
$id = $_GET['id'];
$sql = "DELETE FROM user WHERE id=$id";
$result = mysqli_query($conn, $sql);
if ($result) {
    header("Location: table.php");
} else {
    echo "<h1>Error Deleting Record: " . mysqli_error($conn) . "</h1>";
}

// echo"<a href='table.php'>Go Back</a>";
mysqli_close($conn);
?>