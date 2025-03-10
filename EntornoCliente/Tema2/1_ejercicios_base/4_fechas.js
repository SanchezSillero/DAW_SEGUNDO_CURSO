while (true) {
  let day = prompt("Introduzca que dia del mes nacio por favor");
  let month = prompt("Introduzca en que mes nacio (1-12)") - 1; // Restamos 1 porque los meses empiezan a contar en 0
  let year = prompt("Introduzca su ano de nacimiento");

  day = parseInt(day);
  month = parseInt(month);
  year = parseInt(year);

  let birthday = new Date(year, month, day);

  //Comprobamos que la el dia y el mes de la fecha generada coinciden con las fechas introducidas, esto asegura que la fecha introducida es valida
  if (!(birthday.getDate() === day && birthday.getMonth() === month)) {
    alert("Alguna de las fechas no es valida, por favor intentelo de nuevo");
  } else {
    let today = new Date(); // generamos una variable con la fecha actual
    let diferenciaTiempo = today.getTime() - birthday.getTime(); // pasamos las fechas a milisegundos y las restamos
    let tiempoDias = diferenciaTiempo / (1000 * 60 * 60 * 24); // convertimos los milisegundos en dias
    let tiempoDiasEnteros = Math.floor(tiempoDias); // truncamos los decimales para obtener el numero entero de dias completos
    alert(
      "Han pasado " + tiempoDiasEnteros + " dias desde que naciste hasta hoy"
    );

    break;
  }
}
