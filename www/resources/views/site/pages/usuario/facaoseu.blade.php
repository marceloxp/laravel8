@extends('layouts.site')

<script>
	@if (customer_logged() && (!empty($user->influencer)))
		window.influencer_border = '{{ $user->influencer->slug }}.png';
	@else
		window.influencer_border = null;
	@endif
</script>

@php
	$message = get_url_message('faca_o_seu');
@endphp

@section('vendor.css')
	@parent
	<!-- appcanvas -->
	{{ css('/appcanvas/css/style.css') }}
	{{ css('/appcanvas/js/lib/dgjsfw/dgjsfw.css') }}
@endsection

@section('content')
	@include('site/includes/sidebar')
	<section class="section">
		<div class="wrapper-center">
			<div class="content-full">
				<div class="content-wrapper">
					<div class="content-nav has-nav" data-title="Gerador_de_memes.exe">
						<a href="javascript:window.history.back();" class="nav-back" title="Voltar">&nbsp;</a>
						<a href="{{ route('home') }}" class="nav-close" title="Fechar">&nbsp;</a>
					</div>
					<div class="content-scroll">

						{{ print_alert() }}

						<div class="container-fluid">

							<div id="makeYourMeme">

								<div class="box-data">
									<div class="title">
										@if (!empty($message))
											<h1>{{ game_create_title() }}</h1>
											<p>{!! $message !!}</p>
										@else
											@if (game_not_creatable_and_not_votable())
												<h1>{{ game_create_title() }}</h1>
												<p>Segura essa ansiedade, fera braba dos memes. Nossa geração de memes está fechada até 10 da manhã.</p>
											@else
												@if (game_is_creatable())
													<h1>{{ game_create_title() }}</h1>
													<p>Mostre seu talento usando nosso gerador de memes. Primeiro selecione sua imagem e depois adicione seu texto e figurinhas.</p>
												@else
													@if (game_is_votable() && (!game_is_fase4()))
														<h1>{{ game_create_title() }}</h1>
														<p>Agora é hora de <a href="{{ route('vote1') }}" title="votar nos memes" target="_self">votar nos memes</a> com a cara do Brasil.<br/> Aguarde a liberação da próxima etapa de criação.</p>
													@else
														<h1>{{ game_create_title() }}</h1>
														<p>Agora é hora de <a href="{{ route('vote1') }}" title="votar nos memes" target="_self">votar nos memes</a> com a cara do Brasil.</p>
													@endif
												@endif
											@endif
										@endif
									</div>
									<div class="theme-day">
										@if ($fase >= 2)
											@if ($theme->inMiddle())
												{!! img_background('/images/makeYourMeme/background-size.png', url('/images/themes/middle_free.png')) !!}
											@else
												@if (game_not_creatable_and_not_votable())
													{!! img_background('/images/makeYourMeme/background-size.png', url('/images/themes/voltamos_breve.png')) !!}
												@else
													{!! img_background('/images/makeYourMeme/background-size.png', url('/images/themes/' . $theme->image . '.png')) !!}
												@endif
											@endif
										@else
											@if (game_not_creatable_and_not_votable())
												{!! img_background('/images/makeYourMeme/background-size.png', url('/images/themes/voltamos_breve.png')) !!}
											@else
												@if (game_create_ended())
													{!! img_background('/images/makeYourMeme/background-size.png', url('/images/themes/tema_livre.png')) !!}
												@else
													{!! img_background('/images/makeYourMeme/background-size.png', url('/images/themes/' . $theme->image . '.png')) !!}
												@endif
											@endif
										@endif
									</div>
									<a href="{{ route('sugerir_ibagens') }}" title="Sugerir imagens" target="_self">Sugerir imagens</a>
								</div>

								<div class="box-tool" data-success="Lacrou, seu meme foi gerado com sucesso. Você receberá um email assim que seu meme for aprovado. Fique ligado.">
									<div class="box-nav">
										<ul>
											<li>
												<a href="{{ route('facaoseu') }}" title="Voltar" target="_self">
													{!! img_background('/images/makeYourMeme/bt-size.png', '/images/makeYourMeme/bt-voltar.png') !!}
												</a>
											</li>
										</ul>
									</div>
									@include('site/includes/appcanvas')
								</div>
							</div>
						</div>

						@if($errors->any())
							<div class="alert alert-danger" role="alert">
								{{ $errors->first() }}
							</div>
						@endif
					</div>
				</div>
				@include('site/includes/disclaimer')
			</div>
		</div>
	</section>
@endsection

@section('bottom_scripts')
	@parent
	
	<!-- JS : Framework -->
	{{ javascript('appcanvas/js/lib/dgjsfw/dgjsfw.js') }}
	{{ javascript('appcanvas/js/lib/dgjsfw/modules/debug.js') }}
	{{ javascript('appcanvas/js/lib/dgjsfw/modules/utils.js') }}
	{{ javascript('appcanvas/js/lib/dgjsfw/modules/time_manager.js') }}

	<!-- JS : Libs -->
	{{ javascript('appcanvas/js/lib/jquery-1.8.3.min.js') }}
	{{ javascript('appcanvas/js/lib/modernizr.js') }}
	{{ javascript('appcanvas/js/lib/fontfaceobserver.js') }}
	{{ javascript('appcanvas/js/lib/fabric.min.js') }}

	<!-- JS : Main Application -->
	{{ javascript('appcanvas/js/app/main.js') }}

	<!-- JS : Application Modules -->
	{{ javascript('appcanvas/js/app/implementations/m_init.js') }}
	{{ javascript('appcanvas/js/app/implementations/m_mainloop.js') }}
	{{ javascript('appcanvas/js/app/implementations/m_preloadappdata.js') }}
	{{ javascript('appcanvas/js/app/implementations/m_checkbrowserrequirements.js') }}
	{{ javascript('appcanvas/js/app/implementations/m_changestate.js') }}
	{{ javascript('appcanvas/js/app/implementations/m_guifactory.js') }}

	{{ javascript('appcanvas/js/app/classes/c_observable.js') }}

	{{ javascript('appcanvas/js/app/states/c_state_base.js') }}
	{{ javascript('appcanvas/js/app/states/c_state_null.js') }}
	{{ javascript('appcanvas/js/app/states/c_state_preload.js') }}
	{{ javascript('appcanvas/js/app/states/c_state_gerador_de_memes.js') }}
	<!-- appcanvas -->
@endsection