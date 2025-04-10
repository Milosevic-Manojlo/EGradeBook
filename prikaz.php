
<?php

  $servername = "localhost";
  $username = "root";
  $password = '';
  $dbname = "elektronski_dnevnik";

  $conn = new mysqli($servername, $username, $password, $dbname);
  $sql = "SELECT * FROM elektronski_dnevnik";
  $result = $conn->query($sql);
  if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
      echo "<tr>";
      echo "<td>".$row['ime']."</td>";
      echo "<td>".$row['prezime']."</td>";
      echo "<td><img src='slike/".$row['slika']."' width='80' height='80'></td>";
      echo "<td>";
      echo "<a href='izmena.php?id=".$row['id']."'>Izmeni</a> | ";
      echo "<a href='brisanje.php?id=".$row['id']."'>Obriši</a>";
      echo "<td>".$row['srpski']."</td>";
      echo "<td>".$row['engleski']."</td>";
      echo "<td>".$row['matematika']."</td>";
      echo "<td>".$row['programiranje']."</td>";
      echo "<td>".$row['menadzment']."</td>";
      echo "</td>";
      echo "</tr>";
    }
  } else {
    echo "<tr><td colspan='4'>Nema ucenika u bazi.</td></tr>";
  }

  $conn->close();
  ?>

