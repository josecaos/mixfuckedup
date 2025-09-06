//scripts para el Sitio V2 de mixfuckedup
//
////////////////////////
var proyecto = ['MIXFUCKEDUP','josecaos','Tiniebla','RipRapRape','Menos Humanos','Mitote','Morir','Devilmente','Egohisteria'];
//var selfurl = window.location.href;
var array0 = proyecto[0].split("");
var array1 = proyecto[1].split("");
var array2 = proyecto[2].split("");
var array3 = proyecto[3].split("");
var array4 = proyecto[4].split("");
var array5 = proyecto[5].split("");
var array5 = proyecto[6].split("");
var array5 = proyecto[7].split("");
var array5 = proyecto[8].split("");
//randomiza el titulo
  function tituloHeader() {
    var cont = document.getElementById("tituloprincipal");
    var mixedtitulo = array0.shuffle();
    var caostitulo = array1.shuffle();
    var lcnetitulo = array2.shuffle();
    var tinieblatitulo = array3.shuffle();
    var audiolab = array4.shuffle();
    var weblab = array5.shuffle();
    //
    var mix = mixedtitulo.join("");
    var caos = caostitulo.join("");
    var net = lcnetitulo.join("");
    var teen = tinieblatitulo.join("");
    //
    cont.style.background = 'rgba(0,255,0,0.25)';
    if(secc === 0 || secc === null) {
        cont.innerHTML = mix;
        hablaProyecto(mix);
        setTimeout(function() {
            cont.innerHTML = proyecto[0];
            //hablaProyecto(proyecto[0]);
        },5000);
      }
    if(secc === 1){//este equivale al documento de josecaos
        cont.innerHTML = caos;
        hablaProyecto(caos);
        setTimeout(function() {
            cont.innerHTML = proyecto[1];
            //hablaProyecto(proyecto[1]);
        },5000);
    }
    if(secc === 2){
        cont.innerHTML = net;
        hablaProyecto(net);
        setTimeout(function() {
            cont.innerHTML = proyecto[2];
            //hablaProyecto(proyecto[2]);
        },5000);
    }
    if(secc === 3){
        cont.innerHTML = teen;
        hablaProyecto(teen);
        setTimeout(function() {
            cont.innerHTML = proyecto[3];
            //hablaProyecto(proyecto[3]);
        },5000);
    }
    if(secc === 4){
        cont.innerHTML = audiolab.join("");
        hablaProyecto(audiolab.join(""));
        setTimeout(function() {
            cont.innerHTML = proyecto[4];
            //hablaProyecto(proyecto[0]);
        },10000);
    }
    if(secc === 5){
        cont.innerHTML = weblab.join("");
        hablaProyecto(tinieblatitulo.join(""));
        setTimeout(function() {
            cont.innerHTML = proyecto[5];
            //hablaProyecto(proyecto[0]);
        },10000);
    }
  }
//cambio de titulo
function mixfuckedup () {
    document.getElementById('tituloprincipal').innerHTML = proyecto[0];
    //document.getElementById('tituloheader').style.right = 'auto';
    //hablaProyecto(proyecto[0]);
  }
function joseCaos () {
    document.getElementById('tituloprincipal').innerHTML = proyecto[1];
    //document.getElementById('tituloheader').style.right = 'auto';
    //hablaProyecto(proyecto[1]);
  }
function liveCodeNetEnsamble() {
    document.getElementById('tituloprincipal').innerHTML = proyecto[2];
    //document.getElementById('tituloheader').style.left = '1%';
   // hablaProyecto(proyecto[2]);
  }
function tiniebla () {
    document.getElementById('tituloprincipal').innerHTML = proyecto[3];
    //document.getElementById('tituloheader').style.right = 'auto';
    //hablaProyecto(proyecto[4]);
  }
function audiolab () {
    document.getElementById('tituloprincipal').innerHTML = proyecto[4];
    //document.getElementById('tituloheader').style.right = 'auto';
    //hablaProyecto(proyecto[3]);
  }
function webLab () {
    document.getElementById('tituloprincipal').innerHTML = proyecto[5];
    //document.getElementById('tituloheader').style.right = 'auto';
    //hablaProyecto(proyecto[5] + "web sound research");
  }
