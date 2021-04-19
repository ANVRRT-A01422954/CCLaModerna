function AjaxFunction(listado,inputFieldGet,inputFieldPrint)
{
    
    var httpxml;
    try
    {
        // Firefox, Opera 8.0+, Safari
        httpxml=new XMLHttpRequest();
    }
    catch (e)
    {
    // Internet Explorer
        try
        {
            httpxml=new ActiveXObject("Msxml2.XMLHTTP");
        }
        catch (e)
        {
            try
            {
                httpxml=new ActiveXObject("Microsoft.XMLHTTP");
            }
            catch (e)
            {
                alert("Your browser does not support AJAX!");
                return false;
            }
        }
    }
    function stateck() 
    {
        if(httpxml.readyState==4)
        {
            document.getElementById(inputFieldPrint).innerHTML=httpxml.responseText;
            // alert(inputFieldPrint.innerHTML=httpxml.responseText);
        }
    }
    var url="../includes/functions_catalogos.php";
    var entrada = document.getElementById(inputFieldGet).value;
    // alert(entrada);
    url=url+"?listado="+listado+"&entrada="+entrada;
    //alert(url);
    httpxml.onreadystatechange=stateck;
    httpxml.open("GET",url,true);
    httpxml.send(null);

}
function AjaxFunction2(listado,inputFieldGet,inputFieldGetO,inputFieldPrint)
{
    
    var httpxml;
    try
    {
        // Firefox, Opera 8.0+, Safari
        httpxml=new XMLHttpRequest();
    }
    catch (e)
    {
    // Internet Explorer
        try
        {
            httpxml=new ActiveXObject("Msxml2.XMLHTTP");
        }
        catch (e)
        {
            try
            {
                httpxml=new ActiveXObject("Microsoft.XMLHTTP");
            }
            catch (e)
            {
                alert("Your browser does not support AJAX!");
                return false;
            }
        }
    }
    function stateck() 
    {
        if(httpxml.readyState==4)
        {
            document.getElementById(inputFieldPrint).innerHTML=httpxml.responseText;
            // alert(inputFieldPrint.innerHTML=httpxml.responseText);
        }
    }
    var url="../includes/functions_catalogos.php";
    var entrada = document.getElementById(inputFieldGet).value;
    var entrada2 = document.getElementById(inputFieldGetO).value;
    url=url+"?listado="+listado+"&entrada="+entrada+"&entrada2="+entrada2;
    httpxml.onreadystatechange=stateck;
    httpxml.open("GET",url,true);
    httpxml.send(null);

}

function Jdescuento() {
    var descuento = document.getElementById("descuento").value;
    var precio    = document.getElementById("precio").value;
    var impDesc   = (descuento/100) * precio;
    document.getElementById("impDesc").value = impDesc;
}
function AjaxFunctionValue(listado,inputFieldGet,inputFieldPrint)
{
    
    var httpxml;
    try
    {
        // Firefox, Opera 8.0+, Safari
        httpxml=new XMLHttpRequest();
    }
    catch (e)
    {
    // Internet Explorer
        try
        {
            httpxml=new ActiveXObject("Msxml2.XMLHTTP");
        }
        catch (e)
        {
            try
            {
                httpxml=new ActiveXObject("Microsoft.XMLHTTP");
            }
            catch (e)
            {
                alert("Your browser does not support AJAX!");
                return false;
            }
        }
    }
    function stateck() 
    {
        if(httpxml.readyState==4)
        {
            document.getElementById(inputFieldPrint).value=httpxml.responseText;
            // alert(inputFieldPrint.innerHTML=httpxml.responseText);
        }
    }
    var url="../includes/functions_admin.php";
    var entrada = document.getElementById(inputFieldGet).value;
    // alert(entrada);
    url=url+"?listado="+listado+"&entrada="+entrada;
    //alert(url);
    httpxml.onreadystatechange=stateck;
    httpxml.open("GET",url,true);
    httpxml.send(null);

}

function updateCliente(){
    $("listaPrecios").removeAttr("required");
    $("nomCliente").removeAttr("required");
    $("estatus").removeAttr("required");
    $("divisa").removeAttr("required");
    $("limCredito").removeAttr("required");
    $("saldoFactura").removeAttr("required");
    var lp=$("#listaPrecios").val();
    var nom=$("#nomCliente").val();
    var estatus=$("#estatus").val();
    var rep=$("#idRepresentante").val();
    var analista=$("#idAnalista").val();
    var lim=$("#limCredito").val();
    var bloq=$("#bloqueo").val();
    var cliente=$("#idCliente").val();
    var fun='updateCliente'; 
    $.ajax({
        type:"POST",
        url:"../includes/functions_catalogos.php",
        data:{funcion:fun,listaPrecios:lp,nombreCliente:nom,estatusCliente:estatus,idRepresentante:rep,idAnalista:analista,limCredito:lim,idCliente:cliente},
        success:function(response){
            
            if(response=="Actualizado exitosamente"){
                window.location.href = "../php/C_cliente.php?error=success";
            }
            else{
                window.location.href = "../php/C_cliente.php?error=error";
            }
            
        }
    });

    
}

function updateArtV(){
    $("stock").removeAttr("required");
    $("codAviso").removeAttr("required");
    $("udVta").removeAttr("required");
    var fol=$("#folio").val();
    var art=$("#idArticulo").val();
    var cliente=$("#idCliente").val();
    var cod=$("#codAviso").val();
    var uni=$("#udVta").val();
    var fun='updateArtV'; 
    $.ajax({
        type:"POST",
        url:"../includes/functions_catalogos.php",
        data:{funcion:fun,folio:fol,artV:art,codAviso:cod,udVta:uni,idCliente:cliente},
        success:function(response){
            
            if(response=="Actualizado exitosamente"){
                window.location.href = "../php/C_articuloVendido.php?error=success";
            }
            else{
                window.location.href = "../php/C_articuloVendido.php?error=error";
            }
            
        }
    });
}

function updateCantEnt(){
    $("posicion").removeAttr("required");
    $("fechaMov").removeAttr("required");
    $("hora").removeAttr("required");
    $("secuencia").removeAttr("required");
    var ord=$("#idOrden").val();
    var fol=$("#folio").val();
    var tipo=$("#tipoReg").val();
    var pos=$("#posicion").val();
    var fech=$("#fechaMov").val();
    var hor=$("#hora").val();
    var sec=$("#secuencia").val();
    var fun='updateCantEnt'; 
    $.ajax({
        type:"POST",
        url:"../includes/functions_catalogos.php",
        data:{funcion:fun,idOrden:ord,folio:fol,tipoReg:tipo,posicion:pos,fechaMov:fech,hora:hor,secuencia:sec},
        success:function(response){
            
            if(response=="Actualizado exitosamente"){
                window.location.href = "../php/C_cantidadE.php?error=success";
            }
            else{
                window.location.href = "../php/C_cantidadE.php?error=error";
            }
            
        }
    });
}

function estatusValidaciones(idOrden){
    alert("Llegamos a ajax");
    var fun='checkValidaciones';
    var orden=idOrden;
    $.ajax({
        type:"POST",
        url:"../includes/functions_catalogos.php",
        data:{funcion:fun,idOrden:orden},
        success:function(data){
            var res = $.parseJSON(data);
            alert(res.result)
            
        }
    });

}