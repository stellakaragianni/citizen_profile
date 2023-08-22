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


$sql = "DELETE ΑΜΚΑ, ΑΦΜ, IBANK, ΟΝΟΜΑΤΕΠΩΝΥΜΟ, ΠΑΤΡΩΝΥΜΟ, ΦΟΡΟΛΟΓΙΚΗ_ΔΗΛΩΣΗ, ΤΗΛ, EMAIL,  ΗΛΙΚΙΑ, ΦΥΛΟ, ΕΜΠΕΙΡΙΑ_ΜΕ_ΙΟ, ΚΩΔ_ΥΠΑΛ FROM ΠΟΛΙΤΗΣ WHERE ΑΜΚΑ = '$ΑΜΚΑ'";
$result = $conn->query($sql);


// Close the database connection
$conn->close();
?>
