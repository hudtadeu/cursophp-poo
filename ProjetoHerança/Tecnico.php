<?php
require_once 'Aluno.php';
class Tecnico extends Aluno
{
  private $registroProfessional;

  public function praticar()
  {

  }
  function getRegistroProfessional()
  {
    return $this->registroProfessional;
  }
  function setRegistroProfessional($registroProfessional)
  {
    $this->registroProfessional = $registroProfessional;
  }
}
