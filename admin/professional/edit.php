<?php
include '../../componentes/header.php';
include '../../componentes/menu_admin.php';
?>
    <h2>Editar Profissional</h2>
    
    <form action="" method="post">
        <div class="mb-3">
            <label for="nome" class="form-label">Nome:</label>
            <input type="text" id="name" name="name" class="form-control">
        </div>

        <div class="mb-3">
            <label for="telephone" class="form-label">Telefone:</label>
            <input type="text" id="telephone" name="telephone" class="form-control">
        </div>
        
        <div class="mb-3">
            <label for="position" class="form-label">Cargo:</label>
            <select id="position" name="position" class="form-control">
                <option value="barbeiro">Barbeiro</option>
            </select>
        </div>

        <a class="btn btn-danger" href="'../../index.php">Cancelar</a>
        <button type="submit" class="btn btn-dark">Adicionar</button>
    </form>
<?php
include '../../componentes/footer.php';
?>