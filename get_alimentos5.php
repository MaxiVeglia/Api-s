<?php
include 'Connection.php';

$sql = "SELECT id_alimento, alimento, porcion_gr, HC_gr FROM lacteos";
$result = $conn->query($sql);

$calculos = [];
while ($row = $result->fetch_assoc()) {
    $calculos[] = $row;
}

echo json_encode($calculos);
$conn->close();
?>
