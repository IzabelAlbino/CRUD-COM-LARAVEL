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
                Cadastro de clientes
            </div>
            <form action="/atualizar/{{ $client['id'] }}" method="POST">
                @csrf
                <div>
                    <a href="/" class="btn btn-primary">Voltar para página</a>
                    @if(isset($error))
                        <div class="alert alert-danger mt-2">
                            {{ $error }}
                        </div>
                    @endif
                    <div class="mt-4">
                        <div class="input-group mb-3">
                            <input value="{{ $client['nome'] }}" type="text" name="nome" class="form-control" placeholder="Nome" >
                        </div>

                        <div class="input-group mb-3">
                            <input value="{{ $client['endereco'] }}" type="text" name="endereco" class="form-control" placeholder="Endereço" >
                        </div>

                        <div class="input-group mb-3">
                            <input value="{{ $client['bairro'] }}" type="text" name="bairro" class="form-control" placeholder="Bairro" >
                        </div>

                        <div class="input-group mb-3">
                            <input value="{{ $client['municipio'] }}" type="text" name="municipio" class="form-control" placeholder="Município" >
                        </div>

                        <div class="input-group mb-3">
                            <input value="{{ $client['estado'] }}" type="text" name="estado" class="form-control" placeholder="Estado" >
                        </div>

                        <div class="input-group mb-3">
                            <input value="{{ $client['cep'] }}" type="number" name="cep" class="form-control" placeholder="CEP" >
                        </div>

                        <div class="input-group mb-3">
                            <input value="{{ $client['telefone'] }}" type="tel" name="telefone" class="form-control" placeholder="Telefone" >
                        </div> 

                        <button type="submit" class="btn btn-primary">Atualizar</button>
                    </div>
                </div>
            </form>
        </div>
    </body>
</html>
