<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href=".\css\bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
    <title>Calculadora de Alimentos</title>
</head>
<body>
    <?php include("base_de_datos.php");?>
     
    <section class="seccion_alimentos">
    
    <h3>Sección de Alimentos</h3>

    <div class="accordion accordion-flush" id="accordionFlushExample3">
  <div class="accordion-item">
    <h2 class="accordion-header">
      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseThree" aria-expanded="false" aria-controls="flush-collapseThree">
        Cereales
      </button>
    </h2>
    <div id="flush-collapseThree" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample3">
    <?php
                    if ($basededatos) {
                        $consulta = "SELECT * FROM cereales";
                        $resultado = mysqli_query($basededatos, $consulta);
                        if ($resultado) {
                            while ($alimento = $resultado->fetch_array()) {?>
                                <tr>
                                    <td><?php echo $alimento['alimento']; ?></td>

                                    <td><form action="index.php" method="post">
                                        <input type="hidden" name="id" value="<?php echo $alimento['id_alimento']; ?>">
                                        <input type="hidden" name="nombre" value="<?php echo $alimento['alimento']; ?>">
                                        <input type="hidden" name="porcion" value="<?php echo $alimento['porcion_gr']; ?>">
                                        <input type="hidden" name="hc" value="<?php echo $alimento['HC_gr']; ?>">
                                        <input type="number" name="gramos" placeholder="gramos a calcular">
                                        <input type="submit" value="agregar"><br>
                                    </form></td>
                                </tr>
                            <?php }
                        }
                    } else {
                        echo "<p>NO FUNCIONA LA BASE DE DATOS</p>";
                    }
                ?>
    </div>
  </div>
</div>

    <div class="accordion accordion-flush" id="accordionFlushExample1">
  <div class="accordion-item">
    <h2 class="accordion-header">
      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseOne" aria-expanded="false" aria-controls="flush-collapseOne">
        Comidas
      </button>
    </h2>
    <div id="flush-collapseOne" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample1">
      <?php
      if ($basededatos) {
          $consulta = "SELECT * FROM comidas";
          $resultado = mysqli_query($basededatos, $consulta);
          if ($resultado) {
              while ($alimento = $resultado->fetch_array()) {?>
                  <tr>
                      <td><?php echo $alimento['alimento']; ?></td>

                      <td><form action="index.php" method="post">
                          <input type="hidden" name="id" value="<?php echo $alimento['id_alimento']; ?>">
                          <input type="hidden" name="nombre" value="<?php echo $alimento['alimento']; ?>">
                          <input type="hidden" name="porcion" value="<?php echo $alimento['porcion_gr']; ?>">
                          <input type="hidden" name="hc" value="<?php echo $alimento['HC_gr']; ?>">
                          <input type="number" name="gramos" placeholder="gramos a calcular">
                          <input type="submit" value="agregar"><br>
                      </form></td>
                  </tr>
              <?php }
          }
      } else {
          echo "<p>NO FUNCIONA LA BASE DE DATOS</p>";
      }
  ?>
    </div>
  </div>
</div>

<div class="accordion accordion-flush" id="accordionFlushExample2">
  <div class="accordion-item">
    <h2 class="accordion-header">
      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseTwo" aria-expanded="false" aria-controls="flush-collapseTwo">
        Dulces
      </button>
    </h2>
    <div id="flush-collapseTwo" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample2">
    <?php
                    if ($basededatos) {
                        $consulta = "SELECT * FROM dulces";
                        $resultado = mysqli_query($basededatos, $consulta);
                        if ($resultado) {
                            while ($alimento = $resultado->fetch_array()) {?>
                                <tr>
                                    <td><?php echo $alimento['alimento']; ?></td>

                                    <td><form action="index.php" method="post">
                                        <input type="hidden" name="id" value="<?php echo $alimento['id_alimento']; ?>">
                                        <input type="hidden" name="nombre" value="<?php echo $alimento['alimento']; ?>">
                                        <input type="hidden" name="porcion" value="<?php echo $alimento['porcion_gr']; ?>">
                                        <input type="hidden" name="hc" value="<?php echo $alimento['HC_gr']; ?>">
                                        <input type="number" name="gramos" placeholder="gramos a calcular">
                                        <input type="submit" value="agregar"><br>
                                    </form></td>
                                </tr>
                            <?php }
                        }
                    } else {
                        echo "<p>NO FUNCIONA LA BASE DE DATOS</p>";
                    }
                ?>
    </div>
  </div>
