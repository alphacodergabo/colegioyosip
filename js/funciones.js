function verdetallenot(id, i){
    var id = id;
    var i = i;
    //alert(id);
    document.getElementById("detalle"+i).innerHTML = "<img src='..administrador/imagenes/preload1.gif' width='16' height='16'> Espere un momento por favor...";
        $.post("detallenot.php",{
            id:id
        },function(data){
            $("#detalle"+i).html(data);
        });
}

function verdetallenot1(id, i){
    var id = id;
    var i = i;
    if (i=='0'){
        document.getElementById("detallep").innerHTML = "<img src='../administrador/imagenes/preload1.gif' width='16' height='16'> Espere un momento por favor...";
        $.post("detallenot1.php",{
            id:id
        },function(data){
            $("#detallep").html(data);
        });
    }else{
          document.getElementById("detallep"+i).innerHTML = "<img src='..administrador/imagenes/preload1.gif' width='16' height='16'> Espere un momento por favor...";
        $.post("detallenot1.php",{
            id:id
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
            id:id
        },function(data){
            $("#detallep").html(data);
        });
    }else{
          document.getElementById("detallep"+i).innerHTML = "<img src='..administrador/imagenes/preload1.gif' width='16' height='16'> Espere un momento por favor...";
        $.post("detevento.php",{
            id:id
        },function(data){
            $("#detallep"+i).html(data);
        });     
    }
}
//Funciones del Administrador
function verificausuario(){
    var usuario = $('#usuario').val();
    var clave = $('#clave').val();
    $.post("validar.php",{
        usuario:usuario,
        clave:clave
    },function(data){
        $("#principal").html(data);
    });
}
function admin(){
    location.href="admin.php";
}

function verperfil(activo){
    var randomnumber=Math.random()*11;
    $.get("perfil.php?rn="+randomnumber+"&activo="+activo+"",{},function(data){
        $("#menucampus").html(data);
    });
}
function vermenu(perfil){
      
    $.get("menu.php",
        {
           
            perfil:perfil
        },
        function(datos){
            $("#menu2campus").html(datos);
        });
}


//-------------------------------------------
function imprSelec(nombre)
{
  var ficha = document.getElementById(nombre);
  var ventimp = window.open(' ', 'popimpr');
  ventimp.document.write( ficha.innerHTML );
  ventimp.document.close();
  ventimp.print( );
  ventimp.close();
} 
function isEmail(e) {
    ok = "1234567890qwertyuiop[]asdfghjklzxcvbnm.@-_QWERTYUIOPASDFGHJKLZXCVBNM";
    for(i=0; i < e.length ;i++){
        if(ok.indexOf(e.charAt(i))<0){
            return (false);
        }
    }
    re = /(@.*@)|(\.\.)|(^\.)|(^@)|(@$)|(\.$)|(@\.)/;
    re_two = /^.+\@(\[?)[a-zA-Z0-9\-\.]+\.([a-zA-Z]{2,4}|[0-9]{1,3})(\]?)$/;
    if (!e.match(re) && e.match(re_two)) {
        return (-1);
    }
}

function inicio(){
    location.href="index.php";
}


function cargarpg(url){
    var randomnumber=url+"?rn="+Math.random()*11;
    document.getElementById("contenidotable").innerHTML = "<img src='../imagenes/preload1.gif' width='16' height='16'> Espere un momento por favor...";
    $.get(randomnumber,{},function(data){
        $("#contenidotable").html(data);
    });
}

/*INICIO DEL SCRIPT DE USUARIOS*/
function verusuarios(url){
    var randomnumber=url+"?rn="+Math.random()*11
    $.get(randomnumber,{},function(data){
        $("#contenidotable").html(data);
    });
}
function nuevousuario(){
    var randomnumber=Math.random()*11
    $.get("nuevousuario.php?rn="+randomnumber+"",{},function(data){
        $("#buscarpersona").html(data);
    });
}
function nuevapersona(){
    var randomnumber=Math.random()*11
    $.get("nuevapersona.php?rn="+randomnumber+"",{},function(data){
        $("#buscarpersona").html(data);
    });
}

