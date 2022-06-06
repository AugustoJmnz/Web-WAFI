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
		<form class="form_reg" action="{{ url('formulario') }}" method="POST">
            @csrf
            <p>Id del producto:{{$elidform}}</p>
			<input name="tour" class="input" type="text" placeholder="Nombre del tour" required autofocus>
            <input name="precio" class="input" type="text" placeholder="Precio" required>
            <input name="guia" class="input" type="text" placeholder="Guía" required>
            <input name="amen" class="input" type="text" placeholder="Amenidades" required>
            <input name="descp" class="input" type="text" placeholder="Descripción" required>
            <p>Estoy de acuerdo con <a href="#">Terminos y Condiciones</a></p>
            <button class="btn" type="submit">Enviar</button>

                <p><a href="#">¿Ya se ha registrado?</a></p>
		</form>
	</div>
</body>

</html>