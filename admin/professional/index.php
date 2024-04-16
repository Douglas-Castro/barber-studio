<?php
include '../../componentes/header.php';
include '../../componentes/menu_admin.php';
?>
    <h2>Profissionais</h2>

    <a href="create.php" class="btn btn-dark mb-2">Cadastrar Profissional</a>

    <ul class="list-group">
        <li class="list-group-item d-flex justify-content-between align-items-center">
            Douglas Castro
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
            Vanessa Silva
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
            Thiago Souza
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