function searchpersona(){
    String.prototype.trim = function()
    {
        return this.replace(/(^\s*)|(\s*$)/g,"");
    }
    var randomnumber=Math.random()*11;
    var apellido = document.getElementById("txtapellido").value;
    var apellido =apellido.trim();
    if (apellido.length==0){
        alert("Debes Ingresar un apellido.");
    }else{
        document.getElementById("buscarpersona").innerHTML = "<img src='../imagenes/preload1.gif' width='16' height='16'> Espere un momento por favor...";
        $.post("searchpersona.php",{
            apellido:apellido,
            randomnumber:randomnumber
        },function(data){
            $("#buscarpersona").html(data);
        });
    }
}

function searchpersonakp(){
    String.prototype.trim = function()
    {
        return this.replace(/(^\s*)|(\s*$)/g,"");
    }
    var randomnumber=Math.random()*11;
    var apellido = document.getElementById("txtapellido").value;
    var apellido =apellido.trim();
    
    
        document.getElementById("kp").innerHTML = "<img src='../imagenes/preload1.gif' width='16' height='16'> Espere un momento por favor...";
        $.post("searchpersonakp.php",{
            apellido:apellido,
            randomnumber:randomnumber
        },function(data){
            $("#kp").html(data);
        });
    
}

function searchusuario(){
    String.prototype.trim = function()
    {
        return this.replace(/(^\s*)|(\s*$)/g,"");
    }
    var randomnumber=Math.random()*11;
    var apellido = document.getElementById("txtapellido").value;
    var apellido =apellido.trim();
    if (apellido.length==0){
        alert("Debes Ingresar un apellido.");
    }else{
        document.getElementById("buscarpersona").innerHTML = "<img src='../imagenes/preload1.gif' width='16' height='16'> Espere un momento por favor...";
        $.post("searchusuario.php",{
            apellido:apellido,
            randomnumber:randomnumber
        },function(data){
            $("#buscarpersona").html(data);
        });
    }
}

function regpersona(){
    var randomnumber=Math.random()*11
    $.post("crearpersona.php",{
        
        randomnumber:randomnumber
    },function(data){
        $("#buscarpersona").html(data);
    });
}
function disponible(){
    String.prototype.trim = function()
    {
        return this.replace(/(^\s*)|(\s*$)/g,"");
    }
    var randomnumber=Math.random()*11
    var txtusuario = document.getElementById("txtusuario").value;
    var txtusuario =txtusuario.trim();
    if (txtusuario.length<5){
        alert("El usuario debe tener por lo menos 5 caracteres.");
    }else{
        document.getElementById("diaponibilidad").innerHTML = "<img src='../imagenes/preload.gif' width='16' height='16'> Espere un momento por favor...";
        $.post("disponible.php",{
            txtusuario:txtusuario,
            randomnumber:randomnumber
        },function(data){
            $("#diaponibilidad").html(data);
        });
    }
}


