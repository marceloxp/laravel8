@extends('layouts.site')

@section('content')
	<script type="text/javascript">
		function settingCombo(p_elem)
		{
			let _this = document.getElementsByName(p_elem)[0];
			let elemDiv = _this.parentNode;
			let dataValue = (_this.value == '') ? _this.childNodes[0].text : _this.options[_this.selectedIndex].text;
			elemDiv.setAttribute('data-value', dataValue);
			
			_this.onchange = function()
			{
				elemDiv.setAttribute('data-value', _this.childNodes[_this.selectedIndex].text);
			};

			_this.onfocus = function()
			{
				elemDiv.classList.add('focus');
			};

			_this.onblur = function()
			{
				elemDiv.classList.remove('focus');
			};
		}
	</script>
	@php
		$new  = empty($cliente->id);
		$edit = !$new;
	@endphp
	<section class="section">
		<div class="wrapper-center">
			<div class="content-full">
				<div class="content-wrapper">
					<div class="content-nav has-nav" data-title="Faça_seu_cadastro.exe">
						<a href="javascript:window.history.back();" class="nav-back" title="Voltar">&nbsp;</a>
						<a href="{{ route('home') }}" class="nav-close" title="Fechar">&nbsp;</a>
					</div>
					<div class="content-scroll content-scroll-form">

						@php
							$messages = Session::pull('message');
							$cliente->setErrors($errors);
							$input_options = ['label' => false, 'divwrap' => true];
						@endphp

						@if($messages)
							<div class="alert alert-success" role="alert">
								{{ $messages }}
							</div>
						@endif

						<div class="container-fluid">
							{!! NoCaptcha::renderJs() !!}
							{!! Form::open(['url' => url()->full(), 'method' => 'POST', 'id' => 'form-cadastro', 'autocomplete' => 'off']) !!}
								<div class="form-list">
									{!! $cliente->input('id') !!}

									{{ \Form::hidden('facebook_id', ($facebook['code'] ?? '')) }}
									<ul class="form-title">
										<li class="w100 w100-mobi">
											<div class="title-register">
												<h1>Faça seu <br/> cadastro</h1>
												<p>Chega de fazer meme de graça, agora seu trabalho vai ser reconhecido. Cadastre-se aqui e venha fazer parte de nossa estartape. Você pode ganhar a bagatela de 300 reais por meme vencedor (<a href="{{ route('regulamento') }}" target="_self" title="consulte regulamento">consulte regulamento</a>).<br/> #BoraFicarRicoFazendoMemes</p>
											</div>
										</li>
										{{-- <li class="w35 w35-mobi">
											@if (!$logged)
												@if (!$facebook)
													<div class="button">
														<a href="{{ route('facebook_auth', ['redirect' => 'cadastro']) }}">Cadastrar-se com o Facebook</a>
													</div>
												@else
													<div class="button">
														<a href="{{ route('facebook_clear', ['redirect' => 'cadastro']) }}">Desconectar do Facebook</a>
													</div>
												@endif
											@else
												@if (empty($cliente->facebook_id))
													<div class="button">
														<a href="{{ route('facebook_auth', ['redirect' => 'cadastro']) }}">Conectar-se ao Facebook</a>
													</div>
												@endif
											@endif
										</li> --}}
									</ul>
									<ul class="half">
										<li class="w100" data-disclaimer="*Campos obrigatórios">{!! $cliente->input('name', $input_options + ['default_value' => ($facebook['name'] ?? '')]) !!}</li>
										<li class="w100">
											@if ($new)
												{!! $cliente->input('email', $input_options + ['default_value' => ($facebook['email'] ?? '')]) !!}
											@else
												<input class="form-control" disabled="disabled" value="{{ $cliente->email }}">
											@endif
										</li>
										<li class="w100 w50-mobi">{!! $cliente->input('phone', $input_options) !!}</li>
										<li class="w100 w50-mobi">{!! $cliente->input('cellphone', $input_options) !!}</li>
										<li class="w50-mobi">
											@if ($new)
												{!! $cliente->input('cpf', collect($input_options)->merge(['disabled' => 'disabled'])->toArray()) !!}
											@else
												<input class="form-control" disabled="disabled" value="{{ $cliente->cpf }}">
											@endif
										</li>
										<li class="w50-mobi">{!! $cliente->input('born', $input_options + ['field_attr' => ['autocomplete' => 'off']]) !!}
											{{-- <span>Voçê precisa<br/> ter mais de<br/> 18 anos.</span> --}}</li>
										<li class="w100">{!! $cliente->input('gender', $input_options) !!}</li>
										@php
											$custom_attr = ['field_attr' => ['maxlength' => 15]];
											$pwd_input_options = array_merge($custom_attr, $input_options);
										@endphp
										<li class="w100 w50-mobi">{!! $cliente->input('password', $pwd_input_options) !!}</li>
										<li class="w100 w50-mobi">
											<div class="confirm_password">
												<input class="form-control" placeholder="Confirme sua senha *" autocomplete="new-password" maxlength="15" name="confirm_password" type="password">
											</div>
										</li>
										<li class="w100 w50-mobi">{!! $cliente->input('cep', $input_options) !!}</li>
										<li class="w100">
											<a href="http://www.buscacep.correios.com.br/sistemas/buscacep/BuscaCepEndereco.cfm" target="_blank" title="Não sei meu CEP">Não sei meu CEP</a>
										</li>
									</ul>
									<ul class="half">
										<li class="w100">{!! $cliente->input('address', $input_options) !!}</li>
										<li class="w50-mobi">{!! $cliente->input('address_number', $input_options) !!}</li>
										<li class="w50-mobi">{!! $cliente->input('complement', $input_options) !!}</li>
										<li class="w100">{!! $cliente->input('neighborhood', $input_options) !!}</li>
										<li class="w50-mobi">{!! $cliente->input('state', $input_options) !!}</li>
										<li class="w50-mobi">{!! $cliente->input('city_id', $input_options) !!}</li>
										<li class="w100">
											@if ($new)
												{!! $cliente->input('influencer_id', $input_options) !!}
											@else
												<input class="form-control" disabled="disabled" value="{{ $cliente->influencer->name }}">
											@endif
										</li>
										<li class="w100">{!! $cliente->input('rules') !!}</li>
										<li class="w100">{!! $cliente->input('newsletter') !!}</li>
										@if (config('game.whatsapp'))
											<li class="w100">{!! $cliente->input('whatsapp') !!}</li>
										@endif
										<li class="w100 wCaptcha">{!! NoCaptcha::display() !!}</li>
										<li class="w100">
											<div class="button">
												{{ Form::submit( ($logged) ? 'Salvar' : 'Cadastre-se'  , ['class' => 'btn btn-primary']) }}
											</div>
										</li>
									</ul>

									<script type="text/javascript">
										let names = 
										[
											'state', 
											'city_id', 
											'gender', 
											'influencer_id'
										]; 

										for(var k in names)
										{
											settingCombo(names[k]);
										}
									</script>
								</div>
							{!! Form::close() !!}
						</div>
					</div>
				</div>
				@include('site/includes/disclaimer')
			</div>
		</div>
	</section>
@endsection
@section('scripts')
	{!! state_city() !!}
	@parent
@endsection