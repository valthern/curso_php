const regex = /Java\s(?!8|9)/
const text = "Java "


if (regex.test(text)) {
  console.log("Es correcto");
} else {
  console.error("Es Incorrecto");
}


//const regex = /<beer>.*?<\/beer>/g
//const text = "<beer>corona</beer><beer>heineken</beer>"
//console.log(text.match(regex))

// const regex = /(Vino|Cerveza)(=?\s\w+)/g
// const text = "Vino tinto Vino blanco Vino feo Cerveza IPA"
// console.log(text.match(regex))
