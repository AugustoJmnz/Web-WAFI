<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset ('/css/form.css')}}"/>
    
    <title>Formulario</title>

</head>
<body> 
   
<div class="container">
   

			<h4>Registro</h4>
		<form class="form_reg" action="{{ url('subirimagenes') }}" method="POST" enctype="multipart/form-data">
            @csrf 
             
             {{-- <p>Id del producto:{{$elidform}}</p> 
          
			<input name="tour" value="{{old('tour')}}" class="input" type="text" placeholder="Nombre del tour" required autofocus>
            @error('tour')
            {{$message}}
            @enderror
            <input name="precio" value="{{old('precio')}}" class="input" type="number" placeholder="Precio" required>
            @error('precio')
            {{$message}}
            @enderror
            <input name="guia" value="{{old('guia')}}" class="input" type="text" placeholder="Guía" required>
            @error('guia')
            {{$message}}
            @enderror
            <input name="amen" value="{{old('amen')}}" class="input" type="text" placeholder="Amenidades" required>
            @error('amen')
            {{$message}}
            @enderror
            <input name="descp" value="{{old('descp')}}" class="input" type="text" placeholder="Descripción" required>
            @error('descp')
            {{$message}}
            @enderror
            --}}
            <input type="file" name="fotografia" value="{{old('fotografia')}}" placeholder="Subir imagen">
            @yield('cuerpo')
            @error('fotografia')
            {{$message}}
            @enderror
            <p>Estoy de acuerdo con <a href="#">Terminos y Condiciones</a></p>
            <button class="btn" type="submit">Enviar/Subir imagen</button>

                <p><a href="#">¿Ya se ha registrado?</a></p>
		</form>
    </div>
	
</body>

</html>