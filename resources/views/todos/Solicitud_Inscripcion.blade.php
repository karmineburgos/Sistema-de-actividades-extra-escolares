@extends('app')
@section('contend')
    <form action="guardar.php" method="POST">
    <div class="row mb-3">
        <label for="colFormLabel" class="form-label">Nombre(s)</label>
        <div class="col-sm-10">
            <input type="text" class="form-label" id="Nombre"  pattern="[a-zA-Z]{3,}$" required>
        </div>
    </div>

    <div class="row mb-3">
        <label for="colFormLabel" class="form-label">Apellido paterno</label>
        <div class="col-sm-10">
            <input type="text" class="form-label" id="Ap_pat" pattern="[a-zA-Z]{3,}$" required>
        </div>
    </div>
    <div class="row mb-3">
        <label for="colFormLabel" class="form-label">Apellido materno</label>
        <div class="col-sm-10">
            <input type="text" class="form-label" id="Ap_mat" pattern="[a-zA-Z]{3,}$" required>
        </div>
    </div>


    <div class="row mb-0">
        <label for="colFormLabel" class="form-label">Seleccionar tu Carrera</label>
    </div>
    <select class="form-label" aria-label="Default select example">
        <option value="1">INGENIERÍA INFORMÁTICA</option>
        <option value="2">INGENIERÍA EN SISTEMAS COMPUTACIONALES</option>
        <option value="3">INGENIERÍA GESTIÓN EMPRESARIAL</option>
        <option value="4">CONTADOR PUBLICO</option>
        <option value="5">INGENIERÍA INDUSTRIAL</option>
    </select>

    <div class="row mb-0">
        <label for="colFormLabel" class="form-label">Seleccionar tu Semestre</label>
    </div>
    <select class="form-label" aria-label="Default select example">
        <option value="1">1</option>
        <option value="2">2</option>
        <option value="3">3</option>
        <option value="4">4</option>
        <option value="5">5</option>
        <option value="6">6</option>
        <option value="7">7</option>
        <option value="8">8</option>
        <option value="9">9</option>
        <option value="10">10</option>
        <option value="11">11</option>
        <option value="12">12</option>
        <option value="13">13</option>
    </select>

    <div class="row mb-3">
        <label for="colFormLabel" class="form-label">Calle</label>
        <div class="col-sm-10">
            <input type="text" class="form-label" id="Calle" required >
        </div>
    </div>
    <div class="row mb-3">
        <label for="colFormLabel" class="form-label">Numero de casa</label>
        <div class="col-sm-10">
            <input type="number" class="form-label" id="Numero_casa" required>
        </div>
    </div>
    <div class="row mb-3">
        <label for="colFormLabel" class="form-label">Colonia</label>
        <div class="col-sm-10">
            <input type="text" class="form-label" id="Col" required>
        </div>
    </div>
    <div class="row mb-3">
        <label for="colFormLabel" class="form-label">Localidad</label>
        <div class="col-sm-10">
            <input type="text" class="form-label" id="localidad" required>
        </div>
    </div>    <div class="row mb-3">
        <label for="colFormLabel" class="form-label">Municipio</label>
        <div class="col-sm-10">
            <input type="text" class="form-label" id="municipio" required>
        </div>
    </div>
    <div class="row mb-3">
        <label for="colFormLabel" class="form-label">Estado</label>
        <div class="col-sm-10">
            <input type="text" class="form-label" id="estado"  pattern="[a-zA-Z]{3,}$" required>
        </div>
    </div>
    <div class="row mb-3">
        <label for="colFormLabel" class="form-label">Edad</label>
        <div class="col-sm-10">
            <input type="text" class="form-label" id="edad" pattern="[a-zA-Z]{3,}$" required>
        </div>
    </div>
    <div class="row mb-3">
        <label for="colFormLabel" class="form-label">Estatura</label>
        <div class="col-sm-10">
            <input type="text" class="form-label" id="estatura" required>
        </div>
    </div>

    <div class="row mb-3">
        <label for="colFormLabel" class="form-label">peso</label>
        <div class="col-sm-10">
            <input type="number" class="form-label" id="peso" required>
        </div>
    </div>
    <div class="row mb-0">
        <label for="colFormLabel" class="form-label">Selecciona tu tipo de sangre</label>
    </div>
    <select class="form-label" aria-label="Default select example">
        <option value="1">A+</option>
        <option value="2">A-</option>
        <option value="3">B+</option>
        <option value="4">B-</option>
        <option value="5">AB+</option>
        <option value="6">AB-</option>
        <option value="7">O+</option>
        <option value="8">O-</option>
    </select>

    <div class="row mb-3">
        <label for="colFormLabel" class="form-label">Curp</label>
        <div class="col-sm-10">
            <input type="text" class="form-label" id="curp" pattern="^[A-Z][A,E,I,O,U,X][A-Z]{2}[0-9]{2}[0-1][0-
