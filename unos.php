<?php

  $servername = "localhost";

  $username = "root";

  $password = '';
  
  $dbname = "elektronski_dnevnik";
  $conn = new mysqli($servername, $username, $password, $dbname);

  $ime = $_POST['ime'];
  $prezime = $_POST['prezime'];
  $srpski = $_POST['srpski'];
  $engleski = $_POST['engleski'];
  $matematika = $_POST['matematika'];
  $programiranje = $_POST['programiranje'];
  $menadzment = $_POST['menadzment'];
  $slika = $_FILES['slika']['name'];
  $slika_tmp = $_FILES['slika']['tmp_name'];

  $upload_dir = 'C:\Users\ratni\OneDrive\Desktop\engleski';
  move_uploaded_file($slika_tmp, $upload_dir . $slika);

  $sql = "INSERT INTO elektronski_dnevnik (ime, prezime, slika, srpski, engleski, matematika, programiranje, menadzment) VALUES ('$ime', '$prezime','$slika','$srpski','$engleski','$matematika','$programiranje','$menadzment')";

  if ($conn->query($sql) === TRUE) {
    header("Location: index.php");
  } else {
    echo "Greška prilikom unosa podataka: " . $conn->error;
  }

  $conn->close();

?>
