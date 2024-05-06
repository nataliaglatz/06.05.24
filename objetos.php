<?php
class Comidas {
    public $doce_salgado;
    public $gosto;

    function __construct($doce_salgado, $gosto) {
        $this->doce_salgado = $doce_salgado;
        $this->gosto = $gosto;
    }

    function getDoceSalgado() {
        return $this->doce_salgado;
    }

    function getGosto() {
        return $this->gosto;
    }
}

$macarrao = new Comidas("salgado", "bom");

echo "O nome da comida é: " . $macarrao->getDoceSalgado();
echo "<br/>";
echo "O gosto é: " . $macarrao->getGosto();
?>
