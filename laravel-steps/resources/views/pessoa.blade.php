
@extends('layouts.default')


@push('styles') 
    <link rel="stylesheet" href=" {{ asset('css/style.css') }}  ">
@endpush
@section('content')
<main>
    <h2>  fazendo template com Blade </h2>
    <p> {{  $nome  }}  {{ $sobrenome }} </p>

    <?php 
        $array = [ "nome" => 'paz' , "amigo" => 'teste' ];
        $array2 = [  'paz' ,  'teste' , 'amigao' ];
    ?>

    @if( false)
        {{ "gabriel" }}
    @endif

    <br><br>

    <ul>

        @foreach ( $array as $user )
        
        <li>
            {{ $user }}    
        </li>
            
        @endforeach
    </ul>

    @for($i = 0 ; $i <= count($array2) - 1 ; $i++ )
        <p> {{ $array2[$i]  }}  </p>
    @endfor

    <br><br><br>

    

</main>
@endsection