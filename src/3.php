
<?php

class SportsStats {

    public function getSportData($sport) {
        // Connect to database and retrieve sport data
        $conn = new mysqli("host", "user", "password", "database");
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }

        $sql = "SELECT * FROM sports WHERE sport='$sport'";
        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
            while($row = $result->fetch_assoc()) {
                // Process row data here
            }
        } else {
            echo "No rows found";
        }
    }
}
?>