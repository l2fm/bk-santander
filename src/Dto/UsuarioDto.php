<?php

namespace App\Dto;

class UsuarioDto
{
    private string $nome;
    private string $email;
    private string $telefone;

    public function getNome()
    {
        return $this->nome;
    }

    public function setNome($nome)
    {
        $this->nome=$nome;
        return $this;
    }

    public function getEmail()
    {
    $this->email=$email;
    return $this;
}
public function setEmail($email)
    {
        $this->email=$email;
        return $this;
    }
    public function getTelefone()
    {
    $this->telefone=$telefone;
    return $this;
}
public function setTelefone($telefone)
    {
    $this->telefone=$telefone;
    return $this;
}
}