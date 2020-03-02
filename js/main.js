/*variáveis globais*/
//seu host aqui
const path = 'SEU HOST AQUI'

/*menu*/
$('.open-menu-mobile').click(function(){
	$('.menu-mobile').slideToggle()
})

$('.close-menu-mobile').click(function(){
	$('.menu-mobile').slideToggle()
})

$(window).resize(function(){
	let y = $(window).width()
	if(y > 570){
		$('.menu-mobile').slideUp()
	}
})

/*Requisição para o login*/
$('#login').submit(function(){
	let nick = $('input[name=nick]').val()
	
	if(nick.trim() == "") {
		alert('Insira um login e uma senha!')
		return false
	}

	$.ajax({
		url: path+'ajax/login.php',
		method: "POST",
		data: {nick},
		success: function(data){
			$('#response').html(data)
			return false
		}
	})
	return false
})

/*Entrar na sala*/
$(".enterRoom").click(function(){
	let id = $(this).attr("val")
	$.ajax({
		url: path+"ajax/getOnline.php",
		method: "POST",
		data: {id}
	})
})

/*Sair da sala*/
/*
$('.logoff').click(function(){
	$.ajax({
		url: path+"ajax/logoff.php"
	})
})
*/

/*Enviar mensagem*/
$("#chat-msg").keypress(function(e){
	var key = (e.keyCode ? e.keyCode : e.which)
	if(key == 13){
		let msg = $("input[name=msg]").val()
		if(msg.trim() == ""){
			alert('Insira uma mensagem!');
			return false;
		}
		$.ajax({
			url: path+"ajax/insertMsg.php",
			method: "POST",
			data: {msg},
			success: function(){
				$("input[name=msg]").val("")
			}
		})
		return false
	}
})

$("#chat-msg").submit(function(){
	let msg = $("input[name=msg]").val()
	if(msg.trim() == ""){
		alert('Insira uma mensagem!');
		return false;
	}
	$.ajax({
		url: path+"ajax/insertMsg.php",
		method: "POST",
		data: {msg},
		success: function(){
			$("input[name=msg]").val("")
		}
	})
	return false
})

/*Atualizar a lista de usuários online*/
setInterval(function(){
	$.ajax({
		url: path+"ajax/updateUserOnline.php",
		success: function(data){
			$('.users').html(data)
		}
	})

	$.ajax({
		url: path+"ajax/updateMsg.php",
		success: function(data){
			$('.chat-message').html(data)
			$(".chat-message").animate({scrollTop: $('.chat-message').prop("scrollHeight")}, 500);
		}
	})
},2000)