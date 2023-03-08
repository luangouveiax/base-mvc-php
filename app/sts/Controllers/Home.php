<?php

namespace App\sts\Controllers;

if (!defined('URL')) {
    header("Location: /");
    exit();
}

class Home
{
    private $Dados;

    public function index()
    {
        /*** Exemplo de Model ***
         * 
         * $ExemploModel = new \Sts\Models\Posts();
         * $this->Dados = $ExemploModel->getDados();
         *
        ***/

        $carregarView = new \Core\ConfigView("sts/Views/home/home", $this->Dados);
        $carregarView->renderizar();
    }

}