function crearusuario(nPerCodigo){
    var randomnumber=Math.random()*11
    $.post("crearusuario.php",{
        nPerCodigo:nPerCodigo,
        randomnumber:randomnumber
    },function(data){
        $("#buscarpersona").html(data);
    });
}
function disponible(){
    String.prototype.trim = function()
    {
        return this.replace(/(^\s*)|(\s*$)/g,"");
    }
    var randomnumber=Math.random()*11
    var txtusuario = document.getElementById("txtusuario").value;
    var txtusuario =txtusuario.trim();
    if (txtusuario.length<5){
        alert("El usuario debe tener por lo menos 5 caracteres.");
    }else{
        document.getElementById("diaponibilidad").innerHTML = "<img src='../imagenes/preload.gif' width='16' height='16'> Espere un momento por favor...";
        $.post("disponible.php",{
            txtusuario:txtusuario,
            randomnumber:randomnumber
        },function(data){
            $("#diaponibilidad").html(data);
        });
    }
}
function guardausuario(){
    String.prototype.trim = function()
    {
        return this.replace(/(^\s*)|(\s*$)/g,"");
    }
    var randomnumber=Math.random()*11;
    var txtclave = document.getElementById("txtclave").value;
    var txtrepite = document.getElementById("txtrepite").value;
    var txtusuario = document.getElementById("txtusuario").value;
    var txtclave =txtclave.trim();
    var txtrepite =txtrepite.trim();

    var txtcodigo = document.getElementById("txtcodigo").value;
    if (txtclave.length==0){
        alert("Debes Ingresar una Clave.");
    }else{
        if (txtclave==txtrepite){
            document.getElementById("buscarpersona").innerHTML = "<img src='../imagenes/preload1.gif' width='16' height='16'> Espere un momento por favor...";
            $.post("guardausuario.php",{
                txtusuario:txtusuario,
                txtclave:txtclave,
                txtrepite:txtrepite,
                txtcodigo:txtcodigo,
                randomnumber:randomnumber
            },function(data){
                $("#buscarpersona").html(data);
            });
        }else{
            alert("Las claves ingresadas no coinciden.");
        }
    }
}
function guardapersona(){
    var txtape = document.getElementById("txtapellido").value;
    var txtnom = document.getElementById("txtnombre").value;
    var txtfecha = document.getElementById("txfechan").value;
    var txtdir = document.getElementById("txtdir").value;
    var txtdoc = document.getElementById("documento").value;
    var nrodoc = document.getElementById("txtdoc").value;
    var opertel = document.getElementById("celu").value;
    var celu = document.getElementById("txtcel").value;
    var claemail=document.getElementById("mail").value;
    var mimail=document.getElementById("txtmail").value;
    var txtape= txtape.trim();
    var txtnom=txtnom.trim();
    var txtfecha=txtfecha.trim();
    var txtdir=txtdir.trim();
    var nrodoc=nrodoc.trim();
    var celu=celu.trim();
    var mimail=mimail.trim();
    //alert(txtape);
    if (txtape.length==0){
        alert("Debes ingresar apellido");
    }else if(txtnom.length==0){
        alert("Debes ingresar un nombre valido")
    }else if(txtfecha.length==0){
        alert("Debes ingresar fecha")
    }else if(txtdir.length==0){
        alert("Debes ingresar una dirección")
    }else if(nrodoc.length==0){
        alert("Debes ingresar tu documento")
    }else if(celu.length==0){
        alert("Debes ingresar tu celular")
    }else if(mimail.length==0){
        alert("Debes ingresar tu mail")
    }else {   
        
            document.getElementById("buscarpersona").innerHTML = "<img src='../imagenes/preload1.gif' width='16' height='16'> Espere un momento por favor...";
            $.post("guardapersona.php",{
                txtape:txtape,
                txtnom:txtnom,
                txtfecha:txtfecha,
                txtdir:txtdir,
                txtdoc:txtdoc,
                nrodoc:nrodoc,
                opertel:opertel,
                celu:celu,
                claemail:claemail,
                mimail:mimail
            },function(data){
                $("#buscarpersona").html(data);
            });
        }
    }


    function actualizapersona(){
        var txtid=document.getElementById("txtid").value;
        var txtape = document.getElementById("txtapellido").value;
        var txtnom = document.getElementById("txtnombre").value;
        var txtfecha = document.getElementById("txfechan").value;
        var txtdir = document.getElementById("txtdir").value;
        var txtdoc = document.getElementById("documento").value;
        var nrodoc = document.getElementById("txtdoc").value;
        var opertel = document.getElementById("celu").value;
        var celu = document.getElementById("txtcel").value;
        var claemail=document.getElementById("mail").value;
        var mimail=document.getElementById("txtmail").value;
        var txtape= txtape.trim();
        var txtnom=txtnom.trim();
        var txtfecha=txtfecha.trim();
        var txtdir=txtdir.trim();
        var nrodoc=nrodoc.trim();
        var celu=celu.trim();
        var mimail=mimail.trim();
        //alert(txtape);
        if (txtape.length==0){
            alert("Debes ingresar apellido");
        }else if(txtnom.length==0){
            alert("Debes ingresar un nombre valido")
        }else if(txtfecha.length==0){
            alert("Debes ingresar fecha")
        }else if(txtdir.length==0){
            alert("Debes ingresar una dirección")
        }else if(nrodoc.length==0){
            alert("Debes ingresar tu documento")
        }else if(celu.length==0){
            alert("Debes ingresar tu celular")
        }else if(mimail.length==0){
            alert("Debes ingresar tu mail")
        }else {   
            
                
                $.post("updatepersona.php",{
                    txtid:txtid,
                    txtape:txtape,
                    txtnom:txtnom,
                    txtfecha:txtfecha,
                    txtdir:txtdir,
                    txtdoc:txtdoc,
                    nrodoc:nrodoc,
                    opertel:opertel,
                    celu:celu,
                    claemail:claemail,
                    mimail:mimail
                },function(data){
                    $("#buscarpersona").html(data);
                });
            }
        }


