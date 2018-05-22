function genera_tabla(valor, val1, val2, val3) {
    
    // Obtener la referencia del elemento body
    var bodyx = document.getElementById("ultimo");

    // Crea un elemento <table> y un elemento <tbody>
    var tabla = document.getElementById("tabla1");
    var tblBody = document.getElementById("tbodyxd");
    
    if (valor === "" || val1 === "" || val2 === "" || val3 === "") {
    return false;
    }else{
        // Crea las celdas
        for (var i = 0; i < 1; i++) {
            // Crea las hileras de la tabla
            var hilera = document.createElement("tr");
            hilera.setAttribute("id",(i+1));            


            for (var j = 0; j <= 4; j++) {
                // Crea un elemento <td> y un nodo de texto, haz que el nodo de
                // texto sea el contenido de <td>, ubica el elemento <td> al final
                // de la hilera de la tabla
                var celda = document.createElement("td");
                
                switch (j){
                    case 0:
                        var textoCelda = document.createTextNode(valor);
                        break;                    
                    case 1:
                        var textoCelda = document.createTextNode(val1);
                        break;
                    case 2:
                        var textoCelda = document.createTextNode(val2);
                        break; 
                    case 3:
                        var textoCelda = document.createTextNode(val3);                        
                        break;
                    case 4:
                        celda.setAttribute("id","rest");
                        var total = document.getElementById("total");                        
                        var sumaOtro = (val2)*(val3);
                        var textoCelda= document.createTextNode(sumaOtro);
                        total.innerHTML =parseFloat(total.innerHTML)+sumaOtro;
                        break; 
                    };
                celda.appendChild(textoCelda);
                hilera.appendChild(celda);
            };

            var celda = document.createElement("td");
            var btnCelda = document.createElement("input");
            btnCelda.setAttribute("type","button");
            btnCelda.setAttribute("value","Quitar");
            btnCelda.setAttribute("id","botonBorra");
            btnCelda.setAttribute("class","btn btn-danger");
            btnCelda.setAttribute("onclick","quitarElemento("+(i+1)+")");
            celda.appendChild(btnCelda);
            hilera.appendChild(celda);

            // agrega la hilera al final de la tabla (al final del elemento tblbody)
            tblBody.appendChild(hilera);
        };

        // posiciona el <tbody> debajo del elemento <table>
        tabla.appendChild(tblBody);
        // appends <table> into <body>
        bodyx.appendChild(tabla);
        // modifica el atributo "border" de la tabla y lo fija a "2";
        tabla.setAttribute("border", "0");
    };
};



function quitarElemento(idFila) {
var elemento = document.getElementById(idFila);
elemento.parentNode.removeChild(elemento);                        
};



var obj=null;
function viewHide(id)
{
var targetId, srcElement, targetElement;
var targetElement = document.getElementById(id);
if (obj!== null) 
obj.style.display='none';
obj=targetElement;
targetElement.style.display = "";
};