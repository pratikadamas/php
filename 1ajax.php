

<!DOCTYPE html>
<html>


<head>
<!-- <link href="https://cdn.jsdelivr.net/npm/flowbite@3.1.2/dist/flowbite.min.css" rel="stylesheet" /> -->
    <style>
    table,
    th,
    td {
        border: 2px solid black;
        border-collapse: collapse;
        text-align: center;
    }
    a:link, a:visited {
  /* background-color: green; */
  color: white;
  padding: 10px 20px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
}

a:hover, a:active {
  opacity: 0.8;
}
.delete{
    background-color: red;
}
.update{
    background-color: green;
}
    #header {
        background-color: lightblue;
        /* padding: 15px; */
    }
    #header th {
        padding: 10px;
        background-color: lightblue;
    }
    tr:hover {
        background-color: lightgray;
    }
    #admin {
        color: blue;
        font-size:20px;
    }
    #admin:hover {
        color:lightseagreen;
    }
    body {
        background-color: lightyellow;
    }
    </style>
 <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js">

    </script>

</head>

<body>
    <div id="admin">
    <h2 style="text-align: center; " >USER TABLE  </h2>
    </div>
    <table style="width:100%">
        <tr id="header">
            <th>ID</th>
            <th>USERNAME</th>
            <th>PASSWORD</th>
            <th>ACTION</th>
        </tr>
        
        <?php
        include 'db.php';
        $sql = "SELECT * FROM user";
        $result = mysqli_query($conn, $sql);
        while ($row = mysqli_fetch_array($result)) {
            echo "<tr>";
            echo "<td>" . $row['id'] . "</td>";
            echo "<td>" . $row['username'] . "</td>";
            echo "<td>" . $row['password'] . "</td>";
            echo "<td>
            <a class='update' href='update.php?id=" . $row['id'] . "'>Update</a> 
             <a class='delete' href='delete.php?id=" .$row['id']  . "'>delete</a>
             </td>";
           
        }
        ?>
       
    </table>
</body>

</html>