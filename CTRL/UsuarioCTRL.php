<?php

require_once $_SERVER['DOCUMENT_ROOT'] . '/ControleOs/DAO/UsuarioDAO.php';
require_once $_SERVER['DOCUMENT_ROOT'] . '/ControleOs/DAO/TecnicoDAO.php';
require_once $_SERVER['DOCUMENT_ROOT'] . '/ControleOs/DAO/FuncionarioDAO.php';

class UsuarioCTRL
{
    public function InserirUserAdm(UsuarioVO $vo)
    {
        if (
            $vo->getTipo() == '' ||
            $vo->getNome() == '' ||
            $vo->getCpf() == ''
        ) {
            return 0;
        }
    }

    public function InserirUserTec(TecnicoVO $vo)
    {
        if (
            $vo->getTipo() == '' ||
            $vo->getNome() == '' ||
            $vo->getCpf() == ''  ||
            $vo->getEnderecoTec() == '' ||
            $vo->getTelTec() == '' ||
            $vo->getEmailTec() == ''
        ) {
            return 0;
        }
    }

    public function InserirUserFun(FuncionarioVO $vo)
    {
        if (
            $vo->getTipo() == '' ||
            $vo->getNome() == '' ||
            $vo->getCpf() == ''  ||
            $vo->getEnderecoFun() == '' ||
            $vo->getTelFun() == '' ||
            $vo->getEmailFun() == ''
        ) {
            return 0;
        }
    }
}
