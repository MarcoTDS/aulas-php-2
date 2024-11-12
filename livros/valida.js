function validaForm(){
    var titulo = document.querySelector("#titulo").value;
    var genero = document.querySelector("#genero").value;
    var pgs = document.querySelector("#pgs").value;
    var autor = document.querySelector("#autor").value;

    var divMsg = document.querySelector("#divMsg");

    if(titulo != "" && genero != "" && pgs != null && autor != ""){
        return true;
    }
    //alert(titulo+", "+genero+", "+pgs+", "+autor);
    else{
        divMsg.innerHTML = "Informe todos os dados corretamente!!!";
        return false;
    }
}