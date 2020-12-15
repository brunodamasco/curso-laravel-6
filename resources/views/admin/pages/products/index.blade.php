@extends('admin/layouts/app')

@section('title', 'Gestão de Produtos')

@section('content')
    <h1>Exibindo os produtos</h1>
    <a href="{{ route('products.create') }}">Cadastrar</a>
    <hr>

    @component('admin.components.card')
        @slot('title')
        <h1>Título Card</h1>
        @endslot
        Um card de exemplo
    @endcomponent

    <hr>

    @if (isset($products))
        @foreach ($products as $product)
            <p>{{ $product }}</p>
        @endforeach
    @endif

    <hr>

    @forelse ($products as $product)
        <p>{{ $product }}</p>
    @empty
        <p>Não existem produtos cadastrados.</p>
    @endforelse

    <hr>

    @include('admin.includes.alerts', ['content' => 'Alerta de preços de produtos'])

    <hr>

    {{ $teste }}
@endsection

@push('styles')
    <style>
        .last {background: #CCC;}
    </style>
@endpush

@push('scripts')
    <script>
        document.body.style.background = '#999'
    </script>
@endpush
