<?php
include '../../componentes/header.php';
include '../../componentes/menu_admin.php';
?>
    <h2>Editar Horário</h2>

    <form action="" method="post">
        <div class="mb-3">
            <label for="date" class="form-label">Dia:</label>
            <input 
                type="date"
                name="date"
                id="date"
                class="form-control"
            />
        </div>

        <div class="mb-3">
            <label for="time" class="form-label">Horário:</label>
            <input
                type="time"
                name="time"
                id="time"
                class="form-control"
            />
        </div>

        <div class="mb-3">
            <label for="professional_hour" class="form-label">Profissional:</label>
            <select name="professional_id" id="professional_hour" class="form-control">
                <option value="">Douglas Castro</option>
            </select>
        </div>

        <a class="btn btn-danger" href="index.php">Cancelar</a>
        <button type="submit" class="btn btn-dark">Adicionar</button>
    </form>
</x-layout>