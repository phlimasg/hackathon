@extends('layouts.app')
@section('content') 
     
	<!--================Home Contact Area =================-->
	<div class="container">
		<h2>Olá Srº(Srª) Fulano, esse são os seus empréstimos:</h2>
		<div class="table-responsive">          
				<table class="table">
				  <thead>
					<tr>
					  <th>#</th>
					  <th>Valor solicitado</th>
					  <th>Status</th>				  
					</tr>
				  </thead>
				  <tbody>
					<tr>
					  <td>1</td>
					  <td>R$ 2000,00</td>
					  <td>Encontramos o melhor para o Srº(Srª)</td>
					  
					</tr>
				  </tbody>
				</table>
			</div>
			<hr>
			<h4>Sugestões: <br><small>Abaixo estão as melhores opções de empréstimo para você.</small></h4>
			<br>
			<div class="well">
					<div class="table-responsive">          
						<table class="table">
							<thead>
							<tr>
								<th>Banco</th>
								<th>Taxa</th>
								<th>Tempo/vezes</th>
								<th>Valor por mês</th>
								<th>Ao final, vai pagar</th>
								<th></th>
							</tr>
							</thead>
							<tbody>
							<tr  class="text-success">
								<td>Itaú</td>
								<td>1.29% ao mês</td>
								<td>24 vezes</td>
								<td>R$ 199,00</td>
								<td>R$ 2220,00</td>
								<td><button class="btn btn-success">Pegar empréstimo</button></td>
							</tr>
							<tr  class="text-success">
									<td>Santander</td>
									<td>1.29% ao mês</td>
									<td>24 vezes</td>
									<td>R$ 199,00</td>
									<td>R$ 2220,00</td>
									<td><button class="btn btn-success">Pegar empréstimo</button></td>
								</tr>
								<tr class="text-success">
									<td>Bradesco</td>
									<td>1.29% ao mês</td>
									<td>24 vezes</td>
									<td>R$ 199,00</td>
									<td>R$ 2220,00</td>
									<td><button class="btn btn-success">Pegar empréstimo</button></td>
								</tr>
								<tr class="text-danger">
									<td>BMG</td>
									<td>1.29% ao mês</td>
									<td>24 vezes</td>
									<td>R$ 199,00</td>
									<td>R$ 2220,00</td>
									<td></td>
								</tr>
								<tr class="text-danger">
									<td>Banco do Brasil</td>
									<td>1.29% ao mês</td>
									<td>24 vezes</td>
									<td>R$ 199,00</td>
									<td>R$ 2220,00</td>
									<td></td>
								</tr>
							</tbody>
						</table>
						</div>
			</div>
		
	</div>
	<!--================End Home Contact Area =================-->      
@endsection