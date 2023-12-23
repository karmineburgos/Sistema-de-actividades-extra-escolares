@extends('app')
@section('contend')
<div class="container w-25 border p-4">
    <form>
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Correo electronico</label>
            <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
            <div id="emailHelp" class="form-text">Inserta aqui tu correo.</div>
        </div>
        <button type="submit" class="btn btn-primary">Enviar</button>
    </form>
</div>
@endsection
