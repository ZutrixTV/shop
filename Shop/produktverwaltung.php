<?php
// Verbindung zur Datenbank herstellen
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "shop";
$conn = mysqli_connect($servername, $username, $password, $dbname);

// Produkt hinzufügen
if(isset($_POST['submit_add'])){
    // Daten aus dem Formular abrufen
  $name = mysqli_real_escape_string($conn, $_POST['name']);
  $beschreibung = mysqli_real_escape_string($conn, $_POST['beschreibung']);
  $preis = mysqli_real_escape_string($conn, $_POST['preis']);
  $kategorie = mysqli_real_escape_string($conn, $_POST['kategorie']);
  $bild = mysqli_real_escape_string($conn, $_POST['bild']);
  $bestand = mysqli_real_escape_string($conn, $_POST['bestand']);

  // SQL-Abfrage ausführen
  $sql = "INSERT INTO produkte (name, beschreibung, preis, kategorie, bild, bestand)
          VALUES ('$name', '$beschreibung', '$preis', '$kategorie', '$bild', '$bestand')";

  if(mysqli_query($conn, $sql)){
      echo "Produkt erfolgreich hinzugefügt.";
  } else {
      echo "Fehler beim Hinzufügen des Produkts: " . mysqli_error($conn);
  }
}

// Produkt bearbeiten
if(isset($_POST['submit_edit'])){
    // Daten aus dem Formular abrufen
  $id = mysqli_real_escape_string($conn, $_POST['id']);
  $name = mysqli_real_escape_string($conn, $_POST['name']);
  $beschreibung = mysqli_real_escape_string($conn, $_POST['beschreibung']);
  $preis = mysqli_real_escape_string($conn, $_POST['preis']);
  $kategorie = mysqli_real_escape_string($conn, $_POST['kategorie']);
  $bild = mysqli_real_escape_string($conn, $_POST['bild']);
  $bestand = mysqli_real_escape_string($conn, $_POST['bestand']);

  // SQL-Abfrage ausführen
  $sql = "UPDATE produkte SET name='$name', beschreibung='$beschreibung', preis='$preis', kategorie='$kategorie', bild='$bild', bestand='$bestand' WHERE id='$id'";

  if(mysqli_query($conn, $sql)){
      echo "Produkt erfolgreich bearbeitet.";
  } else {
      echo "Fehler beim Bearbeiten des Produkts: " . mysqli_error($conn);
  }
}

// Produkt löschen
if(isset($_POST['submit_delete'])){
    // Daten aus dem Formular abrufen
  $id = mysqli_real_escape_string($conn, $_POST['id']);

  // SQL-Abfrage ausführen
  $sql = "DELETE FROM produkte WHERE id='$id'";

  if(mysqli_query($conn, $sql)){
      echo "Produkt erfolgreich gelöscht.";
  } else {
      echo "Fehler beim Löschen des Produkts: " . mysqli_error($conn);
  }
}

// Daten aus der Datenbank abrufen
$sql = "SELECT * FROM produkte";
$result = mysqli_query($conn, $sql);

// Tabelle mit den Produktdaten erstellen
echo "<table>
      <tr>
        <th>ID</th>
        <th>Name</th>
        <th>Beschreibung</th>
        <th>Preis</th>
        <th>Kategorie</th>
        <th>Bild</th>
        <th>Bestand</th>
        <th>Aktionen</th>
      </tr>";

while($row = mysqli_fetch_assoc($result)) {
    echo "<tr>
          <td>" . $row['id'] . "</td>
          <td>" . $row['name'] . "</td>
          <td>" . $row['beschreibung'] . "</td>
          <td>" . $row['preis'] . "</td>
          <td>" . $row['kategorie'] . "</td>
          <td><img src='" . $row['bild'] . "' width='50' height='50'></td>
          <td>" . $row['bestand'] . "</td>
          <td>
            <form method='POST' action=''>
              <input type='hidden' name='id' value='" . $row['id'] . "'>
              <input type='submit' name='edit' value='Bearbeiten'>
            </form>
            <form method='POST' action=''>
              <input type='hidden' name='id' value='" . $row['id'] . "'>
              <input type='submit' name='delete' value='Löschen'>
            </form>
          </td>
        </tr>";
}

