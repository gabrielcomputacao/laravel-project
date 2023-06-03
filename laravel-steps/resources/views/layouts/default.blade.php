<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!-- asset pega o endereço do seu projeto, caso tenha uma variavel de ambiente
        ASSET_URL , ele pega o caminho , exemplo caso seja uma CDN
    -->
    <link rel="stylesheet" href= "{{ asset('css/user.css') }}">
    <!-- com a diretiva stack voce organiza a ordem tanto de styles quanto de scripts dentro do arquivo
    padrao, esses arquivos foram chamados na view por meio da diretiva aberta push('styles') e depois fechada
    com endpush
    -->
    @stack('styles')
     
</head>
<body>

    <h3>Padrão</h3>
    
    @yield('content')


    <script src="/js/user.js"></script>
</body>
</html>