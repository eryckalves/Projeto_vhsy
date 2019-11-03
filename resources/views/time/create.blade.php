@extends('layouts.app')

@section('content')
    
    <div class="container pt-5">

        <div class="cadastro-time">

            <div class="header">
                <div class="col text-center">
                    <h1>CADASTRAR TIME</h1>
                </div>
            </div>

            <form action="/time/store" method="post" class="cadastrar-time pt-5">
                @csrf
                <div class="row pb-5">
                    <div class="titulo"><h2>NOME :</h2></div>
                    <div class="inputText">
                        <input class="caixaText" type="text" name="nome" id="nome">
                        @error('nome')
                            <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>
                </div>    

                <div class="row pb-5">
                    <div class="titulo"><h2>ESTADO :</h2></div>
                    <div class="inputText">
                        <input class="caixaText" type="text" name="estado" id="estado">
                        @error('estado')
                            <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>
                </div> 

                <div class="row pb-5">
                    <div class="titulo"><h2>SÉRIE :</h2></div>
                    <div class="inputText">
                        <input class="caixaText" type="text" name="serie" id="serie">
                        @error('serie')
                            <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>
                </div> 

                <div class="input-group pb-5">
                    <button class="app-form-button btn btn-primary" type="submit" >CADASTRAR</button>
                </div>
                
            </form>
        </div>
    </div>

@endsection