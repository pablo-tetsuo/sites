var control = window.location.protocol + "//" + window.location.host + window.location.pathname.replace("admin.php", "control/control.php");

var larg = window.innerWidth;

$(document).ready(function(){

  $.ajax({
            type: "GET",
            url: control+'?acao=menu',
            timeout: 3000,
            datatype: 'JSON',
            contentType: "application/json; charset=utf-8",
            cache: false,
            beforeSend: function() {
              $("#load").show();
            },
            error: function() {
              alert("Não foi possível montar o menu!")
              $("#load").hide();
            },
            success: function(retorno) {
                var obj = JSON.parse(retorno);
                var tam = obj['registros'];

                for (var i = 0; i < tam; i++) {
                    if(obj['campos']['arquivo'][i]==''){
                  $(".fundo_menu").append("<div class='bt_menu' onclick=\"carrega('"+obj['campos']['arquivo'][i]+"', '"+obj['campos']['id'][i]+"', '"+obj['campos']['titulo'][i]+"')\" > <i class='fa "+obj['campos']['icone'][i]+"' style='font-size:13px; margin-right: 5px;'></i> "+obj['campos']['titulo'][i]+" <i class='fas fa-angle-down' style='float:right; margin-right: 10px;'></i></div>" );
                } else {
                  $(".fundo_menu").append("<div class='bt_menu' onclick=\"carrega('"+obj['campos']['arquivo'][i]+"', '"+obj['campos']['id'][i]+"', '"+obj['campos']['titulo'][i]+"')\" > <i class='fa "+obj['campos']['icone'][i]+"' style='font-size:13px; margin-right: 5px;'></i> "+obj['campos']['titulo'][i]+" </div>" );
                }
                  if(obj['campos']['arquivo'][i]==''){
                    $(".fundo_menu").append('<div class="sub-menu" id="s_'+obj['campos']['id'][i]+'"></div>');
                    submenu(obj['campos']['id'][i]);
                  }
                }

                $("#load").hide();
            }
        });

var tela = getVar('tela');


if(tela != undefined){
   $(".conteudo").load('modulos/'+getVar('tela')+'/index.php');
   $(".topo-modulo").text(getVar('tela'));
} else {
   $(".conteudo").load('modulos/dashboard/index.php');
}





});


function submenu(id){
  $.ajax({
            type: "GET",
            url: control+'?acao=menu&mod='+id,
            timeout: 3000,
            datatype: 'JSON',
            contentType: "application/json; charset=utf-8",
            cache: false,
            beforeSend: function() {
            },
            error: function() {
              alert("Não foi possível montar o menu!")
              $("#load").hide();
            },
            success: function(retorno) {
                var obj = JSON.parse(retorno);
                var tam = obj['registros'];

                for (var i = 0; i < tam; i++) {
                  $("#s_"+id).append("<div class='bt_s_menu' onclick=\"carrega('"+obj['campos']['arquivo'][i]+"', '"+obj['campos']['id'][i]+"', '"+obj['campos']['titulo'][i]+"')\" > <i class='fa "+obj['campos']['icone'][i]+"' style='font-size:13px; margin-right: 5px;'></i> "+obj['campos']['titulo'][i]+"</div>" );
                }
            }
        });
}


function menu(){
  var camada = $('.fundo_menu');
  var pos = camada.offset().left;
  if(larg<850){

    if(pos<0){

      $('.fundo_menu').animate({width: '80%',left:'0px'});
      $('.bt-menu').animate({left: '80%'});
    } else {
      $('.fundo_menu').animate({left:'-80%'});
      $('.bt-menu').animate({left: '0%'});

    }
  } else {
  if(pos==0){
    $('.fundo_menu').animate({left: '-15%'});
    $('.bt-menu').animate({left: '0%'});
    $('.topo-modulo').animate({left: '0%',width: '100%'});
    $('.conteudo').animate({left: '0%', width: '100%'});
  } else {
    $('.fundo_menu').animate({left: '0%'});
    $('.bt-menu').animate({left: '15%'});
    $('.topo-modulo').animate({left: '15%',width: '85%'});
    $('.conteudo').animate({left: '15%', width: '85%'});

  }
}
}

function carrega(arquivo, id, titulo){
  if(arquivo != ''){
    $(".conteudo").load('modulos/'+arquivo);
    $(".topo-modulo").text(titulo);
  } else {
    $(".sub-menu").slideUp();



    var a = $("#s_"+id).is(':visible');
    if(a==false){
      $("#s_"+id).slideDown();
    }

  }
}

function sair(){
  var r = confirm('Deseja Realmente sair?');
  if (r==true) {
    window.location.assign('index.php');
  }

}



function urlDecode(string, overwrite){
	if(!string || !string.length){
		return {};
	}
	var obj = {};
	var pairs = string.split('&');
	var pair, name, value;
	var lsRegExp = /\+/g;
	for(var i = 0, len = pairs.length; i < len; i++){
		pair = pairs[i].split('=');
		name = unescape(pair[0]);
		value = unescape(pair[1]).replace(lsRegExp, " ");
		//value = decodeURIComponent(pair[1]).replace(lsRegExp, " ");
		if(overwrite !== true){
			if(typeof obj[name] == "undefined"){
				obj[name] = value;
			}else if(typeof obj[name] == "string"){
				obj[name] = [obj[name]];
				obj[name].push(value);
			}else{
				obj[name].push(value);
			}
		}else{
			obj[name] = value;
		}
	}
	return obj;
}


function getVar(param){
	var wl = window.location.href;
	var params = urlDecode(wl.substring(wl.indexOf("?")+1));
	return(params[param]);
}
