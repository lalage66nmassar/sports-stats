<?php
// Function to get a random team from the database
function getRandomTeam() {
    $teams = []; // Initialize an empty array to store teams

    // Query the database to get all teams
    $query = "SELECT * FROM teams";
    $result = mysqli_query($conn, $query);

    // Loop through the results and add each team to the array
    while ($row = mysqli_fetch_assoc($result)) {
        $teams[] = $row;
    }

    // Return a random team from the array
    return $teams[rand(0, count($teams) - 1)];
}
?>