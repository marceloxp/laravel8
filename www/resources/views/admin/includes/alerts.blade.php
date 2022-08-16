{{-- blade print if session has messages --}}
@if(session()->has('messages'))
	<div class="alert alert-success alert-dismissible">
		<button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
		<h5><i class="icon fas fa-check"></i> Mensagem do Sistema</h5>
		@foreach (session()->get('messages') as $message)
			<p>{{ $message }}</p>
		@endforeach
	</div>
@endif

{{-- blade print if session has erros messages --}}
@if(session()->has('errors'))
	<div class="alert alert-danger alert-dismissible">
		<button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
		<h5><i class="icon fas fa-check"></i> Mensagem do Sistema</h5>
		@foreach (session()->get('errors') as $error)
			<p>{{ $error }}</p>
		@endforeach
	</div>
@endif

{{-- blade print if session has erros or messages --}}
@if(session()->has('errors') || session()->has('messages'))
	<script>
		// hide alert after 3 seconds
		setTimeout(function() {
			$('.alert').fadeOut();
		}, 3000);
	</script>
@endif