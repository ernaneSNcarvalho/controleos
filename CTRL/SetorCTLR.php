<?php

require_once $_SERVER['DOCUMENT_ROOT'] . '/ControleOs/DAO/SetorDAO.php';

class SetorCTRL
{
    public function InserirSetorCtrl(SetorVO $vo)
    {
        if ($vo->getNomeSetor() == '') {
            return 0;
        }
    }
}
