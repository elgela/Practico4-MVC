<?php
class TaskView {

    function showProducts($productos) {
        require_once 'templates/header.phtml';
?>
    <form class="form-productos">
        <h2>Productos</h2>
        <nav class="navBar">
            <ul>
                <li><a href="productos">Productos</a></li>
            </ul>
        </nav>
    </form>
<?php
        // require_once 'templates/footer.phtml';
    }

}