function editarusuario(nPerCodigo){
    var randomnumber=Math.random()*11
    $.post("claveadmin.php",{
        nPerCodigo:nPerCodigo,
        randomnumber:randomnumber
    },function(data){
        $("#buscarpersona").html(data);
    });
}

function editarpersona(nPerCodigo){
    var randomnumber=Math.random()*11
    $.post("clavepersona.php",{
        nPerCodigo:nPerCodigo,
        randomnumber:randomnumber
    },function(data){
        $("#buscarpersona").html(data);
    });
}

function insertarpermisos(nPerCodigo){
    var randomnumber=Math.random()*11;
    var contaop = 0;
    $(".opciones").each(function(i)
    {
        if(this.checked)
        {
            contaop=1;
        }
    });
    if (contaop==1){

        $.post("eliminaopciones.php",{
            nPerCodigo:nPerCodigo,
            randomnumber:randomnumber
        },function(data){
            $("#buscarpersona").html(data);
        });

        $(".opciones").each(function(i)
        {
            if(this.checked)
            {
                nOpCodigo = this.value;

                $.post("insertaopciones.php",{
                    nPerCodigo:nPerCodigo,
                    nOpCodigo:nOpCodigo,
                    randomnumber:randomnumber
                },function(data){
                    $("#buscarpersona").html(data);
                });

            }
        });
    }else{
        alert("Debes seleccionar por lo menos una OPCION");
    }
}

function verpermisos(nPerCodigo){
    var randomnumber=Math.random()*11;
    $.post("verpermisos.php",{
        nPerCodigo:nPerCodigo,
        randomnumber:randomnumber
    },function(data){
        $("#buscarpersona").html(data);
    });
}
function clave(url){
    var randomnumber=url+"?rn="+Math.random()*11;
    $.get(randomnumber,{},function(data){
        $("#contenidotable").html(data);
    });
}
function cambiaclave(){
    var randomnumber=Math.random()*11;
    var txtclave = document.getElementById("txtclave").value;
    var txtrepite = document.getElementById("txtrepite").value;
    var txtcodigo = document.getElementById("txtcodigo").value;
    if (txtclave.length==0){
        alert("Debes Ingresar una Clave.");
    }else{
        if (txtclave==txtrepite){
            $.post("cambiaclave.php",{
                txtclave:txtclave,
                txtrepite:txtrepite,
                txtcodigo:txtcodigo,
                randomnumber:randomnumber
            },function(data){
                $("#contenidotable").html(data);
            });
        }else{
            alert("Las claves ingresadas no coinciden.");
        }
    }
}
/*FIN DEL SCRIPT DE USUARIOS*/