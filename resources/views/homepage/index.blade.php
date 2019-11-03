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
                                        <button type="submit" formaction="/export" class="btn btn-primary">Download Lista</button>
                                </div>
                        </div>
                </form>

                <div class="tabela pb-5">
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


                <div class="FileXML pb-5">
                        <div class="headerXML pb-5">
                                <h1 class="title">Solicitar XML</h1>  
                                <h6 class="sub-title">Usando Jquery + AJAX</h6>  
                        </div>

                        <button type="button" class="btn btn-primary" id="getRequest">Solicitar</button>
                        <div id="getRequestData">
                        </div>
                        <div class="loading">
                                        <svg version="1.1" xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 32 32">
                                                <path d="M22.781 16c4.305-2.729 7.219-7.975 7.219-14 0-0.677-0.037-1.345-0.109-2h-27.783c-0.072 0.655-0.109 1.323-0.109 2 0 6.025 2.914 11.271 7.219 14-4.305 2.729-7.219 7.975-7.219 14 0 0.677 0.037 1.345 0.109 2h27.783c0.072-0.655 0.109-1.323 0.109-2 0-6.025-2.914-11.271-7.219-14zM5 30c0-5.841 2.505-10.794 7-12.428v-3.143c-4.495-1.634-7-6.587-7-12.428v0h22c0 5.841-2.505 10.794-7 12.428v3.143c4.495 1.634 7 6.587 7 12.428h-22zM19.363 20.925c-2.239-1.27-2.363-2.918-2.363-3.918v-2.007c0-1 0.119-2.654 2.367-3.927 1.203-0.699 2.244-1.761 3.033-3.073h-12.799c0.79 1.313 1.832 2.376 3.036 3.075 2.239 1.27 2.363 2.918 2.363 3.918v2.007c0 1-0.119 2.654-2.367 3.927-2.269 1.318-3.961 3.928-4.472 7.073h15.677c-0.511-3.147-2.204-5.758-4.475-7.075z"></path>
                                        </svg>
                        </div>
                </div>
        </div>
@endsection
<script src="{{ asset('js/jquery-3.4.1.js') }}" ></script>
<script>
        $(document).ready(function() 
        {
                $('.loading').hide();
                $("#getRequest").click(function() 
                {
                        
                
                        $.ajax(
                        {
                                type: 'get',
                                url: '/exportXML',
                
                                success: function (data) 
                                {
                                        var appendString = "<a href={{ asset('storage/ArquivosTemp/file.txt') }}>Download</a>";             
                                        $('#getRequestData').html(appendString);
                                }
                        });

                });
                $(document).ajaxStart(function()
                {
                        $('#getRequestData').hide();
                        $('.loading').show();
                        }).ajaxStop(function(){
                        $('.loading').hide();
                        $('#getRequest').hide();
                        $('#getRequestData').fadeIn(1000);
                });
        });
</script>