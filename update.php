<!DOCTYPE html>
<html>

<head>
    <title>Update User</title>
</head>

<body>
    <?php
    include 'database.php';
    if (isset($_GET['id'])) {
        $id = $_GET['id'];
        $sql = "SELECT * FROM user WHERE id=$id";
        $result = mysqli_query($conn, $sql);
        $row = mysqli_fetch_array($result);
    }

    if (isset($_POST['update'])) {
        $id = $_POST['id'];
        $username = $_POST['username'];
        $password = $_POST['password'];

        $sql = "UPDATE user SET username='$username', password='$password' WHERE id=$id";
        if (mysqli_query($conn, $sql)) {
            echo "Record updated successfully";
        } else {
            echo "Error updating record: " . mysqli_error($conn);
        }
    }
    ?>

    <form method="post" action="">
        <input type="hidden" name="id" value="<?php echo $row['id']; ?>">
        <label for="username">Username:</label>
        <input type="text" name="username" ><br>
        <label for="password">Password:</label>
        <input type="text" name="password"><br>
        <input type="submit" name="update" value="Update">
    </form>
</body>

</html>