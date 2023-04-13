<!DOCTYPE html>
<html>
<body>

<?php
$servername = "mysql:3306";
$username = "gram"; // es
$password = "Subaru555";
$dbname = "ramus_";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT ID, teksts, DEB, KRE FROM main";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "<br> id: ". $row["ID"]. "  " . $row["teksts"]. "  " . $row["DEB"]. "  " . $row["KRE"]. "<br>";
    }
} else {
    echo "0 results";
}

$conn->close();
?>

</body>
</html>
