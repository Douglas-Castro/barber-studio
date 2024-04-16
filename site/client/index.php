<?php
include '../../componentes/header.php';
include '../../componentes/menu_site.php';
?>
    <h2>Informe seus dados</h2>

    <form action="" method="post">
        <div class="mb-3">
            <label for="nome" class="form-label">Nome:</label>
            <input type="text"
                id="name_client"
                name="name_client"
                class="form-control"
            />
        </div>
    
        <div class="mb-3">
            <label for="nome" class="form-label">Telefone:</label>
            <input type="text"
                id="telephone_client"
                name="telephone_client"
                class="form-control"
            />
        </div>

        <div class="mt-3">
            <a class="btn btn-danger" href="../hour/index.php">Voltar</a>
            <a class="btn btn-dark" href="../order/index.php">Continuar</a>
        </div>
    </form>
<?php
include '../../componentes/footer.php';
?>