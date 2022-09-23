@extends('site.layout.base.basico')

@section('Titulo', 'Contatos')
@section('conteudo')


    <div id ="form_contato" class="content">

            @include('site.layout.parciais._menuMobile')

        <div class="col-md-5 form" id="form">
            <form class="form-group formint" action = {{ route('contato')}} method="post" >
                @csrf
                <div class="form-group nome">
                    <label for="exampleFormControlInput1">Nome</label>
                    <input type="text" name = "nome" class="form-control txtnome" id="exampleFormControlInput1" placeholder="Digite o nome">
                    {{ ($errors->has('nome')) ?  $errors->first('nome')  : ''}}

                </div>

                <div class="form-group email" >
                    <label for="exampleFormControlInput1">Endereço de email</label>
                    <input type="email" name = "email" class="form-control txtemal" id="exampleFormControlInput1" placeholder="nome@exemplo.com">
                    {{$errors->has('email') ? $errors->first('email') : '' }}
                </div>
                <div class="form-group text">
                    <label for="exampleFormControlTextarea1">Digite a mensagem</label>
                    <textarea name ="mensagem" class="form-control" id="exampleFormControlTextarea1 txtarea" rows="10"></textarea>
                    {{ $errors->has('mensagem') ? $errors->first('mensagem') : '' }}
                </div>
                <div class= "button">
                    <button type="submit" class="btn-form">Enviar</button>
                </div>
            </form>
            </div>
    </div>

@endsection
