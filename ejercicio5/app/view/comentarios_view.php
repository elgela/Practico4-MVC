<?php
class ComentariosView {

    function showComents($tabla_comentarios) {
        require_once 'templates/form_agregar.phtml';
        ?>
        <div>
            <?php foreach ($tabla_comentarios as $comentario) { ?>
                <section>
                    <ul>
                        <li><h4><?php echo $comentario->id . ' - ' .  $comentario->comentario ?></h4></li>
                    </ul>
                </section>
                <?php } ?>
        </div>
        <?php
    }

    function showError($msj) {
        echo "<h1> Error </h1>";
        echo "<h2> $msj </h2>";
    }
}