function habilitarCampos() {
			var figura = document.getElementById("figura").value;
			var lado1 = document.getElementById("lado1");
			var lado2 = document.getElementById("lado2");
			var lado3 = document.getElementById("lado3");

			if (figura == "cuadrado") {
				lado1.disabled = false;
				lado2.disabled = true;
				lado3.disabled = true;
			} else if (figura == "rectangulo") {
				lado1.disabled = false;
				lado2.disabled = false;
				lado3.disabled = true;
			} else if (figura == "triangulo") {
				lado1.disabled = false;
				lado2.disabled = false;
				lado3.disabled = false;
			}
		}// JavaScript Document