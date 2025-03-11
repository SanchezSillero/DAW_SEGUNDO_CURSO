let array = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10];

//iterar con while
let i = 0;
while (i < array.length) {
  console.log(array[i]);
  i++;
}

//iterar con for
for (let i = 0; i < array.length; i++) {
  console.log(array[i]);
}

//utilizando .foreach
array.forEach((item) => console.log(item));

//sumandole 1 a cada elemento
array.forEach((item) => console.log(item + 1)); //solo muestra en consola el resultado

let incrementedArray = array.map((item) => item + 1); // almacena un nuevo array con la modificacion
console.log(incrementedArray);

//calcular la media de todos los elemantos del array
let suma = array.reduce((acc, item) => acc + item, 0);
let media = suma / array.length;
console.log(media);
