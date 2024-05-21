<?php
include_once '../../componentes/verificar_login.php';
include '../../componentes/header.php';
include '../../componentes/menu_admin.php';
?>
    <h2>Cadastrar Serviço</h2>

    <form action="" method="post">
        <div class="mb-3">
            <label for="nome" class="form-label">Nome:</label>
            <input type="text"
                    id="name"
                    name="name"
                    class="form-control"/>
        </div>

        <div class="mb-3">
            <label for="nome" class="form-label">Preço:</label>
            <input type="text"
                    id="price"
                    name="price"
                    class="form-control"/>
        </div>
        
        <div class="mb-3">
            <label for="position" class="form-label">Descrição:</label>
            <textarea id="description" name="description" class="form-control" rows="4" cols="50"></textarea>
        </div>

        <a class="btn btn-danger" href="index.php">Cancelar</a>
        <button type="submit" class="btn btn-dark">Adicionar</button>
    </form>
<?php
include '../../componentes/footer.php';
?>