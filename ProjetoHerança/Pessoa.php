<?php
abstract class Pessoa
{
  protected $nome;
  protected $idade;
  protected $sexo;
  
  public final function fazerAniversario()
  {
    $this->idade++;
  }
  function getNome() {
    return $this->nome;
  }
  function setNome($nome) {
    $this->nome = $nome;
  }
  function getIdade() {
    return $this->idade;
  }
  function setIdade($idade) {
    $this->idade = $idade;
  }
  function getSexo() {
    return $this->sexo;
  }
  function setSexo($sexo) {
    $this->sexo = $sexo;
  }
}
