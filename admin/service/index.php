<?php
include '../../componentes/header.php';
include '../../componentes/menu_admin.php';
?>
    <h2>Serviços</h2>

    <a href="create.php" class="btn btn-dark mb-2">Editar Serviço</a>

    <ul class="list-group">
        <li class="list-group-item d-flex justify-content-between align-items-center">
            Corte de Cabelo

            <span class="d-flex">
                <a href="edit.php" class="btn btn-dark btn-sm">
                    E
                </a>

                <form action="" method="post" class="ms-2">
                    <button class="btn btn-danger btn-sm">X</button>
                </form>
            </span>
        </li>

        <li class="list-group-item d-flex justify-content-between align-items-center">
            Barba

            <span class="d-flex">
                <a href="edit.php" class="btn btn-dark btn-sm">
                    E
                </a>

                <form action="" method="post" class="ms-2">
                    <button class="btn btn-danger btn-sm">X</button>
                </form>
            </span>
        </li>

        <li class="list-group-item d-flex justify-content-between align-items-center">
            Corte e Barba

            <span class="d-flex">
                <a href="edit.php" class="btn btn-dark btn-sm">
                    E
                </a>

                <form action="" method="post" class="ms-2">
                    <button class="btn btn-danger btn-sm">X</button>
                </form>
            </span>
        </li>
    </ul>
<?php
include '../../componentes/footer.php';
?>