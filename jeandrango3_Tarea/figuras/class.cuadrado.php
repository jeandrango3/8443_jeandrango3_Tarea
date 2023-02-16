<?php
//class cuadrado extends figura implements formulas {
class Cuadrado extends FiguraGeometrica
	{
	    public function __construct($lado1 = null)
	    {
	        parent::__construct($lado1);
	    }

	    public function calcularPerimetro()
	    {
	        return $this->getLado1() * 4;
	    }

	    public function calcularArea()
	    {
	        return $this->getLado1() * $this->getLado1();
	    }
	}

?>
