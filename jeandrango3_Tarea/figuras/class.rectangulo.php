<?php
//class rectangulo extends figura implements formulas{
class Rectangulo extends FiguraGeometrica
	{
	    public function __construct($lado1 = null, $lado2 = null)
	    {
	        parent::__construct($lado1, $lado2);
	    }

	    public function calcularPerimetro()
	    {
	        return ($this->getLado1() + $this->getLado2()) * 2;
	    }

	    public function calcularArea()
	    {
	        return $this->getLado1() * $this->getLado2();
	    }
	}
//}
?>
