<?php
include '../../componentes/header.php';
include '../../componentes/menu_site.php';
?>
    <h2>Escolha o horário</h2>

    <form action="{" method="post">
        <ul class="list-group">
            <li class="list-group-item">
                <input class="form-check-input me-1" type="radio" name="hour_id" value="" id="firstRadio"/>
                <label class="form-check-label" for="firstRadio">15/11/2023 - 8:00</label>
            </li>

            <li class="list-group-item">
                <input class="form-check-input me-1" type="radio" name="hour_id" value="" id="firstRadio"/>
                <label class="form-check-label" for="firstRadio">15/11/2023 - 10:30</label>
            </li>

            <li class="list-group-item">
                <input class="form-check-input me-1" type="radio" name="hour_id" value="" id="firstRadio"/>
                <label class="form-check-label" for="firstRadio">15/11/2023 - 11:30</label>
            </li>
        </ul>

        <div class="mt-3">
            <a class="btn btn-danger" href="../professional/index.php">Voltar</a>
            <a class="btn btn-dark" href="../client/index.php">Continuar</a>
        </div>
    </form>
<?php
include '../../componentes/footer.php';
?>