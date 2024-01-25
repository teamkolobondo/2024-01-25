<?php
global $conexion;
include_once ('config.php');
$id=$_GET['id'];
if ($_SERVER['REQUEST_METHOD']=='POST') {
    $actualizar = $conexion->prepare("update productos set nombre=:nombre where id=:id");
    $actualizar->bindParam(":nombre", $_POST['nombre_nuevo']);
    $actualizar->bindParam(":id", $id);
    $actualizar->execute();
}
?>
<html>
<body>
<form method="post" action="<?php $_SERVER['PHP_SELF'] ?>">
    Nombre <input type="text" name="nombre_nuevo">
    <input type="submit" value="Editar">
</form>

</body>
</html>
