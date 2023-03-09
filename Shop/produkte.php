<?php
// Verbindung zur Datenbank herstellen
$conn = mysqli_connect('localhost', 'root', '', 'shop');

// Produkte aus der Datenbank abrufen
$sql = "SELECT * FROM produkte";
$result = mysqli_query($conn, $sql);

// Tabellen-Header ausgeben
echo "<table>
        <tr>
          <th>ID</th>
          <th>Name</th>
          <th>Beschreibung</th>
          <th>Preis</th>
          <th>Kategorie</th>
          <th>Bild</th>
          <th>Bestand</th>
        </tr>";

// Produkte in einer Schleife ausgeben
while($row = mysqli_fetch_assoc($result)){
    echo "<tr>
          <td>" . $row['id'] . "</td>
          <td>" . $row['name'] . "</td>
          <td>" . $row['beschreibung'] . "</td>
          <td>" . $row['preis'] . "</td>
          <td>" . $row['kategorie'] . "</td>
          <td><img src='" . $row['bild'] . "'></td>
          <td>" . $row['bestand'] . "</td>
        </tr>";
}

echo "</table>";

// Verbindung zur Datenbank schließen
mysqli_close($conn);
?>