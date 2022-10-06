@extends('site.layout.base.basico')

@section('Titulo', 'Contato')
@section('conteudo')


    <div id ="form_contato" class = "row" >



        <div class="col-md-4 jumbotron mx-auto form1" >
            <div class = "contact" >
                @include('site.layout.parciais._menuMobile')

            </div>
            <div class = 'texto'><h1>Entre em contato</h1></div>


            <form class= 'col-md-13 form' method="POST" action = {{ route('email')}}  >
                @csrf
                @if ($message = Session::get('success'))
                <div class="alert alert-success alert-dismissible fade show" role = "alert">
                    {{$message}}
                @endif


                    <div class="form-outline mb-4 nome">
                    <label for="exampleFormControlInput1">Nome</label>
                    <input type="text" name = "nome" class="form-control txtnome" id="exampleFormControlInput1" placeholder="Digite o nome">
                    @if ($errors->has('nome'))
                        <div class="alert alert-warning" role = "alert">
                            {{$errors->first('nome')}}
                        </div>
                    @endif

                </div>

                <div class="form-group email" >
                    <label for="exampleFormControlInput1">Endereço de email</label>
                    <input type="email" name = "email" class="form-control txtemal" id="exampleFormControlInput1" placeholder="nome@exemplo.com">
                    @if ($errors->has('email'))
                        <div class="alert alert-warning" role = "alert">
                            {{$errors->first('email')}}
                        </div>
                    @endif
                </div>
                <div class="form-group text">
                    <label for="exampleFormControlTextarea1">Digite a mensagem</label>
                    <textarea name ="mensagem" class="form-control" id="exampleFormControlTextarea1 txtarea" rows="5"></textarea>
                    @if ($errors->has('mensagem'))
                        <div class="alert alert-warning" role = "alert">
                            {{$errors->first('mensagem')}}
                        </div>
                    @endif




                </div>
                <div class="button">
                    <button type="submit" class="btn-form">Enviar</button>
                </div>

            </form>

        </div>


    </div>


@endsection
