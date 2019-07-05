<?php
include_once '../config/config.php';

include_once DIRREQ . 'header.php';
?>

<div class="container">

    <form class="mt-5" style="text-align: center">
        <img class="mb-4" src="<?php echo DIRIMG . "logo-sistema.png" ?>" alt="Auto Escola">
        <h1 class="h3 mb-3 font-weight-normal">Faça login</h1>
        <label for="inputEmail" class="sr-only">Endereço de email</label>
        <input type="email" id="inputEmail" class="form-control" placeholder="Seu email" required autofocus>
        <label for="inputPassword" class="sr-only">Senha</label>
        <input type="password" id="inputPassword" class="form-control" placeholder="Senha" required>
        <div class="checkbox mb-3">
            <label>
                <input type="checkbox" value="remember-me"> Lembrar de mim
            </label>
        </div>
        <button class="btn btn-lg btn-primary btn-block" type="submit">Login</button>
    </form>


</div>

<?php
require_once (DIRREQ . "footer.php");
?>