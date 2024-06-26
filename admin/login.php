<?php
include '../componentes/header.php';
?>
    <div class="container d-flex justify-content-center">
        <form action="../Model/login.php" method="post">
            <div class="text-center my-5">
                <img src="../assets/logo.PNG" height="70px" width="auto">
            </div>
            
            <h2 class="my-3 text-center">Acesse sua conta!</h2>

            <div class="mb-3">
                <label for="email" class="form-label">E-mail:</label>
                <input
                    type="email"
                    name="email"
                    id="email"
                    class="form-control"
                />
            </div>

            <div class="mb-3">
                <label for="password" class="form-label">Senha:</label>
                <input
                    type="password"
                    name="password"
                    id="password"
                    class="form-control"
                />
            </div>

            <div class="text-center">
                <a class="btn btn-danger" href="./cadastro.php">Cadastrar-se</a>
                <button type="submit" class="btn btn-dark">Entrar</button>
            </div>
        </form>
    </div>
<?php
include '../componentes/footer.php';
?>