</div>

<div class="accordion accordion-flush" id="accordionFlushExample4">
  <div class="accordion-item">
    <h2 class="accordion-header">
      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseFour" aria-expanded="false" aria-controls="flush-collapseFour">
        Frutas
      </button>
    </h2>
    <div id="flush-collapseFour" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample4">
      <?php
      if ($basededatos) {
          $consulta = "SELECT * FROM frutas";
          $resultado = mysqli_query($basededatos, $consulta);
          if ($resultado) {
              while ($alimento = $resultado->fetch_array()) {?>
                  <tr>
                      <td><?php echo $alimento['alimento']; ?></td>

                      <td><form action="index.php" method="post">
                          <input type="hidden" name="id" value="<?php echo $alimento['id_alimento']; ?>">
                          <input type="hidden" name="nombre" value="<?php echo $alimento['alimento']; ?>">
                          <input type="hidden" name="porcion" value="<?php echo $alimento['porcion_gr']; ?>">
                          <input type="hidden" name="hc" value="<?php echo $alimento['HC_gr']; ?>">
                          <input type="number" name="gramos" placeholder="gramos a calcular">
                          <input type="submit" value="agregar"><br>
                      </form></td>
                  </tr>
              <?php }
          }
      } else {
          echo "<p>NO FUNCIONA LA BASE DE DATOS</p>";
      }
  ?>
    </div>
  </div>
</div>

<div class="accordion accordion-flush" id="accordionFlushExample5">
  <div class="accordion-item">
    <h2 class="accordion-header">
      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseFive" aria-expanded="false" aria-controls="flush-collapseFive">
        Lacteos
      </button>
    </h2>
    <div id="flush-collapseFive" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample5">
    <?php
                    if ($basededatos) {
                        $consulta = "SELECT * FROM lacteos";
                        $resultado = mysqli_query($basededatos, $consulta);
                        if ($resultado) {
                            while ($alimento = $resultado->fetch_array()) {?>
                                <tr>
                                    <td><?php echo $alimento['alimento']; ?></td>

                                    <td><form action="index.php" method="post">
                                        <input type="hidden" name="id" value="<?php echo $alimento['id_alimento']; ?>">
                                        <input type="hidden" name="nombre" value="<?php echo $alimento['alimento']; ?>">
                                        <input type="hidden" name="porcion" value="<?php echo $alimento['porcion_gr']; ?>">
                                        <input type="hidden" name="hc" value="<?php echo $alimento['HC_gr']; ?>">
                                        <input type="number" name="gramos" placeholder="gramos a calcular">
                                        <input type="submit" value="agregar"><br>
                                    </form></td>
                                </tr>
                            <?php }
                        }
                    } else {
                        echo "<p>NO FUNCIONA LA BASE DE DATOS</p>";
                    }
                ?>
    </div>
  </div>
</div>

<div class="accordion accordion-flush" id="accordionFlushExample6">
  <div class="accordion-item">
    <h2 class="accordion-header">
      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseSix" aria-expanded="false" aria-controls="flush-collapseSix">
        Panificados
      </button>
    </h2>
    <div id="flush-collapseSix" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample6">
    <?php
                    if ($basededatos) {
                        $consulta = "SELECT * FROM panificados";
                        $resultado = mysqli_query($basededatos, $consulta);
                        if ($resultado) {
                            while ($alimento = $resultado->fetch_array()) {?>
                                <tr>
                                    <td><?php echo $alimento['alimento']; ?></td>

                                    <td><form action="index.php" method="post">
                                        <input type="hidden" name="id" value="<?php echo $alimento['id_alimento']; ?>">
                                        <input type="hidden" name="nombre" value="<?php echo $alimento['alimento']; ?>">
                                        <input type="hidden" name="porcion" value="<?php echo $alimento['porcion_gr']; ?>">
                                        <input type="hidden" name="hc" value="<?php echo $alimento['HC_gr']; ?>">
                                        <input type="number" name="gramos" placeholder="gramos a calcular">
                                        <input type="submit" value="agregar"><br>
                                    </form></td>
                                </tr>
                            <?php }
                        }
                    } else {
                        echo "<p>NO FUNCIONA LA BASE DE DATOS</p>";
                    }
                ?>
    </div>
  </div>
