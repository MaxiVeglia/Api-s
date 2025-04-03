<?php
include 'Connection.php';

$sql = "SELECT id_alimento, nombre_alimento, resultado_calculo FROM calculos";
$result = $conn->query($sql);

$calculos = [];
while ($row = $result->fetch_assoc()) {
    $calculos[] = $row;
}

echo json_encode($calculos);
$conn->close();
?>
