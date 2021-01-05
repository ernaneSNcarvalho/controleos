<?php

class ChamadoVO
{
    private $idChamado;
    private $descProblema;
    private $dataChamado;
    private $horaChamado;
    private $dataAtendimento;
    private $horaAtendimento;
    private $dataEncerramento;
    private $horaEncerramento;
    private $laudoChamado;
    private $idUsuarioFun;
    private $idUsuarioTec;
    private $idEquipamento;

    public function setIdChamado($idChamado)
    {
        $this->idChamado = $idChamado;
    }

    public function getIdChamado()
    {
        return $this->idChamado;
    }

    public function setDescProblema($descProblema)
    {
        $this->descProblema = $descProblema;
    }

    public function getDescProblema()
    {
        return $this->descProblema;
    }

    public function setDataChamado($dataChamado)
    {
        $this->dataChamado = $dataChamado;
    }

    public function getDataChamado()
    {
        return $this->dataChamado;
    }

    public function setHoraChamado($horaChamado)
    {
        $this->horaChamado = $horaChamado;
    }

    public function getHoraChamado()
    {
        return $this->horaChamado;
    }

    public function setDataAtendimento($dataAtendimento)
    {
        $this->dataAtendimento = $dataAtendimento;
    }

    public function getDataAtendimento()
    {
        return $this->dataAtendimento;
    }

    public function setHoraAtendimento($horaAtendimento)
    {
        $this->horaAtendimento = $horaAtendimento;
    }

    public function getHoraAtendimento()
    {
        return $this->horaAtendimento;
    }

    public function setDataEncerramento($dataEncerramento)
    {
        $this->dataEncerramento = $dataEncerramento;
    }

    public function getDataEncerramento()
    {
        return $this->dataEncerramento;
    }

    public function setHoraEncerramento($horaEncerramento)
    {
        $this->horaEncerramento = $horaEncerramento;
    }

    public function getHoraEncerramento()
    {
        return $this->horaEncerramento;
    }

    public function setLaudoChamado($laudoChamado)
    {
        $this->laudoChamado = $laudoChamado;
    }

    public function getLaudoChamado()
    {
        return $this->laudoChamado;
    }

    public function setIdUsuarioFun($idUsuarioFun)
    {
        $this->idUsuarioFun = $idUsuarioFun;
    }

    public function getIdUsuarioFun()
    {
        return $this->idUsuarioFun;
    }

    public function setIdUsuarioTec($idUsuarioTec)
    {
        $this->idUsuarioTec = $idUsuarioTec;
    }

    public function getIdUsuarioTec()
    {
        return $this->idUsuarioTec;
    }

    public function setIdEquipamento($idEquipamento)
    {
        $this->idEquipamento = $idEquipamento;
    }

    public function getIdEquipamento()
    {
        return $this->idEquipamento;
    }
}
