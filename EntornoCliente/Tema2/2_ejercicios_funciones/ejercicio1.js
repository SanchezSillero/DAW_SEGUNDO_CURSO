let num1 = prompt("Introduce el valor del primer numero");
let num2 = prompt("Introduce el valor del segundo numero");

num1 = parseInt(num1);
num2 = parseInt(num2);

function sumar(a, b) {
  return a + b;
}

function restar(a, b) {
  return a - b;
}

function multiplicar(a, b) {
  return a * b;
}

function dividir(a, b) {
  return b !== 0 ? a / b : "No se puede dividir por 0";
}

alert(`Resultados:
    Suma: ${sumar(num1, num2)}
    Resta: ${restar(num1, num2)}
    Multiplicacion: ${multiplicar(num1, num2)}
    Division: ${dividir(num1, num2)}`);
