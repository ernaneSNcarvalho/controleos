<?php

require_once $_SERVER['DOCUMENT_ROOT'] . '/ControleOs/DAO/ModeloDAO.php';

class ModeloCTRL
{
    public function InserirModeloCtrl(ModeloVO $vo)
    {
        if ($vo->getNomeModelo() == '') {
            return 0;
        }
    }
}
