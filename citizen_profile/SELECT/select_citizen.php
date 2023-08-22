<?php
// Retrieve form data
$ΑΜΚΑ = $_POST['ΑΜΚΑ'];

// Connect to the database
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "PlanBeatsNoPlanZX1";

$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Select 
$sql = "SELECT ΑΜΚΑ, ΑΦΜ, IBANK, ΟΝΟΜΑΤΕΠΩΝΥΜΟ, ΠΑΤΡΩΝΥΜΟ, ΦΟΡΟΛΟΓΙΚΗ_ΔΗΛΩΣΗ, ΤΗΛ, EMAIL, ΗΛΙΚΙΑ, ΦΥΛΟ, ΕΜΠΕΙΡΙΑ_ΜΕ_ΙΟ FROM ΠΟΛΙΤΗΣ WHERE ΑΜΚΑ = '$ΑΜΚΑ'";
$result = $conn->query($sql);


if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        echo "ΑΜΚΑ: " . $row['ΑΜΚΑ'] . "<br>";
        echo "ΟΝΟΜΑΤΕΠΩΝΥΜΟ: " . $row['ΟΝΟΜΑΤΕΠΩΝΥΜΟ'] . "<br>";
    }
} else {
    echo "Error";
}

// Close the database connection
$conn->close();
?>
