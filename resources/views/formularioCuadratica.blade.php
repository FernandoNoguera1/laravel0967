<!DOCTYPE html>
<html lang="en">
    @if (session('variables'))
        <div>
            <span>Raiz 1: {{session('variables')[0]}}</span>
            <span>Raiz 2: {{session('variables')[1]}}</span>
        </div>
    @endif
<h1>cuadratica</h1>

<form action="{{route('cuadratica.store')}}" method="POST" enctype="multipart/form-data">

@csrf

<label>
    ingresa tu primer valor:
    <br>
    <input type="number" name="a">
</label>
<br>
<label>
    Ingresa tu segundo valor:
    <br>
    <input type="number" name="b">
</label>
<br>
<label>
    Ingresa tu tercerc valor:
    <br>
    <input type="number" name="c">
</label>
<br><br><br>

<button type="submit">Enviar Formulario:</button>

<button>
    <a class="nav-link" href="pagina">EJERCICIOS</a>
</button>
</form>
