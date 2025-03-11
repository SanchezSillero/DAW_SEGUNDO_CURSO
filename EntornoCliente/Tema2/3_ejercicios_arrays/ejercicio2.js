//crear un array vacio
const numerosRandom = [];

//generar 20 numeros aleatorios y agregarlos al array
for (let i = 0; i < 20; i++) {
  let numero = Math.floor(Math.random() * 101);
  numerosRandom.push(numero);
}
//mostrar numeros por consola
console.log(numerosRandom);

//muestra por consola los pares
numerosRandom.forEach((item) => {
  if (item % 2 === 0) {
    console.log(item);
  }
});

//muestra el numero mas grande
let maxNumero = numerosRandom[0];
numerosRandom.forEach((item) => {
  if (item > maxNumero) {
    maxNumero = item;
  }
});
console.log(maxNumero);

const numeroMax = Math.max(...numerosRandom);
console.log(numeroMax);

//muestra el numero mas pequenio
const numeroMin = Math.min(...numerosRandom);
console.log(numeroMin);

minNumero = numerosRandom[0];
numerosRandom.forEach((item) => {
  if (item < minNumero) {
    minNumero = item;
  }
});
console.log(minNumero);

//muestra la media
let sumatorio = 0;
numerosRandom.forEach((item) => {
  sumatorio += item;
});
let media = sumatorio / numerosRandom.length;
console.log(media);

sumatorio = numerosRandom.reduce((acc, item) => acc + item, 0);
media = sumatorio / numerosRandom.length;
console.log(media);