9][0-3][0-9][M,H][A-Z]{2}[B,C,D,F,G,H,J,K,L,M,N,Ñ,P,Q,R,S,T,V,W,X,Y,Z]{3}[0-
9,A-Z][0-9]$" required>
        </div>
    </div>

    <div class="row mb-3">
        <label for="colFormLabel" class="form-label">Fecha de nacimiento</label>
        <div class="col-sm-10">
            <input type="date" class="form-label" id="Fec_nac" >
        </div>
    </div>

    <div class="row mb-0">
        <label for="colFormLabel" class="form-label">Selecciona tu genero</label>
    </div>
    <select class="form-label" aria-label="Default select example">
        <option value="1">Masculino</option>
        <option value="2">Femenino</option>
    </select>

    <div class="row mb-3">
        <label for="colFormLabel" class="form-label">Email</label>
        <div class="col-sm-10">
            <input type="email" class="form-label" id="correo">
        </div>
    </div>

    <div class="row mb-3">
        <label for="colFormLabel" class="form-label">Telefono celular</label>
        <div class="col-sm-10">
            <input type="text" class="form-label" id="tel_cel" pattern="[0-9]{10}$" required>
        </div>
    </div>

    <div class="row mb-3">
        <label for="colFormLabel" class="form-label">Telefono de casa</label>
        <div class="col-sm-10">
            <input type="text" class="form-label" id="tel_casa" pattern="[0-9]{10}$" required>
        </div>
    </div>

    <div class="row mb-0">
        <label for="colFormLabel" class="form-label">Estado civil</label>
    </div>
    <select class="form-label" aria-label="Default select example">
        <option value="1">Soltero</option>
        <option value="2">Casado</option>
        <option value="3">Divorciado</option>
        <option value="4">Viudo</option>
        <option value="5">Concubinato</option>
    </select>

    <div class="row mb-3">
        <label for="colFormLabel" class="form-label">Numero de seguro social</label>
        <div class="col-sm-10">
            <input type="text" class="form-label" id="nss" pattern="[0-9]{11}$" required>
        </div>
    </div>

    <div class="row mb-0">
        <label for="colFormLabel" class="form-label">¿Padece una enfermedad crónica actualmente?</label>
    </div>

    <div class="form-check">
        <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
        <label class="form-check-label" for="flexRadioDefault1">
            Si
        </label>
    </div>
    <div class="form-check">
        <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault2" checked>
        <label class="form-check-label" for="flexRadioDefault2">
            No
        </label>
    </div>

    <div class="row mb-3">
        <label for="colFormLabel" class="form-label">¿Cual enfermedad es?</label>
        <div class="col-sm-10">
            <input type="text" class="form-label" id="enfermedad" required>
        </div>
    </div>


    <div class="mb-3">
        <label for="exampleFormControlTextarea1" class="form-label">Sintomas que presente y no esten tratados medicamente</label>
        <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
    </div>

    <div class="col-12">
        <button class="btn btn-primary" type="submit">Submit form</button>
    </div>





</form>





@endsection
