<?php

class Endereco {

    private $logradouro;
    private $numero_casa;
    private $bairro;
    private $complemento;
    private $cidade;
    private $cep;

    
    
    function __construct($logradouro, $numero_casa, $bairro, $complemento, $cidade, $cep) {
        $this->logradouro = $logradouro;
        $this->numero_casa = $numero_casa;
        $this->bairro = $bairro;
        $this->complemento = $complemento;
        $this->cidade = $cidade;
        $this->cep = $cep;
    }
    
    
    function getLogradouro() {
        return $this->logradouro;
    }

    function getNumero_casa() {
        return $this->numero_casa;
    }

    function getBairro() {
        return $this->bairro;
    }

    function getComplemento() {
        return $this->complemento;
    }

    function getCidade() {
        return $this->cidade;
    }

    function getCep() {
        return $this->cep;
    }

    function setLogradouro($logradouro) {
        $this->logradouro = $logradouro;
    }

    function setNumero_casa($numero_casa) {
        $this->numero_casa = $numero_casa;
    }

    function setBairro($bairro) {
        $this->bairro = $bairro;
    }

    function setComplemento($complemento) {
        $this->complemento = $complemento;
    }

    function setCidade($cidade) {
        $this->cidade = $cidade;
    }

    function setCep($cep) {
        $this->cep = $cep;
    }



}
