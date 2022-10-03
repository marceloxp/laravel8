@extends('layouts.site')

@section('head')
    @parent
    {{-- Home Head --}}
@endsection

@section('content')
    @include('site/partials/home')
@endsection

@section('bottom_scripts')
    {{-- Home Bottom Scripts --}}
@endsection
