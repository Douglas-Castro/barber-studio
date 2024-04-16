<?php
include '../../componentes/header.php';
include '../../componentes/menu_site.php';
?>
    <h2>Escolha o profissional</h2>

    <form action="" method="post">
        <ul class="list-group">
            <li class="list-group-item">
                <input class="form-check-input me-1" type="radio" name="professional_id" value="" id="firstRadio"/>
                <label class="form-check-label" for="firstRadio">Douglas Castro</label>
            </li>

            <li class="list-group-item">
                <input class="form-check-input me-1" type="radio" name="professional_id" value="" id="firstRadio"/>
                <label class="form-check-label" for="firstRadio">Vanessa Silva</label>
            </li>

            <li class="list-group-item">
                <input class="form-check-input me-1" type="radio" name="professional_id" value="" id="firstRadio"/>
                <label class="form-check-label" for="firstRadio">Thiago Souza</label>
            </li>
        </ul>

        <div class="mt-3">
            <a class="btn btn-danger" href="../service/index.php">Voltar</a>
            <a class="btn btn-dark" href="../hour/index.php">Continuar</a>
        </div>
    </form>
<?php
include '../../componentes/footer.php';
?>