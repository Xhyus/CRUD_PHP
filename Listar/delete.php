<?php include("../conexion.php");
if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $sql = "DELETE FROM imagenes WHERE id=$id";
    $result = mysqli_query($con, $sql);
?>
    <h1>Ha sido borrado con exito la tupla con id <?php echo $id ?></h1>
    <a href="./read.php">Volver</a>
<?php
} else {
?>
    <h1>Error al eliminar la tupla</h1>
    <a href="./read.php">Volver</a>
<?php
}

?>