@extends('plantilla') {{-- Extiende de una plantilla - Nombre del archivo de la plantilla del cual me basare --}}


{{-- Por cada sección que cambiará hay que colocar @section y finalizarla con @endsection --}}
@section('titulo') {{-- En @section va la info que quiero que vaya --}}
Vista del estudiante
@endsection  {{-- Termina la 1ra Sección --}}

@section('Bienvenidos a mi página')
WELCOME
@endsection  {{-- Termina la 2da Sección  --}}

 @section('contenidoQcambia') {{-- Control + k + c = comentar la linea selccionada  --}}
<h1>Estudiante {{ $lamatricula }}</h1>
@endsection  {{-- Termina la 3ra Sección  --}}