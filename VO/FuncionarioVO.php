<?php

require_once 'UsuarioVO.php';

class FuncionarioVO extends UsuarioVO
{
    private $emailFun;
    private $telFun;
    private $enderecoFun;
    private $idSetor;

    public function setEmailFun($emailFun)
    {
        $this->emailFun = trim($emailFun);
    }

    public function getEmailFun()
    {
        return $this->emailFun;
    }

    public function setTelFun($telFun)
    {
        $this->telFun = trim($telFun);
    }

    public function getTelFun()
    {
        return $this->telFun;
    }

    public function setEnderecoFun($enderecoFun)
    {
        $this->enderecoFun = trim($enderecoFun);
    }

    public function getEnderecoFun()
    {
        return $this->enderecoFun;
    }

    public function setIdSetor($idSetor)
    {
        $this->idSetor =  $idSetor;
    }

    public function getIdSetor()
    {
        return $this->idSetor;
    }
}
