<?php


class SetorVO
{
    private $idSetor;
    private $nomeSetor;

    public function setIdSetor($idSetor)
    {
        $this->idSetor = $idSetor;
    }

    public function getIdSetor()
    {
        return $this->idSetor;
    }

    public function setNomeSetor($nomeSetor)
    {
        $this->nomeSetor = trim($nomeSetor);
    }

    public function getNomeSetor()
    {
        return $this->nomeSetor;
    }
}