echo "</table>";

// Formular zum Hinzufügen eines Produkts erstellen
echo "<h2>Produkt hinzufügen</h2>";
echo "<form method='POST' action=''>
        <label>Name:</label>
        <input type='text' name='name' required><br>
        <label>Beschreibung:</label>
        <textarea name='beschreibung' required></textarea><br>
        <label>Preis:</label>
        <input type='number' step='0.01' min='0' name='preis' required><br>
        <label>Kategorie:</label>
        <input type='text' name='kategorie' required><br>
        <label>Bild:</label>
        <input type='text' name='bild' required><br>
        <label>Bestand:</label>
        <input type='number' min='0' name='bestand' required><br>
        <input type='submit' name='submit_add' value='Hinzufügen'>
      </form>";

// Formular zum Bearbeiten eines Produkts erstellen
if(isset($_POST['edit'])){
    $id = mysqli_real_escape_string($conn, $_POST['id']);
    $sql = "SELECT * FROM produkte WHERE id='$id'";
    $result = mysqli_query($conn, $sql);
    $row = mysqli_fetch_assoc($result);

    echo "<h2>Produkt bearbeiten</h2>";
    echo "<form method='POST' action=''>
          <input type='hidden' name='id' value='" . $row['id'] . "'>
          <label>Name:</label>
          <input type='text' name='name' value='" . $row['name'] . "' required><br>
          <label>Beschreibung:</label>
          <textarea name='beschreibung' required>" . $row['beschreibung'] . "</textarea><br>
          <label>Preis:</label>
          <input type='number' step='0.01' min='0' name='preis' value='" . $row['preis'] . "' required><br>
      `   <label>Kategorie:</label>
          <input type='text' name='kategorie' value='" . $row['kategorie'] . "' required><br>
          <label>Bild:</label>
          <input type='text' name='bild' value='" . $row['bild'] . "' required><br>
          <label>Bestand:</label>
          <input type='number' min='0' name='bestand' value='" . $row['bestand'] . "' required><br>
          <input type='submit' name='submit_edit' value='Speichern'>
          </form>";
}

    // Produkt löschen
if(isset($_POST['delete'])){
    $id = mysqli_real_escape_string($conn, $_POST['id']);
    $sql = "DELETE FROM produkte WHERE id='$id'";
    mysqli_query($conn, $sql);
    header("Location: index.php");
}

// Produkt hinzufügen
if(isset($_POST['submit_add'])){
    $name = mysqli_real_escape_string($conn, $_POST['name']);
    $beschreibung = mysqli_real_escape_string($conn, $_POST['beschreibung']);
    $preis = mysqli_real_escape_string($conn, $_POST['preis']);
    $kategorie = mysqli_real_escape_string($conn, $_POST['kategorie']);
    $bild = mysqli_real_escape_string($conn, $_POST['bild']);
    $bestand = mysqli_real_escape_string($conn, $_POST['bestand']);

    $sql = "INSERT INTO produkte (name, beschreibung, preis, kategorie, bild, bestand) VALUES ('$name', '$beschreibung', '$preis', '$kategorie', '$bild', '$bestand')";
    mysqli_query($conn, $sql);
    header("Location: index.php");
}

// Produkt bearbeiten
if(isset($_POST['submit_edit'])){
    $id = mysqli_real_escape_string($conn, $_POST['id']);
    $name = mysqli_real_escape_string($conn, $_POST['name']);
    $beschreibung = mysqli_real_escape_string($conn, $_POST['beschreibung']);
    $preis = mysqli_real_escape_string($conn, $_POST['preis']);
    $kategorie = mysqli_real_escape_string($conn, $_POST['kategorie']);
    $bild = mysqli_real_escape_string($conn, $_POST['bild']);
    $bestand = mysqli_real_escape_string($conn, $_POST['bestand']);

    $sql = "UPDATE produkte SET name='$name', beschreibung='$beschreibung', preis='$preis', kategorie='$kategorie', bild='$bild', bestand='$bestand' WHERE id='$id'";
    mysqli_query($conn, $sql);
    header("Location: index.php");
}

mysqli_close($conn);
?>