<?php
include 'get_alimentos3.php';

$data = json_decode(file_get_contents("php://input"));

// Verifica si los datos fueron enviados correctamente
if (!$data || !isset($data->id_alimento) || !isset($data->peso) || !isset($data->ingresar_numero)) {
    echo json_encode([]);
    exit;
}

$id_alimento = $data->id_alimento;
$peso = $data->peso;
$ingresar_numero = $data->ingresar_numero;

// Consulta para obtener carbohidratos y porcion_gr
$sql = "SELECT carbohidratos, porcion_gr FROM alimentos WHERE id = ?";
$stmt = $conn->prepare($sql);
$stmt->bind_param("i", $id_alimento);
$stmt->execute();
$result = $stmt->get_result();

if ($row = $result->fetch_assoc()) {
    $carbohidratos = $row['carbohidratos'];
    $porcion_gr = $row['porcion_gr'];

    // Primer cálculo: ingresar_numero * carbohidratos
    $resultado_parcial = $ingresar_numero * $carbohidratos;

    // Segundo cálculo: resultado_parcial / porcion_gr
    if ($porcion_gr != 0) {
        $resultado_final = $resultado_parcial / $porcion_gr;
    } else {
        echo json_encode(["error" => "Error: porcion_gr no puede ser 0"]);
        exit;
    }

    // Devuelve el resultado en JSON
    echo json_encode([
        "resultado" => $resultado_final,
        "carbohidratos" => $carbohidratos,
        "porcion_gr" => $porcion_gr
    ]);
} else {
    echo json_encode(["error" => "Alimento no encontrado"]);
}

// Cierra la conexión
$stmt->close();
$conn->close();
?>
