@extends('layouts.app')
@section('content')        
	<!--================Home Contact Area =================-->
	
	<section class="home_contact_area">
		<div class="h_right_form">
			<div class="h_form_inner">
				<h4>Deixe seu contato e resolveremos tudo para você!</h4>
				<form class="row home_contact_form" action="contact_process.php" method="post" id="contactForm" novalidate="novalidate">
					<div class="form-group col-lg-12">
						<input type="text" class="form-control" id="name" name="name" placeholder="Nome">
					</div>
					<div class="form-group col-lg-12">
						<input type="text" class="form-control" id="phone" name="phone" placeholder="Telefone">
					</div>
					<div class="form-group col-lg-12">
						<button type="submit" value="submit" class="btn submit_btn form-control">Clique aqui e solicite o contato</button>
					</div>
				</form>
			</div>
		</div>
		<div class="left_img">
		<img src="{{asset('img/site/telefone-para-idoso-senhor.jpg')}}" alt="">
		</div>
	</section>
	<!--================End Home Contact Area =================-->       
@endsection