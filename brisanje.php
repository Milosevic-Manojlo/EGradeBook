<?php
  $servername = "localhost";
  $username = "root";
  $dbname = "elektronski_dnevnik";

  $conn = new mysqli($servername, $username, $password, $dbname);

  $id = $_GET['id'];

  $sql = "DELETE FROM elektronski_dnevnik WHERE id='$id'";

  if ($conn->query($sql) === TRUE) {
    header("Location: index.php");
  } else {
    echo "Greška prilikom brisanja podataka: " . $conn->error;
  }

  $conn->close();
?>
