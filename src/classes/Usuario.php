<?php

namespace Projeto\Unit96\classes;

class Usuario {
    public $username;
    public $password;
    public $funcao;

    public function __construct($username, $password, $funcao) {
        $this->username = $username;
        $this->password = $password;
        $this->funcao = $funcao;
    }
}
?>