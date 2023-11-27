@extends('layouts.mainlayouts')
@section('content')

<div class="pagetitle">
    <h1>Tableau Bord</h1>
    <nav>
      <ol class="breadcrumb">
      <li class="breadcrumb-item"><a href="dashboard">Accueil</a></li>
        <li class="breadcrumb-item active">Nouveau enregistrement</li>
      </ol>
    </nav>
  </div>
  <!-- End Page Title -->

  <section class="section profile">
    <div class="row">
      <div class="col-xl-4">

    

      </div>

      <div class="col-xl-8">

        <div class="card">
          <div class="card-body pt-3">
            <!-- Bordered Tabs -->
            <ul class="nav nav-tabs nav-tabs-bordered">

              <li class="nav-item">
                <button class="nav-link active" data-bs-toggle="tab" data-bs-target="#profile-overview">Details</button>
              </li>

              <li class="nav-item">
                {{-- <a href="{{ etudiant.liste }}"  class="nav-link">Voir la liste</a> --}}
              </li>

            </ul>
            <div class="tab-content pt-2">

              <div class="tab-pane fade show active profile-overview" id="profile-overview">

                <div class="row">
                  <div class="col-lg-3 col-md-4 label ">Nom</div>
                  <div class="col-lg-9 col-md-8">{{ $docteurs->nom }}</div>
                </div>

                <div class="row">
                  <div class="col-lg-3 col-md-4 label">Prénom</div>
                  <div class="col-lg-9 col-md-8">{{ $docteurs->prenom }}</div>
                </div>

                <div class="row">
                  <div class="col-lg-3 col-md-4 label">Date de naissance</div>
                  <div class="col-lg-9 col-md-8">{{ $docteurs->date_naissance }}</div>
                </div>

                <div class="row">
                  <div class="col-lg-3 col-md-4 label">Sexe</div>
                  <div class="col-lg-9 col-md-8">{{ $docteurs->sexe }}</div>
                </div>

                <div class="row">
                  <div class="col-lg-3 col-md-4 label">Telephone</div>
                  <div class="col-lg-9 col-md-8">{{ $docteurs->telephone }}</div>
                </div>

                <div class="row">
                  <div class="col-lg-3 col-md-4 label">Adresse</div>
                  <div class="col-lg-9 col-md-8">{{ $docteurs->adresse }}</div>
                </div>

                <div class="row">
                    <div class="col-lg-3 col-md-4 label">Specialite</div>
                    <div class="col-lg-9 col-md-8">{{ $docteurs->specialite }}</div>
                  </div>



              </div>

          </div>
        </div>

      </div>
    </div>
  </section>


@endsection
