@extends('layouts.app', [
  'class' => 'off-canvas-sidebar',
  'classPage' => 'login-page',
  'activePage' => '',
  'title' => __('SOS DOCTOR'),
  'pageBackground' => asset("material").'/img/login.jpg'
])

@section('content')
<div class="container" style="height: auto;">
  <div class="row justify-content-center">
      <div class="col-lg-7 col-md-12">
          <h2 class="text-white text-center">
            {{ __('Projet d\'Assistance Médicale, d\'Orientation Psycho-Social de la Population Togolaise') }}
          </h2>
      </div>
  </div>
</div>
@endsection
