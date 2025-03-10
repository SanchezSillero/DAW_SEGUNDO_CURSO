//Solicitamos los datos al usuario y los convertimos en numeros
let costoCasa = parseFloat(prompt("Introduzca el precio de la casa"));
let prestamoBanco = parseFloat(
  prompt("Introduzca la cantidad prestada por el banco")
);
let years = parseInt(prompt("Introduzca en cuantos anos va a pagar la casa"));
let intereses = parseFloat(prompt("Introduzca el valor de los intereses"));

function calcularPrestamoMasIntereses() {
  return prestamoBanco + (prestamoBanco * intereses) / 100;
}

function calcularCuotaMensual() {
  return calcularPrestamoMasIntereses() / (years * 12);
}

function mostrarTablaAmortizacion() {
  let cuotaMensual = calcularCuotaMensual();
  let saldoRestante = prestamoBanco;
  let totalConIntereses = calcularPrestamoMasIntereses();

  console.log(
    `Vas a pagar una cantidad de ${totalConIntereses.toFixed(
      2
    )}$ con intereses incluidos en ${
      years * 12
    } mensualidades con un importe mensual de ${cuotaMensual.toFixed(2)}$`
  );

  for (let mes = 1; mes <= years * 12; mes++) {
    saldoRestante -= cuotaMensual;
    if (saldoRestante < 0) saldoRestante = 0;
    console.log(
      `Pago correspondiente al mes ${mes} con una cantidad de ${saldoRestante.toFixed(
        2
      )}$`
    );
  }
}
mostrarTablaAmortizacion();
