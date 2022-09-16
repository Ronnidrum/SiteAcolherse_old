@extends('site.layout.base.basico')

@section('conteudo')

    <section class = "section">
        <div class="containers" id="containers">

                @include('site.layout.parciais._carrossel')

            @include('site.layout.parciais._menuMobile')
        </div>
    </section>
    @include('site.layout.parciais._footer')
@endsection
