$(document).ready(function(e) {
		// validação de formulário
		$('#frm_cad').submit(function(event){
			var res = "";
			var nome = $('#nome').val();
			var email = $('#email').val();
			var nickname = $('#nickname').val();
			var senha = $('#senha').val();
			var c_senha = $('#c_senha').val();
			
			if(nome == "" || email == "" || nickname == "" || senha == "" || c_senha == ""){
				if(nome == "")
					res += "Nome vazio!\n";
				if(email == "")
					res += "Email vazio!\n";
				if(nickname == "")
					res += "Nickname vazio!\n";
				if(senha == "")
					res += "Senha vazia!\n";
				if(c_senha == "")
					res += "Confirme sua senha!";
			}
			else if(senha != c_senha)
				res += "Senha e confirmação estão diferentes!";
				
			if (res == "")
				return true;
			else{
				alert(res);
				return false;
			}
		});
});

// JQUERY /\______-----------___________-----------/\


// JAVASCRIPT \/_----------------____________________------------------\/
function validaLogin(){
	var email = $('#email').val();
	var senha = $('#senha').val();
	var res = "";
	
	if(email == "" || senha == ""){
		if(email == "" && senha == "")
			res = "Email e senha vazios!";
		else if (email == "")
			res = "Email vazio!";
		else
			res = "Senha vazia!";
		alert(res);
		return false
	}
	return true;		
}


// MODAL --------------------------------
function abreModal(){
	var modal = document.getElementById('myModal');
	
	modal.style.display = "block";
}

function fechaModal(){
	var modal = document.getElementById('myModal');
	modal.style.display = "none";
}

window.onclick = function(event){
	var modal = document.getElementById('myModal');
	if (event.target == modal) {
		fechaModal();
	}
}
// -----------------------------------------------