<?php
$con = mysqli_connect("localhost", "username", "password", "dbname");
if (!$con) {
    die("Connection failed: " . mysqli_connect_error());
}
$sql = "SELECT * FROM sports_stats";
$result = mysqli_query($con, $sql);
while ($row = mysqli_fetch_array($result)) {
    echo "<tr>";
    echo "<td>" . $row['date'] . "</td>";
    echo "<td>" . $row['team1'] . "</td>";
    echo "<td>" . $row['team2'] . "</td>";
    echo "<td>" . $row['game_type'] . "</td>";
    echo "<td>" . $row['venue'] . "</td>";
    echo "<td>" . $row['referee'] . "</td>";
    echo "<td>" . $row['match_status'] . "</td>";
    echo "</tr>";
}
mysqli_close($con);
?>