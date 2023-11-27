@extends('layouts.mainlayouts')
@section('content')

<div>

  @if (session('status'))
<div class="alert alert-success">
{{session('status')}}
</div>
@endif
<ul>
@foreach ($errors->all() as $error)
    <li class="alert alert-danger"> {{ $error }}</li>
@endforeach





    <h1 class="text-center">Ajouter un nouveau Client</h1>


    <form action="{{ route('docteurs.store') }}" method="POST" enctype="multipart/form-data">
    @csrf
    <div class="row">

        <div class="col-lg-6 mt-3">
          <label for="inputNom" class="form-label">Nom</label>
          <input type="text" class="form-control" name="nom">

        </div>
        <div class="col-lg-6 mt-3">
          <label for="inputPrenom" class="form-label">Prenom</label>
          <input type="text" class="form-control" name="prenom">
        </div>


        <div class="col-lg-6 mt-3">
          <label for="inputAdresse" class="form-label">adresse</label>
          <input type="text" class="form-control" name="adresse">
        </div>


          <div class="col-lg-12 mt-3">
            <label for="inputTelephone" class="form-label">Telephone</label>
            <input type="number" class="form-control" name="telephone">
        </div>

    

        <div class="text-center mt-3">
          <button type="submit" class="btn btn-primary">Enregistrer</button>
          <button type="reset" class="btn btn-danger">Annuler</button>
        </div>




      </div>
    </form>
@endsection
