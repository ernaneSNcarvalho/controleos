<?php

class EquipamentoVO
{
    private $idEquipamento;
    private $identEquipamento;
    private $descEquipamento;
    private $idModelo;
    private $idTipo;
    private $idUsuario;

    public function setIdEquipamento($idEquipamento)
    {
        $this->idEquipamento = $idEquipamento;
    }

    public function getIdEquipamento()
    {
        return $this->idEquipamento;
    }

    public function setIdentEquipamento($identEquipamento)
    {
        $this->identEquipamento = $identEquipamento;
    }

    public function getIdentEquipamento()
    {
        return $this->identEquipamento;
    }

    public function setDescEquipamento($descEquipamento)
    {
        $this->descEquipamento = trim($descEquipamento);
    }

    public function getDescEquipamento()
    {
        return $this->descEquipamento;
    }

    public function setIdModelo($idModelo)
    {
        $this->idModelo = $idModelo;
    }

    public function getIdModelo()
    {
        return $this->idModelo;
    }

    public function setIdTipo($idTipo)
    {
        $this->idTipo = $idTipo;
    }

    public function getTipo()
    {
        return $this->idTipo;
    }

    public function setIdUsuario($idUsuario)
    {
        $this->idUsuario = $idUsuario;
    }

    public function getIdUsuario()
    {
        return $this->idUsuario;
    }
}
