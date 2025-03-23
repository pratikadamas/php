<?php
echo $_FILES['file']['name'];
echo "<br>";
echo $_FILES["file"]["type"];
echo"<br>";
echo $_FILES["file"]["size"];
echo "<br>";
echo $_FILES["file"]["error"];

echo "<br>";
echo $_FILES["file"]["tmp_name"];
echo "<br>";
echo $_FILES["file"]["full_path"];

echo "<br>";

echo "<h1> after uploading the file store in a folder </h1>";
echo"<br>";

if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_FILES["file"])) {
    $target_dir = "uploads files/";
    $target_file = $target_dir . basename($_FILES["file"]["name"]);

    if (move_uploaded_file($_FILES["file"]["tmp_name"], $target_file)) {
        echo "File uploaded successfully: " . htmlspecialchars($_FILES["file"]["name"]);
    } else {
        echo "Error uploading file.";
    }
}
?>



