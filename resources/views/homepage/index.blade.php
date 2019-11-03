@extends('layouts.app')

@section('content')
        <div class="container">

                <div class="header py-5 text-center">
                        <h1 class="title">LISTA</h1>
                        <h6 class="sub-tittle">Usando <a href="https://laravel-excel.com/">laravel-excel</a> para o Download .CSV</h6>
                </div>
                <form action="/" method="get" id="busca">
                        <div class="row search-line">
                                <div class="caixaBusca">
                                <input class="search-input form-control" type="text" name="search_data" id="search_data" value="{{$search}}" placeholder="Filtrar por time ou jogador">
                                </div>
                                <div class="botaoBusca">
                                        <button type="submit" form="busca" class="btn btn-primary">Filtrar</button>
                                        <button type="submit" formaction="/export" class="btn btn-primary">Download File</button>
                                </div>
                        </div>
                </form>

                <div class="tabela">
                        <table class="content-table">
                                <thead>
                                        <tr>
                                        <th>NOME TIME</th>
                                        <th>SÉRIE</th>
                                        <th>NOME JOGADOR</th>
                                        <th>POSIÇÃO</th>
                                        <th>ESTADO TIME</th>
                                        </tr>
                                </thead>
                                <tbody>
                                        @forelse ($datas as $data)
                                        <tr>
                                                <td>{{$data->nome}}</td>
                                                <td>{{$data->serie}}</td>
                                                <td>{{$data->nome_jogador}}</td>
                                                <td>{{$data->posicao}}</td>
                                                <td>{{$data->estado}}</td>
                                        </tr>
                                        @empty
                                                <td>Sem registros</td>
                                         @endforelse
                                </tbody>
                        </table>
                        <span>{{$datas->links()}}</span>
                </div>
                
                @if(session('success'))
                        <h1>{{session('success')}}</h1>
                @endif
        </div>
@endsection