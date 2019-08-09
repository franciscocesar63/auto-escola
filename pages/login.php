<?php
include_once '../config/config.php';
$tela = "login";
include_once DIRREQ . 'header.php';
include_once DIRDB . 'conexao.php';
include_once DIRREQ . "dao/AutenticaDAO.php";

$conexao = new ClassConexao();
$pdo = $conexao->conectaDB();

if (!isset($_SESSION)) {
    session_start();
}

if (isset($_SESSION['usuario'])) {
    echo "<script>window.location.href='" . DIRPAGE . "painel-usuario.php'</script>";
}

if (isset($_POST['login'])) {
    $autentica = new AutenticaDAO();

    $resultado = $autentica->autenticaUsuario($_POST['login'], md5(md5($_POST['senha'])));
    if (is_array($resultado)) {
        $error = $resultado;
    } else {
        $_SESSION['usuario'] = serialize($resultado);
        echo "<script>window.location.href='" . DIRPAGE . "painel-usuario.php'</script>";
    }
}
?>

<div class="container">


    <form class="mt-5" style="" method="POST" action="#">

        <div class="wrapper fadeInDown">
            <div id="formContent">
                <!-- Tabs Titles -->

                <!-- Icon -->
                <div class="fadeIn first">
                    <img class="mb-4 mt-3" src="<?php echo DIRIMG . "logo-sistema.png" ?>" alt="Auto Escola">
                </div>
                <!--Error mensage-->
                <?php
                if (isset($error)) {
                    foreach ($error as $msg)
                        echo '<br>' . $msg;
                }
                ?>
                <!-- Login Form -->
                <form>
                    <input type="text" id="login" name="login" class="fadeIn second" name="login" placeholder="login">
                    <input type="text" id="password" name="senha" class="fadeIn third" name="login" placeholder="password">
                    <input type="submit" class="fadeIn fourth" value="Log In">
                </form>

                <!-- Remind Passowrd -->
                <div id="formFooter">
                    <a class="underlineHover" href="#">Forgot Password?</a>
                </div>

            </div>
        </div>


    </form>

    <?php
    require_once (DIRREQ . "footer.php");
    ?>