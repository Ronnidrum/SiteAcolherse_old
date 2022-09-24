@extends('site.layout.base.basico')

@section('conteudo')
        <div class="containers" >
            <div class="container">
                @include('site.layout.parciais._carrossel')
                @include('site.layout.parciais._menuMobile')
            </div>
            <div class="contexto sobre">
                <div class="texto">
                    <p><h3>
                        O Acolher-se é um projeto idealizado por psicólogas para atendimentos individuais e em grupo, com o intuito
                        de proporcionar um espaço de acolhimento para que, ao se sentir acolhida, a pessoa possa acolher a si mesma
                        com seus pensamentos e sentimentos. O projeto visa reconhecer o indivíduo em suas singularidades, através da
                        relação terapêutica, propiciando conhecimento sobre o próprio funcionamento emocional, levando-o a
                        aceitar-se e acolher-se.</h3>

                    </p>
                </div>
            </div>

        </div>

@endsection