</div>

<div class="accordion accordion-flush" id="accordionFlushExample7">
  <div class="accordion-item">
    <h2 class="accordion-header">
      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseSeven" aria-expanded="false" aria-controls="flush-collapseSeven">
        Vegetales
      </button>
    </h2>
    <div id="flush-collapseSeven" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample7">
    <?php
                    if ($basededatos) {
                        $consulta = "SELECT * FROM vegetales";
                        $resultado = mysqli_query($basededatos, $consulta);
                        if ($resultado) {
                            while ($alimento = $resultado->fetch_array()) {?>
                                <tr>
                                    <td><?php echo $alimento['alimento']; ?></td>

                                    <td><form action="index.php" method="post">
                                        <input type="hidden" name="id" value="<?php echo $alimento['id_alimento']; ?>">
                                        <input type="hidden" name="nombre" value="<?php echo $alimento['alimento']; ?>">
                                        <input type="hidden" name="porcion" value="<?php echo $alimento['porcion_gr']; ?>">
                                        <input type="hidden" name="hc" value="<?php echo $alimento['HC_gr']; ?>">
                                        <input type="number" name="gramos" placeholder="gramos a calcular">
                                        <input type="submit" value="agregar"><br>
                                    </form></td>
                                </tr>
                            <?php }
                        }
                    } else {
                        echo "<p>NO FUNCIONA LA BASE DE DATOS</p>";
                    }
                ?>
    </div>
  </div>
</div>

    <?php
        // Verifica si se ha enviado un formulario de agregar
        if (isset($_POST['id'])) {
            $id = $_POST['id'];
            $nombre = $_POST['nombre'];
            $porcion = $_POST['porcion'];
            $hc = $_POST['hc'];
            $gramos = $_POST['gramos'];
            
            $calculo = $gramos * $hc / $porcion;

            if ($basededatos) {
                $consulta = "INSERT INTO calculos VALUES ('$id', '$nombre', '$calculo')";
                $resultado_calculo = mysqli_query($basededatos, $consulta);
            }
        }

        // Verifica si se ha enviado un formulario de eliminar
        if (isset($_POST['delete_id'])) {
            
            $delete_id = $_POST['delete_id'];

            if ($basededatos) {
                $consulta = "DELETE FROM calculos WHERE `id_alimento` = $delete_id";
                $resultado_calculo = mysqli_query($basededatos, $consulta);
            }
        }

        ?>
    </section>


    <aside class="seccion_calculadora">
    <h3>Calculadora de Alimentos</h3>
            <?php
                    if ($basededatos) {
                        $consulta = "SELECT * FROM calculos";
                        $resultado_calculo = mysqli_query($basededatos, $consulta);
                        if ($resultado_calculo) {
                            while ($alimento_calculo = $resultado_calculo->fetch_array()) {
                            ?>
                                <div class="alimento_calculadora">
                                    <?php echo $alimento_calculo['nombre_alimento']; ?>
                                    <?php echo $alimento_calculo['resultado_calculo']; ?>

                                    <form action="index.php" method="post" class="form">
                                        <input type="hidden" name="delete_id" value="<?php echo $alimento_calculo['id_alimento']; ?>">
                                        <input type="submit" value="eliminar"><br>
                                    </form>
                                
                                    <?php $total_calculado += $alimento_calculo['resultado_calculo']; ?>

                                  </div>
                            <?php
                            } ?>
                            <?php

                            if(!$total_calculado){
                              echo "<p>No hay alimentos registrados</p>";
                            } else {
                              echo "El total calculado es: ".$total_calculado.""; 
                            }                              
                            
                           } else {
                            echo "<p>No hay alimentos agregados</p>";
                          }
                            ?>
                    <?php } else {
                        echo "<p>NO FUNCIONA LA BASE DE DATOS</p>";
                    }
                ?>
    </aside>
</body>

<script src=".\js\bootstrap.bundle.js"></script>

</html>