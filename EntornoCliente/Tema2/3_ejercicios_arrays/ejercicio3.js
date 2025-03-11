const ages = [19, 22, 19, 24, 20, 25, 26, 24, 25, 24];

//Ordena el array y obten el valor máximo y mínimo
ages.sort((a, b) => a - b);
console.log(ages);
const minAge = ages[0];
console.log(minAge);
const maxAge = ages[ages.length - 1];
console.log(maxAge);

//Obtén la media de edad
let sumatorio = ages.reduce((acc, item) => acc + item, 0);
const media = sumatorio / ages.length;
console.log(media);
