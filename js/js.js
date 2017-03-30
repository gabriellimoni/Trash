function validaLogin(){
	var email = document.getElementById('email').value;
	var senha = document.getElementById('senha').value;
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

function abreCadastro(){
	window.open('cadastro.html');
}


// MODAL --------------------------------
function abreModal(){
	var modal = document.getElementById('myModal');
	var btn = document.getElementById("openLogin");
	var span = document.getElementsByClassName("close")[0];
	
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