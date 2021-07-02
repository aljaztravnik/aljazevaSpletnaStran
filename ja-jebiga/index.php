<?php
echo "<p><a href=\"http://www.f1livegp.me/f1/live.html\">F1LIVEGP STREAM</a></p><br>";
echo "<p><a href=\"https://www.sportsurge.net\">OTHER SPORT STREAMS</a></p><br>";
echo "<p><a href=\"https://www.overtakefans.com\">F1 REPLAYS & DRIVE TO SURVIVE</a></p>";

$conn = mysqli_connect("localhost", "aljaz", "admin", "zapisnik_ur");

// Check connection
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}
echo "Connected successfully<br>";

$sql = "SELECT * FROM prihod_odhod";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
    echo "prihod: " .$row["prihod"]. " - odhod: " .$row["odhod"]. " - datum: " .$row["datum"].  " - st. ur: " .$row["st_ur"]. "<br>";
  }
} else {
  echo "0 results";
}
$conn->close();

?>