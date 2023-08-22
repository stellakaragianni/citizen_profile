<?php
// Retrieve form data
$ΑΜΚΑ = $_POST['ΑΜΚΑ'];
$ΑΦΜ = $_POST['ΑΦΜ'];
$IBANK = $_POST['IBANK'];
$ΟΝΟΜΑΤΕΠΩΝΥΜΟ = $_POST['ΟΝΟΜΑΤΕΠΩΝΥΜΟ'];
$ΠΑΤΡΩΝΥΜΟ = $_POST['ΠΑΤΡΩΝΥΜΟ'];
$ΦΟΡΟΛΟΓΙΚΗ_ΔΗΛΩΣΗ = $_POST['ΦΟΡΟΛΟΓΙΚΗ_ΔΗΛΩΣΗ'];
$ΤΗΛ = $_POST['ΤΗΛ'];
$EMAIL = $_POST['EMAIL'];
$ΗΛΙΚΙΑ = $_POST['ΗΛΙΚΙΑ'];
$ΦΥΛΟ = $_POST['ΦΥΛΟ'];
$ΕΜΠΕΙΡΙΑ_ΜΕ_ΙΟ = $_POST['ΕΜΠΕΙΡΙΑ_ΜΕ_ΙΟ'];

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

// Update data
$sql = "UPDATE ΠΟΛΙΤΗΣ SET ΑΦΜ = '$ΑΦΜ', IBANK = '$IBANK', ΟΝΟΜΑΤΕΠΩΝΥΜΟ = '$ΟΝΟΜΑΤΕΠΩΝΥΜΟ', ΠΑΤΡΩΝΥΜΟ = '$ΠΑΤΡΩΝΥΜΟ', ΦΟΡΟΛΟΓΙΚΗ_ΔΗΛΩΣΗ = '$ΦΟΡΟΛΟΓΙΚΗ_ΔΗΛΩΣΗ', ΤΗΛ = '$ΤΗΛ',EMAIL = '$EMAIL', ΗΛΙΚΙΑ = '$ΗΛΙΚΙΑ', ΦΥΛΟ = '$ΦΥΛΟ", ΕΜΠΕΙΡΙΑ_ΜΕ_ΙΟ = '$ΕΜΠΕΙΡΙΑ_ΜΕ_ΙΟ')";



if ($conn->query($sql) === TRUE) {
    echo "Επιτυχία.";
} else {
    echo "Error" . $conn->error;
}


// Close the database connection
$conn->close();
?>
