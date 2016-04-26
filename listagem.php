<?php
$servername = "localhost";
$username = "db_teste";
$password = "123456";
$dbname = "db_teste";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT * FROM Clientes";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        
    	$id = $row["idClientes"];
    	echo "id: " . $row["idClientes"]. " - Nome: " . $row["Nome"]. " E-mail" . $row["Email"]. " <a href=\"excluir.php?idClientes=$id\">EXCLUIR</a><br>";
    }
} else {
    echo "0 results";
}
$conn->close();
?> 