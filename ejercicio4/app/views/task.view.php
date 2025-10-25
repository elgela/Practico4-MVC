<?php
class TaskView {

    function showProducts($productos) {
        require_once 'templates/header.phtml';
?>
    <form class="form-productos">
        <h2>Productos de limpieza</h2>
        <nav class="navBar">
            <ul>
                <li><a href="lavandinas">Lavandinas</a></li>
                <li><a href="limpieza-de-pisos-y-muebles">Limpieza de Pisos y Muebles</a></li>
                <li><a href="limpieza-de-banios">Limpieza de baños</a></li>
                <li><a href="limpieza-de-cocina">Limpieza de cocina</a></li>
            </ul>
        </nav>

        <div class="productos">
            <?php foreach ($productos as $producto) {
                include 'templates/section_products.phtml';
            } ?>
        </div>
    </form>
<?php
        // require_once 'templates/footer.phtml';
    }

    function showDetails($productos, $id) {
        require_once 'templates/header.phtml';
    ?>
        <h2>Descripción</h2>
        <div class="detalles">
            <?php
                $producto = null;
                foreach ($productos as $detalleProducto) {
                    if ($detalleProducto->id == $id) {
                        $producto = $detalleProducto;
                        break;
                    }
                }
                if ($producto) {
                    // muestro detalles
            ?>
                <input type="button" value="Volver" class="btn btn-primary" onclick="history.back()">

                <h1><?= $producto->nombre ?></h1>
                <img src="<?= $producto->imagen ?>" alt="imagen del producto" style="max-width:250px;">
                <h3 style="color: red"><?php echo '$' . $producto->precio ?></h3>
                <h6>Descripción: </h6><p><?php echo $producto->descripcion ?></p>
                <input type="submit" value="Agregar" class="btn btn-primary">
            <?php
                }
            ?>
        </div>
    <?php
    }

}