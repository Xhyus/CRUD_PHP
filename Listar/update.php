<?php
include("../conexion.php");
if (isset($_GET['id'])) {
?>
    <form action="" method="post">
        <input type="text" name="url">
        <input type="submit" value="Subir">
    </form>
    <a href="./read.php">Volver</a>
    <?php
    if (isset($_POST['url'])) {

        $id = $_GET['id'];
        $url = $_POST['url'];
        $sql = "UPDATE imagenes Set url='$url' Where id=$id";
        $result = mysqli_query($con, $sql);
    }
} else {
    ?>
    <h1>Error al modificar la tupla</h1>
    <a href="./read.php">Volver</a>
<?php
}
