<?php 

// Toegangsgegevens
$db_server = 'rdbms.strato.de';
$db_user = 'dbu5508730';
$db_password = 'jessevandriel';
$db_name = 'dbs11958063';

// Create connection
$conn = mysqli_connect($db_server, $db_user, $db_password, $db_name);

// Check connection
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}

if (isset($_POST["submit"])) {
    $title = $_POST["title"];

    $pname = rand(1000, 10000) . "-" . $_FILES["file"]["name"];

    $tname = $_FILES["file"]["tmp_name"]; 

    $uploads_dir = 'img';
    
    move_uploaded_file($tname, $uploads_dir . '/' . $pname);

    $sql = "INSERT into fileup(title, image) VALUES('$title', '$pname')";
    if (mysqli_query($conn, $sql)) {
        header("Location: index.php");
        exit();
    } else {
        echo "Error";
    }
}

