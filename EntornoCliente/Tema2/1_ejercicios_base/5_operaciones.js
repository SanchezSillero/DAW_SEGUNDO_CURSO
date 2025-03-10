while (true) {
  let number1 = prompt("Introduce un primer numero mayor que 0");
  let number2 = prompt("Introduce un segundo numero mayor que 0");

  if (isNaN(number1) || isNaN(number2) || number1 < 0 || number2 < 0) {
    alert("Error: Por favor, introduce solo numeros positivos");
    break;
  }

  number1 = parseFloat(number1);
  number2 = parseFloat(number2);

  let suma = number1 + number2;
  let resta = number1 - number2;
  let multiplicacion = number1 * number2;
  let division = number1 / number2;

  alert(`Las operaciones para los numeros ${number1} y ${number2} son:
    Suma: ${suma}
    Resta: ${resta}
    Multiplicacion: ${multiplicacion}
    Division: ${division}`);

  //Si alguna de las operaciones da como resultado un numero negativo, salimos del programa

  if (suma < 0 || resta < 0 || multiplicacion < 0 || division < 0) {
    alert(
      "Se ha detectado un resultado negativo en una de las operaciones. El programa se detendra"
    );
    break;
  }

  //Pedimos confirmacion al usuario para continuar o salir del bucle
  let continuar = confirm("Quieres realizar mas operaciones?");
  if (!continuar) {
    break;
  }
}
