const regex = /^pato1?$/;
const text = "pato1";

if (regex.test(text)) {
  console.log("Es correcto");
} else {
  console.error("Es Incorrecto");
}
