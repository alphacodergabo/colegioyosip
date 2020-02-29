function verdetallenot(id, i){
    var id = id;
    var i = i;
    //alert(id);
    document.getElementById("detalle"+i).innerHTML = "<img src='..administrador/imagenes/preload1.gif' width='16' height='16'> Espere un momento por favor...";
        $.post("detallenot.php",{
            id:id,
        },function(data){
            $("#detalle"+i).html(data);
        });
}

function verdetallenot1(id, i){
    var id = id;
    var i = i;
    if (i=='0'){
        document.getElementById("detallep").innerHTML = "<img src='..administrador/imagenes/preload1.gif' width='16' height='16'> Espere un momento por favor...";
        $.post("detallenot1.php",{
            id:id,
        },function(data){
            $("#detallep").html(data);
        });
    }else{
          document.getElementById("detallep"+i).innerHTML = "<img src='..administrador/imagenes/preload1.gif' width='16' height='16'> Espere un momento por favor...";
        $.post("detallenot1.php",{
            id:id,
        },function(data){
            $("#detallep"+i).html(data);
        });     
    }
}

function verdetalle(id, i){
    var id = id;
    var i = i;
    //alert(id);
    //alert(i);
    if (i=='0'){
        document.getElementById("detallep").innerHTML = "<img src='..administrador/imagenes/preload1.gif' width='16' height='16'> Espere un momento por favor...";
        $.post("detevento.php",{
            id:id,
        },function(data){
            $("#detallep").html(data);
        });
    }else{
          document.getElementById("detallep"+i).innerHTML = "<img src='..administrador/imagenes/preload1.gif' width='16' height='16'> Espere un momento por favor...";
        $.post("detevento.php",{
            id:id,
        },function(data){
            $("#detallep"+i).html(data);
        });     
    }
}