@extends('layouts.site')

@php
	$message = get_url_message('login');
	$message = str_replace('[vote1]', route('vote1'), $message);
	$message = str_replace('[faca_o_seu]', route('facaoseu'), $message);
@endphp

@section('content')
	@include('site/includes/sidebar')
	<section class="section">
		<div class="wrapper-center">
			<div class="content-full">
				<div class="content-wrapper">
					<div class="content-nav has-nav" data-title="oi_sumido.ppt">
						<a href="javascript:window.history.back();" class="nav-back" title="Voltar">&nbsp;</a>
						<a href="{{ route('home') }}" class="nav-close" title="Fechar">&nbsp;</a>
					</div>
					<div class="content-scroll content-scroll-form">
						<div class="container-fluid _{{ get_current_day_fase() }}">
							<div class="container-fluid-login">
								<div class="title-login">	
									<h1>Faça seu login <br/> para continuar</h1>
								</div>	
								{!! Form::open(['url' => url()->full(), 'method' => 'POST', 'id' => 'form-login', 'autocomplete' => 'off']) !!}
									<div class="form-list">
										<ul>
											<li class="w100">
												<div>
													{{ Form::text('email', null, ['class' => 'form-control', 'placeholder' => 'E-Mail']) }}
												</div>
											</li>
											<li class="w100">
												<div>
													{{ Form::password('password', ['class' => 'form-control', 'placeholder' => 'Senha']) }}
												</div>
												{{ print_alert() }}
											</li>
											<li class="w50-mobi">
												<a href="{{ route('password.reset') }}">Esqueci a minha senha</a>
											</li>
											<li class="w50-mobi">
												<div class="button">
													{{ Form::submit('#Partiu', ['class' => 'btn btn-primary']) }}
												</div>
											</li>
										</ul>
									</div>
								{!! Form::close() !!}
								
								@if($errors->any())
									<div class="alert alert-danger" role="alert">
										{{ $errors->first() }}
									</div>
								@endif
							</div>

							@switch(get_current_day_fase())
								@case(1)
									<div class="container-fluid-middle">
										<span>ou</span>
									</div>
									<div class="container-fluid-register">
										<div class="form-list">
											<ul>
												<li class="w100">
													<h2>Não se <br/> cadastrou <br/> ainda?</h2>
												</li>
												<li class="w100">
													<div class="button left">
														<a href="{{ route('cadastro') }}">Cadastre-se</a>
													</div>
												</li>
											</ul>
										</div>
									</div>
								@break

								@case(0)
								@case(2)
									<div class="container-fluid-middle full"><span>&nbsp;</span></div>
									<div class="container-fluid-msg">
										<div class="title-login">	
											<h1>Cadastro encerrado</h1>
										</div>											
										@if (!empty($message))
											<p>{!! $message !!}</p>
										@else
											@if (\App\Models\Theme::fase(2)->creatable()->exists())
												<p>Atenção, atenção, meus consagrados. Agora, só quem está classificado para as quartas de final pode gerar memes, beleza?</p>
											@else
												<p>Nosso júri infalível está decidindo os memes que vão pras quartas de final. Aguarde.</p>
											@endif
										@endif
									</div>
								@break

								@case(3)
									<div class="container-fluid-middle full"><span>&nbsp;</span></div>
									<div class="container-fluid-msg">
										<div class="title-login">
											<h1>Cadastro encerrado</h1>
										</div>
										@if (!empty($message))
											<p>{!! $message !!}</p>
										@else
											<p>Segura essa ansiedade, fera braba dos memes. Nossa geração de memes está fechada até 10 da manhã.</p>
										@endif
									</div>
								@break

								@case(4)
									<div class="container-fluid-middle full"><span>&nbsp;</span></div>
									<div class="container-fluid-msg">
										<div class="title-login">
											<h1>Cadastro encerrado</h1>
										</div>
										@if (!empty($message))
											<p>{!! $message !!}</p>
										@endif
									</div>
								@break
							@endswitch
						</div>
					</div>
				</div>
				@include('site/includes/disclaimer')
			</div>
		</div>
	</section>
@endsection