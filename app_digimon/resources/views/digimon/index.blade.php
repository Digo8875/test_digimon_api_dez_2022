<!DOCTYPE html>
<html lang="pt-br">
    <head>

        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- CSRF Token -->
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>Teste Digimon API</title>

        <!-- Scripts -->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.1/jquery.min.js" integrity="sha512-aVKKRRi/Q/YV+4mjoKBsE4x3H+BkegoM/em46NNlCqNTmUYADjBbeNefNxYV7giUp0VxICtqdrbqU7iVaeZNXA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js" integrity="sha384-cuYeSxntonz0PPNlHhBs68uyIAVpIIOZZ5JqeqvYYIcEL727kskC66kF92t6Xl2V" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/js/fontawesome.min.js" integrity="sha512-nKvEIGRKw2OQCR34yLfnWnvrOBxidLG9aK+vzsBxCZ/9ZxgcS4FrYcN+auWUTkCitTVZAt82InDKJ7x+QtKu6g==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
        <script src="{{ asset('js/digimon.js') }}"></script>

        <!-- Fonts -->
        <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

        <!-- Styles -->
        <link href="{{ asset('css/style.css') }}" rel="stylesheet">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    </head>

    <body class="d-flex justify-content-center align-items-center">

        <div class="row w-100 m-0 p-0 justify-content-center">
            <div class="col-12 col-lg-6 mb-5">
                <div class="row m-0 p-0 justify-content-center">
                    <div class="col-12 m-0 my-3 p-0 text-center font-size-18px">
                        Pesquise por:
                    </div>
                    <div class="col-12 col-md-3 col-xl-2 my-2">
                        <a href="{{ route('digimon_index') }}" class="form-control btn btn-primary">
                            Todos
                        </a>
                    </div>
                    <div class="col-12 col-md-4 col-lg-6 col-xl-5 my-2">
                        <input id="digimon_name" name="digimon_name" type="text" class="form-control" placeholder="Nome do Digimon">
                    </div>
                    <div class="col-12 col-md-4 col-lg-6 col-xl-5 my-2">
                        <select id="digimon_level" name="digimon_level" class="form-select">
                            <option value="" disabled selected>Level do Digimon</option>
                            <option value="Fresh">Fresh</option>
                            <option value="In Training">In Training</option>
                            <option value="Training">Training</option>
                            <option value="Rookie">Rookie</option>
                            <option value="Champion">Champion</option>
                            <option value="Ultimate">Ultimate</option>
                            <option value="Mega">Mega</option>
                            <option value="Armor">Armor</option>
                        </select>
                    </div>
                </div>
            </div>

            <div class="col-12 col-lg-10">
                <div id="digimon_data_content" class="row m-0 p-0 justify-content-center">

                </div>
            </div>

            <div id="div_loading" class="invisible">
                <div class="col-12 col-md-6 col-lg-5 col-xl-3 p-4 shadow rounded text-center">
                    <div class="spinner-border" role="status"></div>
                    <div>
                        Carregando...
                    </div>
                </div>
            </div>
        </div>

    </body>
</html>
