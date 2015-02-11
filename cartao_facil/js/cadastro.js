function ajaxPHPData(url, parameters){
    $.ajax({ 
        url: url, 
        cache: false, 
        complete: function() { 
            $.unblockUI(); 
        },
        error: function(text){
        	errorMessage(text);
        }
    }); 	
}

function errorMessage(text){
	//Implementar JQuery BlockUI. Mensagem de erro, comunicar ao suporte.
}

$(document).ready(function(){
	
    $('#test').click(function() { 
        $.blockUI({ message: $('#question'), css: { width: '275px' } }); 
    }); 

    $('#yes').click(function() { 
        // update the block message 
        $.blockUI({ message: "<h1>Remote call in progress...</h1>" }); 


    }); 

    $('#no').click(function() { 
        $.unblockUI(); 
        return false; 
    }); 
	
	
    //Dispara o Submit ao clicar no input com id = #btnCadastrarAssociado
    $('#btnCadastrarAssociado').click(function(){
 
    	alert("show!");
    });
});

function _onSelectEstado(){
	var valorCombo = document.getElementById('uf');
	if (valorCombo.length > 1){
		document.getElementById('uf').remove(0);
	}
	return;
}

function enviar_dados_dep(){
	form.action = 'xxxx';
	form.submit();
}

function validarDadosAssociado(){
	var unidade = document.getElementById("unidade");
	var filial = document.getElementById("filial");
	var nm_matricula = document.getElementById("nm_matricula");
	var dt_filiacao = document.getElementById("dt_filiacao");
	var vendedor = document.getElementById("vendedor");
	var nome = document.getElementById("nome");
	var cpf_responsavel = document.getElementById("cpf_responsavel");
	var nm_identidade = document.getElementById("nm_identidade");
	var dt_nasc = document.getElementById("dt_nasc");
	var endereco = document.getElementById("endereco");
	var bairro = document.getElementById("bairro");
	var cep = document.getElementById("cep");
	var cidade = document.getElementById("cidade");
	//combo
	var uf = document.getElementById("uf");
	
	var tel_responsavel = document.getElementById("tel_responsavel");
	var tel_celular = document.getElementById("tel_celular");
	//radio
	var residencia = document.getElementById("residencia");
	
	var email = document.getElementById("email");
	var referencia = document.getElementById("referencia");
	var tel_parente = document.getElementById("tel_parentes");
	
	var camposPreenchidos = true;
	
	if (unidade.value == null || unidade.value == ''){
		camposPreenchidos = false;
	}
	
	return camposPreenchidos;
}