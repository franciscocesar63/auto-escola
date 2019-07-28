<?php



class Funcionario extends Pessoa {

    private $cargo;
    private $salario;
    private $data_admissao;
    private $cnh;

    public function __construct($nome, $sexo, $cpf, $rg, $email, $endereco, $telefone, $cargo, $salario, $data_admissao, $cnh = null) {
        parent::__construct($nome, $sexo, $cpf, $rg, $email, $endereco, $telefone);
        $this->cargo = $cargo;
        $this->salario = $salario;
        $this->data_admissao = $data_admissao;
        $this->cnh = $cnh;
    }

    function getCargo() {
        return $this->cargo;
    }

    function getSalario() {
        return $this->salario;
    }

    function getData_admissao() {
        return $this->data_admissao;
    }

    function getCnh() {
        return $this->cnh;
    }

    function setCargo($cargo) {
        $this->cargo = $cargo;
    }

    function setSalario($salario) {
        $this->salario = $salario;
    }

    function setData_admissao($data_admissao) {
        $this->data_admissao = $data_admissao;
    }

    function setCnh($cnh) {
        $this->cnh = $cnh;
    }

}
