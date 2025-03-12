const baraja = [];
const palos = ["C", "T", "P", "R"];

const valores = [
  "1",
  "2",
  "3",
  "4",
  "5",
  "6",
  "7",
  "8",
  "9",
  "10",
  "11",
  "12",
  "13",
];
const cartas = [
  "A",
  "2",
  "3",
  "4",
  "5",
  "6",
  "7",
  "8",
  "9",
  "10",
  "J",
  "Q",
  "K",
];

for (const palo of palos) {
  for (const carta of cartas) {
    baraja.push(carta + palo);
  }
}
console.log(baraja);

//Desordenamos la baraja usando .shuffle() de underscore
const barajaDesordenada = _.shuffle(baraja);

console.log(barajaDesordenada);
