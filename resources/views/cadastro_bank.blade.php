@extends('layouts.app')
@section('content') 
<style>
label{
	color: white;
	font-size: 20px;
}</style>       
	<!--================Home Contact Area =================-->
	<div class="contaner-fluid">
		<section class="home_contact_area">
			<div class="h_right_form " style="float: none; width: auto">
					<div class="h_form_inner " style="max-width: unset">
							<h4>Cadastre-se para ser nosso parceiro e feche os melhores empréstimos.
								<br><small>Dê lances e conquiste o cliente com a melhor taxa!</small>
							</h4>
					<form class="home_contact_form" action="" method="post" id="contactForm" novalidate="novalidate">
						<div class="row">
							<div class="form-group col-lg-2">
								<label for="">Código da Agência:</label>
								<input type="text" class="form-control" id="cod" name="cod" placeholder="Nome">
							</div>
							<div class="form-group col-lg-5">
									<label for="">Nome da Agência:</label>
									<input type="text" class="form-control" id="name" name="name" placeholder="Nome">
								</div>
								<div class="form-group col-lg-4">
									<label for="">CNPJ:</label>
									<input type="text" class="form-control" id="name" name="name" placeholder="Nome">
								</div>
														
						</div>
						<div class="row">
								<div class="form-group col-lg-3">
									<label for="">Telefone:</label>
									<input type="text" class="form-control" id="phone" name="phone" placeholder="Telefone">
								</div>
							<div class="form-group col-sm-6">
								<label for="">Email:</label>
								<input type="text" class="form-control" id="mail" name="mail" placeholder="Email">
								

							</div>
						</div>
						<div class="row">
							<div class="form-group col-lg-2">
								<label for="">CEP:</label>
								<input type="text" class="form-control" id="cep" name="cep" placeholder="CEP">
							</div>
							<div class="form-group col-lg-5">
									<label for="">Rua:</label>
								<input type="text" class="form-control" id="rua" name="rua" placeholder="Rua">
							</div>	
							<div class="form-group col-lg-2">
									<label for="">Número:</label>
								<input type="text" class="form-control" id="numero" name="numero" placeholder="Numero">
							</div>						
						</div>
						<div class="row">
							<div class="form-group col-lg-4">
									<label for="">Bairro:</label>
								<input type="text" class="form-control" id="bairro" name="bairro" placeholder="Bairro">
							</div>
							<div class="form-group col-lg-4">
									<label for="">Cidade:</label>
								<input type="text" class="form-control" id="cidade" name="cidade" placeholder="Cidade">
							</div>	
							<div class="form-group col-lg-2">
									<label for="">Estado:</label>
								<input type="text" class="form-control" id="uf" name="uf" placeholder="Estado">
							</div>						
						</div>

						<div class="row">
							<div class="form-group col-lg-6">
								<button type="submit" value="submit" class="btn submit_btn">Cadastrar</button>
							</div>
						</div>
					</form>
				</div>
			</div>
			
		</section>
	</div>
	<!--================End Home Contact Area =================-->      
	<script>
		$(document).ready(function(){
			$('#cep').mask('00000-000');
			$('#phone').mask('(00) 00000-0000');
			$('#aposentadoria').mask('#.##0,00', { reverse: true });

			$("#cep").blur(function() {

//Nova variável "cep" somente com dígitos.
var cep = $(this).val().replace(/\D/g, '');

//Verifica se campo cep possui valor informado.
if (cep != "") {

	//Expressão regular para validar o CEP.
	var validacep = /^[0-9]{8}$/;

	//Valida o formato do CEP.
	if(validacep.test(cep)) {

		//Preenche os campos com "..." enquanto consulta webservice.
		$("#rua").val("...");
		$("#bairro").val("...");
		$("#cidade").val("...");
		$("#uf").val("...");
		$("#ibge").val("...");

		//Consulta o webservice viacep.com.br/
		$.getJSON("https://viacep.com.br/ws/"+ cep +"/json/?callback=?", function(dados) {

			if (!("erro" in dados)) {
				//Atualiza os campos com os valores da consulta.
				$("#rua").val(dados.logradouro);
				$("#bairro").val(dados.bairro);
				$("#cidade").val(dados.localidade);
				$("#uf").val(dados.uf);
				$("#ibge").val(dados.ibge);
			} //end if.
			else {
				//CEP pesquisado não foi encontrado.
				limpa_formulário_cep();
				alert("CEP não encontrado.");
			}
		});
	} //end if.
	else {
		//cep é inválido.
		limpa_formulário_cep();
		alert("Formato de CEP inválido.");
	}
} //end if.
else {
	//cep sem valor, limpa formulário.
	limpa_formulário_cep();
}
});

		});

	</script> 
@endsection