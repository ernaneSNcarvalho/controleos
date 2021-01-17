<?php

require_once $_SERVER['DOCUMENT_ROOT'] . '/ControleOs/DAO/EquipamentoDAO.php';

class EquipamentoCTRL
{
    public function InserirEquipamentoCtrl(EquipamentoVO $vo)
    {
        if (
            $vo->getIdEquipamento() == '' ||
            $vo->getIdModelo() == '' ||
            $vo->getIdentEquipamento() == '' ||
            $vo->getDescEquipamento() == ''
        ) {

            return 0;
        }
    }
}
