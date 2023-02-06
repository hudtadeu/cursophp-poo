<?php
class Caneta
{
  private $modelo;
  private $ponta;
  private $cor;
  private $tampada;

  function __construct($modelo, $cor, $ponta)
  {

    $this->modelo = $modelo;
    $this->cor = $cor;
    $this->ponta = $ponta;
  }
  function getModelo()
  {
    return $this->modelo;
  }
  function getCor()
  {
    return $this->cor;
  }
  function getPonta()
  {
    return $this->ponta;
  }
  function getTampada()
  {
    return $this->tampada;
  }
  function setModelo($modelo)
  {
    return $this->modelo = $modelo;
  }
  function setCor($cor)
  {
    return $this->cor = $cor;
  }
  function setPonta($ponta)
  {
    return $this->ponta = $ponta;
  }
}
