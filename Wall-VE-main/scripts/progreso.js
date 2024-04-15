const progress = document.querySelector(".progress-done");
const texto = document.querySelector("#porcentaje");

let finalValue = 0;
let max = 100;
let intervalId = null; // Esto es para quitar el intervalo

function changeWidth() {
  // Clamp finalValue to the range between 0 and max
  finalValue = Math.max(0, Math.min(finalValue, max)); //Revisa si está dentro de los limites

  progress.style.width = `${(finalValue / max) * 100}%`;
  texto.innerText  = `${Math.ceil((finalValue / max) * 100)}%`;
  //progress.innerText = `${Math.ceil((finalValue / max) * 100)}%`;
}

function sumarUno() {
  if (finalValue < max) { // Revisa si es menor al maximo para evitar overflow
    const numeroAleatorio = Math.floor(Math.random() * 10); 
    finalValue += numeroAleatorio;
    changeWidth();
    console.log(finalValue);
    
  } else { //Si llegó al máximo
    clearInterval(intervalId); // Lo detiene el intervalo

    //!AQUI DEBE DE MANDAR A LA BASE DE DATOS

  }
}


function cancelar(){
    clearInterval(intervalId);
    alert("Se ha detenido la carga del vehículo.");
}

changeWidth();
intervalId = setInterval(sumarUno, 1000);