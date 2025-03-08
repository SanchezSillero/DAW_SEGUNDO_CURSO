function pedirNumero() {
  let numFilas;

  //Bucle para pedir el numero hasta que sea valido
  while (true) {
    //pedimos el numero por consola
    numFilas = prompt("Cuantas filas quieres que aparezca?");

    //convertimos el imput a un numero entero
    numFilas = parseInt(numFilas);

    //verificamos si el numero es valido y mayor que 0
    if (!isNaN(numFilas) && numFilas > 0) {
      break;
    } else {
      // si no es valido, muestra mensaje de error
      console.log("Por favor, introduzca un numero valido mayor que 0");
      //alert("Por favor introduzca un numero valido mayor que 0");
    }
  }
  return numFilas;
}

//llamamos a la funcion para pedir el numero de filas
let filas = pedirNumero();

//representamos la figura mediante un bucle
if (filas) {
  for (let i = 1; i <= filas; i++) {
    console.log("+".repeat(i));
  }
}