//selecciona titulo correcto
function selTitulo() {
    if(secc === 0 || secc === null || secc > 5) {
        mixfuckedup();
    }
    if(secc === 1) {
        joseCaos();
    }
    if(secc === 2) {
        liveCodeNetEnsamble();
    }
    if(secc === 3) {
        tiniebla();
    }
    if(secc === 4) {
        audioLab();
    }
    if(secc === 5) {
        webLab();
    }
}
//player options
////// falta
//selecciona contenido de seccion
//sirve para accionar cosas propias de cada pagina
function content_select() {
    var tw,ply,ind,pics;
    if(secc === 0 || secc === null || secc > 5) {//esta var se declara en el doc php raiz
        var contenido = 'html/mixfuckedup_info.html';
        //
        $('#mixfuckedup').css({'background':'#0ACD00'});
        $('#mixfuckedup a').css({'color':'#313131'});
        $.ajax({//contenido
            url:contenido,
            success: function(data) {
                $('.item-page').html(data);
            },
            error: function(xhr) {
                console.log('errrror, ashole!' + xhr.status + xhr.statusText);
        }
        });
    }
    if(secc === 1) {//josecaos
        tw = 'html/jc_twitter.html';
        //
        $('#joseCaos').css({'background':'#0ACD00'});
        $('#joseCaos a').css({'color':'#313131'});
        $.ajax({
            url:tw,
            success: function(data) {
                 $('.item-twitter').html(data);
            },
            error: function(xhr) {
                console.log('errrror, ashole!' + xhr.status + xhr.statusText);
        }
        });
    }
    if(secc === 2) {//LCNE
        var iframe = 'html/lcne_info.html';
        //
        $('#liveCodeNetEnsamble').css({'background':'#0ACD00'});
        $('#liveCodeNetEnsamble a').css({'color':'#313131'});
        $(".contenidoIndex").css('width','90%');
        $.ajax({
            url: iframe,
            success: function(data) {
                 $('.item-page').html(data);
            },
            error: function(xhr) {
                console.log('errrror, ashole!' + xhr.status + xhr.statusText);
        }
        });
    }
    if(secc === 3) {//Tiniebla
        tw = 'html/tiniebla_twitter.html';
        //
        $('#tiniebla').css({'background':'#0ACD00'});
        $('#tiniebla a').css({'color':'#313131'});
        $.ajax({
            url:tw,
            success: function(data) {
                 $('.item-twitter').html(data);
            },
            error: function(xhr) {
                console.log('errrror humano, ashole!' + xhr.status + xhr.statusText);
        }
        });
    }
    if(secc === 4) {
        $('#audioLab').css({'background':'#0ACD00'});
        $('#audioLab a').css({'color':'#313131'});
        audioLab();
    }
    if(secc === 5) {
      $('#webLab').css({'background':'#0ACD00'});
      $('#webLab a').css({'color':'#313131'});
        webLab();
    }
}
//contrae las ventanas
  function cierraContenedor (ventana) {
    var itempage = '.item-' + ventana;
    jQuery(itempage).slideUp(2000,function() {
      //
    });
    //alert(itempage)
  }
//abre las ventanas
  function abreContenedor (ventana) {
    var altura = $('.mixfooter').offset();
    var itempage = '.item-' + ventana;
    var resta;
    if (ventana === 'page') {resta = 110;};
    if (ventana === 'twitter') {resta = 310;};
    if (ventana === 'radio') {$('.item-radio').css({'height':'100px','opacity':'1'});};
    //
    var alturamaxima = altura.top - resta;
    $(itempage).css('height',alturamaxima + 'px');
    $(itempage).slideDown(1000);
    if( itempage === '.item-liveVid') {
      $('.item-page').slideUp(250);
      $('.contenidoLiveVid').animate({
        'top': '18%',
        'left': '2%',
        'width': '65%'
      },550);
      setTimeout(function() {
        jQuery('.item-liveVid').slideDown(3000);
        $(itempage).css('resize','both');
      },1500);
    }
  }
//donaciones
    function popup () {
      $('#popupDonaciones').toggle('slow',(s) => {
      });
    }
    function closepop () {
      $('#popupDonaciones').fadeOut('slow',function() {
      });
    }
  //ready
$(function(){
  //randomiza arrays
  Array.prototype.shuffle = function() {
    return this.sort(function() {
    return Math.random() - 0.25;
    });
  };
  //titulos y contenido
  selTitulo();
  content_select();
  //drag titulo principal
  $('.tituloheader').udraggable({
    containment: '.contenedorSeccion'
  });
  $('.contenido').udraggable({ //contenido principal
   // containment: 'parent',
    handle: '.contenidoTop'
  });
  // posiciones iniciales
  setTimeout(function() {
    var altura = $('.mixfooter').offset();
    var itemspage = ['.item-page','.item-twitter','item-contacto'];
    var alturaindex = altura.top - 110;
    var alturatwitter = altura.top - 310;
    var alturalivevid = altura.top - 130;
    $(itemspage[0]).css('height',alturaindex + 'px');
    $(itemspage[1]).css('height',alturatwitter  + 'px');
    $('.contenidoRadio').animate({
        top: altura.top -170
    },550);
    $('.contenidoLiveVid').animate({
        top: alturalivevid
    },550);
    $(itemspage.join(',')).slideDown('slow',function() {
      //console.log([alturaindex,alturatwitter,altura.top] + 'px');
    });
  },2000);
  $('.hasTooltip').removeClass('hasTooltip');
  $('.contact').addClass('item-page');
  //habla footer
  $('#habla').on('change',function() {
      hablaWidget($(this).val());
      document.getElementById('tituloheader').style.background = 'rgba(0,255,0,0.5)';
  });
  //
  //formulario de contacto
  $("#submit").click(function(){
	var name = $("#name").val();
	var email = $("#email").val();
	var message = $("#message").val();
	//var contact = $("#contact").val();
	$("#returnmessage").empty(); //To empty previous error/success message.
//checking for blank fields
if(name==''||email==''||contact=='')
{
   alert("Please Fill Required Fields");
}
else{
// Returns successful data submission message when the entered information is stored in database.
$.post("contact_form.php",{ name1: name, email1: email, message1:message, contact1: contact},
   function(data) {
                $("#returnmessage").append(data);//Append returned message to message paragraph
					if(data=="Your Query has been received, We will contact you soon."){
						$("#form")[0].reset();//To reset form fields on success
					}
			});
         }

});
//
}); //fin document ready
