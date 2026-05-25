<?php
    require "dados/funcionarios.php";
    require "dados/departamentos.php";

    /**
     * Função que rece um array e calcula o total de funcionarios da empresa
     * @return int total de funcionarios
     */
    function totalFuncionarios(): int
    {
        global $funcionarios;
        return count($funcionarios);
    }