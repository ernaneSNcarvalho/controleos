<?php

require_once 'UsuarioVO.php';

class TecnicoVO extends UsuarioVO
{
    private $email_tec;
    private $tel_tec;
    private $endereco_tec;

    public function setEmailTec($email_tec)
    {
        $this->email_tec = trim($email_tec);
    }

    public function getEmailTec()
    {
        return $this->email_tec;
    }

    public function setTelTec($tel_tec)
    {
        $this->tel_tec = trim($tel_tec);
    }

    public function getTelTec()
    {
        return $this->tel_tec;
    }

    public function setEnderecoTec($endereco_tec)
    {
        $this->endereco_tec = trim($endereco_tec);
    }

    public function getEnderecoTec()
    {
        return $this->endereco_tec;
    }
}
