<?php
//class triangulo extends figura implements formulas{
class Triangulo extends FiguraGeometrica
	{
	    public function __construct($lado1 = null, $lado2 = null, $lado3 = null)
	    {
	        parent::__construct($lado1, $lado2, $lado3);
	    }

	    public function calcularPerimetro()
	    {
	        return $this->getLado1() + $this->getLado2() + $this->getLado3();
	    }

	    public function calcularArea()
	    {
	        $semiperimetro = $this->calcularPerimetro() / 2;
	        return sqrt($semiperimetro * ($semiperimetro - $this->getLado1()) * ($semiperimetro - $this->getLado2()) * ($semiperimetro - $this->getLado3()));
	    }
	}	
//}
?>

