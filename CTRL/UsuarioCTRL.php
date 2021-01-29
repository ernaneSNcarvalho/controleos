<?php

<<<<<<< HEAD
require_once $_SERVER['DOCUMENT_ROOT'] . '/ControleOs/DAO/UsuarioDAO.php';
require_once $_SERVER['DOCUMENT_ROOT'] . '/ControleOs/DAO/TecnicoDAO.php';
require_once $_SERVER['DOCUMENT_ROOT'] . '/ControleOs/DAO/FuncionarioDAO.php';
=======
>>>>>>> 723c827e20876d51f2c28bb6933d87735b7b00ed

class UsuarioCTRL
{
    public function InserirUserAdm(UsuarioVO $vo)
    {
<<<<<<< HEAD
        if (
            $vo->getTipo() == '' ||
            $vo->getNome() == '' ||
            $vo->getCpf() == ''
        ) {
=======
        if ($vo->getTipo() == '' || $vo->getNome() == '' || $vo->getCpf() == '') {
>>>>>>> 723c827e20876d51f2c28bb6933d87735b7b00ed
            return 0;
        }
    }

    public function InserirUserTec(TecnicoVO $vo)
    {
        if (
<<<<<<< HEAD
            $vo->getTipo() == '' ||
            $vo->getNome() == '' ||
            $vo->getCpf() == ''  ||
            $vo->getEnderecoTec() == '' ||
            $vo->getTelTec() == '' ||
            $vo->getEmailTec() == ''
=======
            $vo->getTipo() == '' || $vo->getNome() == '' || $vo->getCpf() == '' || $vo->getTelTec() == ''
            || $vo->getEmailTec() == '' || $vo->getEnderecoTec() == ''
>>>>>>> 723c827e20876d51f2c28bb6933d87735b7b00ed
        ) {
            return 0;
        }
    }

<<<<<<< HEAD
    public function InserirUserFun(FuncionarioVO $vo)
    {
        if (
            $vo->getTipo() == '' ||
            $vo->getNome() == '' ||
            $vo->getCpf() == ''  ||
            $vo->getEnderecoFun() == '' ||
            $vo->getTelFun() == '' ||
            $vo->getEmailFun() == ''
=======
    public function InserirUserFunc(FuncionarioVO $vo)
    {
        if (
            $vo->getTipo() == '' || $vo->getNome() == '' || $vo->getCpf() == '' || $vo->getTelFun() == ''
            || $vo->getEmailFun() == '' || $vo->getEnderecoFun() == ''
>>>>>>> 723c827e20876d51f2c28bb6933d87735b7b00ed
        ) {
            return 0;
        }
    }
}
