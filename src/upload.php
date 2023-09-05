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

    $pname = rand(1000, 10000) . "-" . $_FILES["File"]["name"];

    $tname = $_FILES["File"]["tmp_name"]; // Use "File" instead of "files"

    $uploads_dir = '/src/img/';
    
    

    move_uploaded_file($tname, $uploads_dir . '/' . $pname);

    $sql = "INSERT into fileup(title, image) VALUES('$title', '$pname')";
    if (mysqli_query($conn, $sql)) {
        header("Location: index.php"); // Redirect to a success page
        exit();
    } else {
        echo "Error";
    }
}

