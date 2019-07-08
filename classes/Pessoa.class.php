<?php

include DIRCLASS . "Endereco.class.php";

class Pessoa {

    private $nome;
    private $sexo;
    private $cpf;
    private $rg;
    private $email;
    private $endereco;
    private $telefone;

    function __construct($nome, $sexo, $cpf, $rg, $email, $endereco, $telefone = null) {
        $this->nome = $nome;
        $this->sexo = $sexo;
        $this->cpf = $cpf;
        $this->rg = $rg;
        $this->email = $email;
        $this->endereco = $endereco;
        $this->telefone = $telefone;
    }

    function getTelefone() {
        return $this->telefone;
    }

    function setTelefone($telefone) {
        $this->telefone = $telefone;
    }

    function getNome() {
        return $this->nome;
    }

    function getSexo() {
        return $this->sexo;
    }

    function getCpf() {
        return $this->cpf;
    }

    function getRg() {
        return $this->rg;
    }

    function getEmail() {
        return $this->email;
    }

    function getEndereco() {
        return $this->endereco;
    }

    function setNome($nome) {
        $this->nome = $nome;
    }

    function setSexo($sexo) {
        $this->sexo = $sexo;
    }

    function setCpf($cpf) {
        $this->cpf = $cpf;
    }

    function setRg($rg) {
        $this->rg = $rg;
    }

    function setEmail($email) {
        $this->email = $email;
    }

    function setEndereco($endereco) {
        $this->endereco = $endereco;
    }

}
