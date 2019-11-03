@extends('layouts.app')

@section('content')



<div class="container pt-5">

        <div class="cadastro-time">

            <div class="header">
                <div class="col text-center">
                    <h1>CADASTRAR JOGADOR</h1>
                    <h5>Obrigatório ter Time cadastrado</h5>
                </div>
            </div>

            <form action="/jogador/store" method="post" class="cadastrar-time pt-5">
                @csrf
                <div class="row pb-5">
                    <div class="titulo"><h2>NOME :</h2></div>
                    <div class="inputText">
                            <input class="caixaText" type="text" name="nome_jogador" id="nome_jogador">
                            @error('nome_jogador')
                                <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                    </div>
                </div>    

                <div class="row pb-5">
                    <div class="titulo"><h2>TIME :</h2></div>
                    <select name="time_id" class="ml-2">
                            @forelse ($datas as $data)
                                <option value="{{ $data->id }}">{{ $data->nome }}</option>
                            @empty
                                <p>Sem Registros</p>
                            @endforelse  
                            </select>
                        @error('time_id')
                            <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    <div class="inputText">

                    </div>
                </div> 

                <div class="row pb-5">
                    <div class="titulo"><h2>POSIÇÃO :</h2></div>
                    <div class="inputText">
                            <input class="caixaText" type="text" name="posicao" id="posicao">
                            @error('posicao')
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