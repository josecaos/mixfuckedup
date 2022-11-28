/* 
 * Archivo text to speech para mixfuckedup.net
 * Interactua con mixfuckedup.js
 * Usa speak.js mas info aqui -> https://github.com/mattytemple/speak-js 
*/
var rapidez =  new Array("50","75","100","125","150","175","200");
var tono =  new Array("1","10","30","60","100","150","200");
//velocidad voz
function randomVel() {
    var vel = rapidez[Math.floor(Math.random() * 7)];//* por el numero de elementos del array
    return vel;
}
//tono voz
function randomTone() {
    var ton = rapidez[Math.floor(Math.random() * 7)];
    return ton;
}
//habla
function hablaProyecto(proyecto) {
    speak(proyecto, {pitch:randomTone(),speed:randomVel()});
}

  //
  function hablaWidget(texto) {
    document.getElementById('tituloprincipal').innerHTML = texto;
    document.getElementById('tituloheader').style.textalign = 'center';
    speak(texto, {pitch:randomTone(),speed:randomVel()});
  }  