var objXML=false;
function object(){
	try{
		objXML = new ActiveXObject('Msxm12.XMLHTTP');
	}catch(e1){
		try{
			objXML = new ActiveXObject('Microsoft.XMLHTTP');
		}catch(e2){
			objXML = false;
		}
	}
	if(window.XMLHttpRequest){
		objXML = new XMLHttpRequest();}
	if(!objXML && typeof XMLHttpRequest != 'undefined'){
		objXML = new XMLHttpRequest();}
	return objXML;
}
function page(id,subf,fol,inicio){
	var objXML = object();
	var url="";
        var idDiv= "";
        var valorAEnviar="";
        switch(id){
            case "usuario":
                url = "usuarios/";
                idDiv= "contenedor";
                valorAEnviar= "null";
                subf = 'usuario';
            break;
            }        
        if(objXML){
            objXML.open('POST',url);
            objXML.onreadystatechange = 
            function(){
                if(objXML.readyState == 4){
                    var respuesta = objXML.responseText;
                    document.getElementById(idDiv).innerHTML=respuesta;
                }else if(objXML.readyState < 4){
                    document.getElementById(idDiv).innerHTML="Cargando...";
                }
            }
            objXML.setRequestHeader("Content-Type","application/x-www-form-urlencoded");
            objXML.send(valorAEnviar);
	}
}

function ConsultaDatos(){
    $.ajax({
	url: 'consulta.php',
	cache: false,
	type: "GET",
	success: function(datos){
            $("#tabla").html(datos);
        }
    });
}