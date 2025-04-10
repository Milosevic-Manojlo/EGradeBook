<?php
  $servername = "localhost";
  $username = "root";
  $password = '';
  $dbname = "elektronski_dnevnik";

  $conn = new mysqli($servername, $username, $password, $dbname);

  $id = $_GET['id'];

  if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $ime = $_POST['ime'];
    $prezime = $_POST['prezime'];
    $srpski = $_POST['srpski'];
    $engleski = $_POST['engleski'];
    $matematika = $_POST['matematika'];
    $programiranje = $_POST['programiranje'];
    $menadzment = $_POST['menadzment'];

    $sql = "UPDATE elektronski_dnevnik SET ime='$ime', prezime='$prezime', srpski='$srpski',engleski='$engleski',matematika='$matematika',programiranje='$programiranje',menadzment='$menadzment' WHERE id='$id'";

    if ($conn->query($sql) === TRUE) {
      header("Location: index.php");
    } else {
      echo "Greška prilikom izmene podataka: " . $conn->error;
    }
  }

  $sql = "SELECT * FROM elektronski_dnevnik WHERE id='$id'";
  $result = $conn->query($sql);

  if ($result->num_rows == 1) {
    $row = $result->fetch_assoc();
    $ime = $row['ime'];
    $prezime = $row['prezime'];
    $srpski = $row['srpski'];
    $engleski = $row['engleski'];
    $matematika = $row['matematika'];
     $programiranje = $row['programiranje'];
      $menadzment = $row['menadzment'];
?>

<!DOCTYPE html>
<html>
<head>
  <title>Izmena podataka ucenika</title>
  <link rel="stylesheet" href="styles.css">
</head>
<body>
     <div class="overlay">
        <img src="slike/e-Dnevnik-removebg-preview.png" alt="Vaša slika">
    </div>

  <div class="container">
  <h1>Izmena podataka</h1>
  <form action="izmena.php?id=<?php echo $id; ?>" method="POST">
    <div class="div1">
    <div class=div2>
    <label for="ime">Ime:</label>
    <input type="text" name="ime" id="ime" value="<?php echo $ime; ?>" required>
    </div>
    <div class="div2">
    <label for="prezime">Prezime:</label>
    <input type="text" name="prezime" id="prezime" value="<?php echo $prezime; ?>" required>
    </div>
    <div class="div2">
    <label for="Srpski">Srpski:</label>
    <input type="text" name="srpski" id="srpski" required placeholder="Izmenite postojeću ocenu učenika">
    </div>
    <div class="div2">
    <label for="Engleski">Engleski:</label>
    <input type="text" name="engleski" id="engleski" required placeholder="Izmenite postojeću ocenu učenika">
    </div>
    <div class="div2">
    <label for="Matematika">Matematika:</label>
    <input type="text" name="matematika" id="matematika" required placeholder="Izmenite postojeću ocenu učenika">
    </div>
    <div class="div2">
    <label for="programiranje">Programiranje:</label>
    <input type="text" name="programiranje" id="programiranje" required placeholder="Izmenite postojeću ocenu učenika">
    </div>
    <div class="div2">
    <label for="Menadzment">Menadžment:</label>
    <input type="text" name="menadzment" id="menadzment" required placeholder="Izmenite postojeću ocenu učenika">
    </div>
    <div class="div2">

    <input type="submit" value="Sačuvaj izmene">
  </form>
  </div>
</body>
</html>

<?php
  } else {
    echo "Podaci ne postoje.";
  }

  $conn->close();
?>
