@extends('layouts.default')

@section('content')
@viteReactRefresh
@vite(['resources/sass/markdownapp.scss', 'resources/js/markdownapp.js'])

<div id="markdownapp-root"></div>

@stop