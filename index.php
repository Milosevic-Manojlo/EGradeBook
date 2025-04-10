<!DOCTYPE html>
<html>
<head>
  <title>Elektronski dnevnik</title>
  <link rel="stylesheet" href="styles.css">
</head>
<body>

   <div class="overlay">
        <img src="slike/e-Dnevnik-removebg-preview.png" alt="Vaša slika">
    </div>

  <div class="container">
  <h1>Unos novog ucenika</h1>
  <form action="unos.php" method="POST" enctype="multipart/form-data">
    <div class="div1">
    <div class=div2>
    <label for="ime">Ime:</label>
    <input type="text" name="ime" id="ime" required>
    </div>
    <div class="div2">
    <label for="prezime">Prezime:</label>
    <input type="text" name="prezime" id="prezime" required>
    </div>
    <div class="div2">
    <label for="slika">Slika:</label>
    <input type="file" class="file" name="slika" id="slika">
    </div>
    <div class="div2">
    <label for="Srpski">Srpski:</label>
    <input type="text" name="srpski" id="srpski" required placeholder="Unosite ocenu učenika">
    </div>
    <div class="div2">
    <label for="Engleski">Engleski:</label>
    <input type="text" name="engleski" id="engleski" required placeholder="Unosite ocenu učenika">
    </div>
    <div class="div2">
    <label for="Matematika">Matematika:</label>
    <input type="text" name="matematika" id="matematika" required placeholder="Unosite ocenu učenika">
    </div>
    <div class="div2">
    <label for="programiranje">Programiranje:</label>
    <input type="text" name="programiranje" id="programiranje" required placeholder="Unosite ocenu učenika">
    </div>
    <div class="div2">
    <label for="Menadzment">Menadžment:</label>
    <input type="text" name="menadzment" id="menadzment" required placeholder="Unosite ocenu učenika">
    </div>
    <div class="div2">
    <input type="submit" class value="Unesi">
</div>
</div>
  </form>
  <h2>Učenici</h2>
  <table>
    <tr>
      <th>Ime</th>
      <th>Prezime</th>
      <th>Slika</th>
      <th>Akcije</th>
      <th>Srpski</th>
      <th>Engleski</th>
      <th>Matematika</th>
      <th>Programiranje</th>
      <th>Menadzment</th>
    </tr>
    <?php include 'prikaz.php'; ?>
  </table>
</div>
</body>
</html>
