<?php
$servername = "localhost";
$username = "db_teste";
$password = "123456";
$dbname = "db_teste";

$idClientes = $_GET['idClientes'];

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}


// sql to delete a record
$sql = "DELETE FROM Clientes WHERE idClientes=$idClientes";

if ($conn->query($sql) === TRUE) {
    echo "Record deleted successfully";
} else {
    echo "Error deleting record: " . $conn->error;
}

$conn->close();
?> 