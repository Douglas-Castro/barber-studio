<?php
include '../../componentes/header.php';
include '../../componentes/menu_site.php';
?>
    <h2>Escolha o serviço</h2>

    <form action="" method="post">
        <ul class="list-group">
            <li class="list-group-item d-flex justify-content-between align-items-center">
                <div>
                    <input class="form-check-input me-1" type="radio" name="service_id" value="{{ $service->id }}"/>
                    <label class="form-check-label" for="firstRadio">Corte de Cabelo</label>
                </div>

                <span class="d-flex btn btn-dark btn-sm">
                    R$&nbsp;30,00
                </span>
            </li>

            <li class="list-group-item d-flex justify-content-between align-items-center">
                <div>
                    <input class="form-check-input me-1" type="radio" name="service_id" value="{{ $service->id }}"/>
                    <label class="form-check-label" for="firstRadio">Barba completo</label>
                </div>

                <span class="d-flex btn btn-dark btn-sm">
                    R$&nbsp;45,00
                </span>
            </li>

            <li class="list-group-item d-flex justify-content-between align-items-center">
                <div>
                    <input class="form-check-input me-1" type="radio" name="service_id" value="{{ $service->id }}"/>
                    <label class="form-check-label" for="firstRadio">Corte de Cabelo e Barba</label>
                </div>

                <span class="d-flex btn btn-dark btn-sm">
                    R$&nbsp;70,00
                </span>
            </li>
        </ul>

        <div class="mt-3">
            <!-- <button type="submit" class="btn btn-dark">Continuar</button> -->
            <a href="../professional/index.php" class="btn btn-dark">Continuar</a>
        </div>
    </form>
<?php
include '../../componentes/footer.php';
?>