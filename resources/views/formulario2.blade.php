<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset ('/css/form.css')}}"/>
    
    <title>Formulario2</title>

</head>
<body> 
   
<div class="container">
			<h4>Registro</h4>
		<form class="form_reg" action="{{ url('formulario2') }}" method="POST" >
            @csrf
            @yield('cuerpo')
			<input name="nombre" value="{{old('nombre')}}" class="input" type="text" placeholder="Nombre" required autofocus>
            @error('nombre')
            {{$message}}
            @enderror
            <input name="apellidos" value="{{old('apellidos')}}" class="input" type="text" placeholder="Apellido" required>
            @error('apellidos')
            {{$message}}
            @enderror
            <input name="area" value="{{old('area')}}" class="input" type="text" placeholder="Área" required>
            @error('area')
            {{$message}}
            @enderror
            <input name="numero_nomina" value="{{old('numero_nomina')}}" class="input" type="number" placeholder="Número_nomina" required>
            @error('numero_nomina')
            {{$message}}
            @enderror
            
            <p>Estoy de acuerdo con <a href="#">Terminos y Condiciones</a></p>
            <button class="btn" type="submit">Enviar</button>

                <p><a href="#">¿Ya se ha registrado?</a></p>
		</form>
    </div>
	
</body>

</html>