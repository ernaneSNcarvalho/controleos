<?php


class UsuarioCTRL
{
    public function InserirUserAdm(UsuarioVO $vo)
    {
        if ($vo->getTipo() == '' || $vo->getNome() == '' || $vo->getCpf() == '') {
            return 0;
        }
    }

    public function InserirUserTec(TecnicoVO $vo)
    {
        if (
            $vo->getTipo() == ''    ||
            $vo->getNome() == ''    ||
            $vo->getCpf() == ''     ||
            $vo->getTelTec() == ''  ||
            $vo->getEmailTec() == '' ||
            $vo->getEnderecoTec() == ''
        ) {
            return 0;
        }
    }

    public function InserirUserFunc(FuncionarioVO $vo)
    {
        if (
            $vo->getTipo() == '' || $vo->getNome() == '' || $vo->getCpf() == '' || $vo->getTelFun() == ''
            || $vo->getEmailFun() == '' || $vo->getEnderecoFun() == ''
        ) {
            return 0;
        }
    }
}
