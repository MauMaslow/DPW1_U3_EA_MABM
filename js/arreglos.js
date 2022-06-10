/*
// arreglo []
let nombres = ["Mau", " Alex", " Gloria"];
alert (nombres)
alert (nombres[0])
alert (nombres[2])

let ingnombres = [];
ingnombres[0] = "Albeto";
ingnombres[1] = "Pablo";
ingnombres[2] = "Beto";


//si se desea agregar un valor pero no se conoce el indice, puede agregarse de esta forma

ingnombres.push("María");
ingnombres.push("José");
ingnombres.push("Enrique");

alert (ingnombres)
alert (ingnombres[0])

//Se puede agregar un ciclo para ver los nombres uno a la vez

//.length hace referencia al tope del arreglo
for(i=0; i<ingnombres.length ;i++){
    let nombre = ingnombres[i];
    alert (nombre);
}

//versión corta
for(let nombre of ingnombres){
    alert (nombre);
}
*/

//listado 
window.onload = iniciar;

function iniciar(){
    let btnAgregar = document.getElementById("btnAgregar");    
    btnAgregar.addEventListener("click", clickbtnAgregar)
}

let tareas = [];

function clickbtnAgregar(){
   
    let txtTarea = document.getElementById("txtTarea");
    let tarea = txtTarea.value;
    tareas.push(tarea);
    //alert(tareas) muestra las tareas en pantalla una a una
    mostarTareas();
}


function mostarTareas(){
    let listado = document.getElementById("listado");
    let html = "";
for(let tarea of tareas){
html += tarea + "<br/>";
}
    listado.innerHTML = html;
}
