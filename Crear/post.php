<?php
include("../conexion.php");
if (isset($_POST['imagen'])) {
    $imagen = $_POST['imagen'];
    $sql = "INSERT INTO imagenes VALUES (NULL,'$imagen')";
    $result = mysqli_query($con, $sql);
    if ($result) {
        echo "Imagen subida correctamente";
?>
        <a href="../Listar/read.php">Volver</a>
    <?php
    } else {
        echo "Error al subir la imagen";
    ?>
        <a href="../Listar/read.php">Volver</a>
<?php
    }
} else {
    echo "Error al subir la imagen";
}
