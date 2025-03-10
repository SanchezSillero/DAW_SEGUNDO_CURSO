while (true) {
  let frase = prompt("Introduce una frase");
  let letras = frase.replace(/\s/g, "");

  if (letras.length < 10) {
    alert(
      "La frase debe tener al menos 10 letras. Por favor, intentelo de nuevo."
    );
  } else {
    let numeroLetras = letras.length;
    let palabras = frase.trim().split(/\s+/); // trim elimina espacios al principio o final del String si los hubiera, split divide el split por el parametro, en este caso \s es espacio o salto de linea y el + hace que el parametro sea uno o mas, evitando que corte dos veces si hay dos espacios seguidos
    let numeroPalabras = palabras.length;
    let numeroFrases = (frase.match(/[.?!]+/g) || []).length;

    alert(
      `El dato introducido contiene:
        ${numeroLetras} letras
        ${numeroPalabras} palabras
        ${numeroFrases} frases`
    );
    break;
  }
}
