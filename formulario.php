<?php
if (isset($_POST['submit'])) {
    // Código para manejar el formulario o cualquier lógica

    // Recargar la página actual
    header("Location: " . $_SERVER['PHP_SELF']);
    exit;
}
?>
<form method="post">
    <input type="submit" name="submit" value="Enviar y Recargar">
</form>