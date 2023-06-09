<?php

class Tijera {
    private $nombreJugador;

    public function __construct($nombreJugador) {
        $this->nombreJugador = $nombreJugador;
    }

    public function competirContra($otro) {
        return $otro->teCompiteTijera($this);
    }

    public function teCompiteTijera($otro) {
        return new Empate();
    }

    public function teCompitePiedra($otro) {
        return $otro;
    }

    public function teCompitePapel($otro) {
        return $this;
    }

    public function ganador() {
        return $this->nombreJugador;
    }
}



