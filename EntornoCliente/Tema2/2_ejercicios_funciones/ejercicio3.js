let num1 = prompt("Introduce el valor del primer número:");
let num2 = prompt("Introduce el valor del segundo número:");

// Convertir los valores a enteros
num1 = parseInt(num1);
num2 = parseInt(num2);

// Validar que los valores sean números válidos
if (isNaN(num1) || isNaN(num2)) {
  alert("Por favor, ingresa números válidos.");
} else {
  // Función para verificar que solo se pasen 2 parámetros
  function verificarParametros(a, b) {
    if (arguments.length !== 2) {
      throw new Error("Debe haber exactamente dos parámetros.");
    }
  }

  // Función para sumar
  function sumar(a, b) {
    verificarParametros(a, b);
    return a + b;
  }

  // Función para restar
  function restar(a, b) {
    verificarParametros(a, b);
    return a - b;
  }

  // Función para multiplicar
  function multiplicar(a, b) {
    verificarParametros(a, b);
    return a * b;
  }

  // Función para dividir
  function dividir(a, b) {
    verificarParametros(a, b);
    return b !== 0 ? a / b : "No se puede dividir por 0";
  }

  // Intentar realizar las operaciones y mostrar el resultado
  try {
    alert(`Resultados:
      Suma: ${sumar(num1, num2)}
      Resta: ${restar(num1, num2)}
      Multiplicación: ${multiplicar(num1, num2)}
      División: ${dividir(num1, num2)}`);
  } catch (error) {
    alert("Error: " + error.message);
  }
}
