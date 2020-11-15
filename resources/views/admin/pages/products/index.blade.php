@extends('admin/layouts/app')

@section('content')
    <h1>Exibindo os produtos</h1>

    @component('admin.components.card')
        @slot('title')
        <h1>Título Card</h1>
        @endslot
        Um card de exemplo
    @endcomponent

    @include('admin.includes.alerts', ['content' => 'Alerta de preços de produtos'])

    <hr>

    {{ $teste }}

@endsection
