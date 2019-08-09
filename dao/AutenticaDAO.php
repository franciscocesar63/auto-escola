<?php


include_once DIRDB . "conexao.php";

include_once DIRREQ . "classes/Autoload.php";
$autoload = new Autoload();

if (!isset($_SESSION)) {
    session_start();
}

class AutenticaDAO {

    public function autenticaUsuario($login, $senha) {
        $conexao = new ClassConexao();
        $pdo = $conexao->conectaDB();
        try {


            $qry = $pdo->prepare("SELECT * FROM usuario WHERE login= :login");
            $qry->bindParam(":login", $login);
            $qry->execute();
            $result = $qry->rowCount();

            if ($result === 0) {
                $error[] = "Login não encontrado!";
                return $error;
            } else {
//                SELECT USUARIO
                $qry_senha = $pdo->prepare("SELECT * FROM usuario WHERE login= :login AND senha = :senha");
                $qry_senha->bindParam(":login", $login);
                $qry_senha->bindParam(":senha", $senha);
                $qry_senha->execute();
                $dados_usuario = $qry_senha->fetch(PDO::FETCH_ASSOC);

                if ($qry_senha->rowCount() === 0) {
                    $error[] = "Senha Incorreta";
                    return $error;
                } else {
//                    SELECT FUNCIONARIO
                    $qry_autenticacao = $pdo->prepare("SELECT * FROM funcionario WHERE id = :id");
                    $qry_autenticacao->bindParam(":id", $dados_usuario['id']);
                    $qry_autenticacao->execute();
                    $dado_funcionario = $qry_autenticacao->fetch(PDO::FETCH_ASSOC);


                    //                            Select PESSOA
                    $qry_pessoa = $pdo->prepare("SELECT * FROM pessoa WHERE id= :id");
                    $qry_pessoa->bindParam(":id", $dados_usuario['id']);
                    $qry_pessoa->execute();
                    $dado_pessoa = $qry_pessoa->fetch(PDO::FETCH_ASSOC);

//                            SELECT ENDERECO
                    $qry_endereco = $pdo->prepare("SELECT * FROM endereco WHERE id= :id");
                    $qry_endereco->bindParam(":id", $dados_usuario['id']);
                    $qry_endereco->execute();
                    $dado_endereco = $qry_endereco->fetch(PDO::FETCH_ASSOC);
                    $endereco = new Endereco($dado_endereco['logradouro'], $dado_endereco['numero_casa'], $dado_endereco['bairro'], $dado_endereco['complemento'], $dado_endereco['cidade'], $dado_endereco['cep']);
//                            SELECT TELEFONE
                    $qry_telefone = $pdo->prepare("SELECT * FROM telefone WHERE id= :id");
                    $qry_telefone->bindParam(":id", $dados_usuario['id']);
                    $qry_telefone->execute();
                    $telefone = $qry_telefone->fetch(PDO::FETCH_ASSOC);
                    switch ($dado_funcionario['cargo']) {
                        case "gerente":
                            $gerente = new Funcionario($dado_pessoa['nome'], $dado_pessoa['sexo'], $dado_pessoa['cpf'], $dado_pessoa['rg'],
                                    $dado_pessoa['email'], $endereco, $telefone, $dado_funcionario['cargo'], $dado_funcionario['salario'], 
                                    $dado_funcionario['data_admissao']);
                            return $gerente;
                            break;
                        case "instrutor":

                            break;

                        case "secretaria":

                            break;
                        default:
                            break;
                    }
                }
            }
        } catch (Exception $ex) {
            $error[] = "Login ou senha incorretos!";
            return $error;
        }
    }

}
