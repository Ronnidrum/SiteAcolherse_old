@extends('site.layout.base.basico')
@section('Titulo','Conteudo')
@section('conteudo')
    <div class="containers">
        Conteudo em desenvolvimento.
        <div>
            @include('site.layout.parciais._carrossel')

            @include('site.layout.parciais._menuMobile')
        </div>
    </div>
@endsection
