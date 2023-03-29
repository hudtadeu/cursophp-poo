<?php
require_once 'Pessoa.php';
class Aluno extends Pessoa
{
  private $matricula;
  private $curso;

  public function pagarMensalidade()
  {
    echo "<p>Pagando mensalidade do aluno $this->nome</p>";
  }
  function getMatricula() {
    return $this->matricula;
  }
  function setMatricula($matricula) {
    return $this->matricula = $matricula;
  }
  function getCurso() {
    return $this->curso;
  }
  function setCurso($curso) {
    return $this->curso = $curso;
  }
}
