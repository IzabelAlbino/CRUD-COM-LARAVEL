<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Cadastro de clientes</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@200;600&display=swap" rel="stylesheet">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">

        <!-- Styles -->
        <style>
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Nunito', sans-serif;
                font-weight: 200;
                height: 100vh;
                margin: 0;
            }

            .full-height {
                height: 100vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .content {
                text-align: center;
                
            }

            .title {
                font-size: 70px;
            }

            .links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 13px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
            }

            .form-group {
                font-size: 30px;
                font-weight: 600;
                color: #fff;
            }

            .button {
                font-size: 50px;
            }

        </style>
    </head>
    <body>
        <div class="container">
            <div class="title m-b-md">
                Lista de clientes
            </div>
            <div>
                <a href="/create" class="btn btn-primary">Ir para cadastro</a>
                <table class="table mt-2">
                    <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Nome</th>
                            <th scope="col">Endereço</th>
                            <th scope="col">Bairro</th>
                            <th scope="col">Município</th>
                            <th scope="col">Estado</th>
                            <th scope="col">CEP</th>
                            <th scope="col">Telefone</th>
                            <th scope="col">Opção</th>

                        </tr>
                    </thead>
                    <tbody>
                        @php
                            $num = 1;
                        @endphp
                        @foreach ($listaDeClientes as $cliente)
                            <tr>
                                <th scope="row">{{ $num++ }}</th>
                                <td>{{ $cliente['nome'] }}</td>
                                <td>{{ $cliente['endereco'] }}</td>
                                <td>{{ $cliente['bairro'] }}</td>
                                <td>{{ $cliente['municipio'] }}</td>
                                <td>{{ $cliente['estado'] }}</td>
                                <td>{{ $cliente['cep'] }}</td>
                                <td>{{ $cliente['telefone'] }}</td>
                                <td>
                                    <a href="/excluir/{{ $cliente['id'] }}" class="btn btn-outline-danger">Excluir</a>
                                    <a href="/atualizar/{{ $cliente['id'] }}" class="btn btn-outline-secondary">Atualizar</a>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>    
    </body>
</html>
