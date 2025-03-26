<!DOCTYPE html>
<html>

<head>
    <style>
    table,
    th,
    td {
        border: 1px solid red;
        border-collapse: collapse;
    }
    </style>
</head>

<body>
    <table style="width:100%">
        <tr>
            <th>ID</th>
            <th>USERNAME</th>
            <th>PASSWORD</th>
            <th>ACTION</th>
        </tr>
        
        <?php
        include 'database.php';
        $sql = "SELECT * FROM user";
        $result = mysqli_query($conn, $sql);
        while ($row = mysqli_fetch_array($result)) {
            echo "<tr>";
            echo "<td>" . $row['id'] . "</td>";
            echo "<td>" . $row['username'] . "</td>";
            echo "<td>" . $row['password'] . "</td>";
            echo "<td><a href='update.php?id=" . $row['id'] . "'>Update</a></td>";
            echo "</tr>";
        }
        ?>
       
    </table>
</body>

</html>