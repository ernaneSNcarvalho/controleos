<?php

require_once $_SERVER['DOCUMENT_ROOT'] . '/ControleOs/DAO/TipoDAO.php';

class TipoCTRL
{
    public function InserirTipoCtrl(TipoVO $vo)
    {
        if ($vo->getNomeTipo() == '') {
            return 0;
        }
    }
}
