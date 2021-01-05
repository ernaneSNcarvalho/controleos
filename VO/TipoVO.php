<?php

class TipoVO
{
    private $idTipo;
    private $nomeTipo;

    public function setIdTipo($idTipo)
    {
        $this->idTipo = $idTipo;
    }

    public function getTipo()
    {
        return $this->idTipo;
    }

    public function setNomeTipo($nomeTipo)
    {
        $this->nomeTipo = trim($nomeTipo);
    }

    public function getNomeTipo()
    {
        return $this->nomeTipo;
    }
}
