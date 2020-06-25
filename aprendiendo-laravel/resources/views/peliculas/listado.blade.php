
@include('includes.header')


<!-- Imprimir por pantalla -->
<h1> {{$titulo}} </h1> <!-- Estas llaves dobles es lo mismo que el echo -->
<table border="1">
    <tr>
        <th>
            PELICULA
        </th>
    </tr>

    @foreach ($listado as $item)
    <tr>
        <td>{{$item}}</td>
    </tr>
    @endforeach
</table>

<!-- Estos son los comentarios -->

<!-- Esto es un comentario en HTML-->
<?php  //Esto es un comentario en PHP ?>
{{--Esto es un comentario en BLADE--}}

<!-- Saber si existe una variable -->
<?=isset($director) ? 'director' : 'no hay directorS'?><!-- En php -->
{{ $director ?? 'No hay ningun director' }}<!-- Con BLADE -->

<br>

<!-- Condicionales en BLADE -->
@if($titulo && count($listado)>=5)
    <h4>El titulo existe y es: {{$titulo}}</h4>
@elseif($titulo)
    <h4>El titulo existe y el listado no es mayor a 5</h4>
@else
    <h4>La condicion no se ha cumplido</h4>
@endif

<!-- BUCLEs -->

@for($i = 0; $i <= 20; $i++)
    El numero es: {{$i}}
    <br>
@endfor

<hr>

<?php $contador = 1 ?>
@while($contador <= 50)
    El numero es: {{$contador}}
    <?php $contador++ ?>
    <br>
@endwhile

@include('includes.footer')

