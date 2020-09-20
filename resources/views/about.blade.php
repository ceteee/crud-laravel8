@extends('layout/main')

@section('title-page', 'About Laravel Website')

@section('container')
  <div class="container">
      <div class="row">
      <div class="col-10">
          <h1 class="mt-4">hi,my name is <?php echo $name ?> <br>
          This is my first laravel implements</h1>
      </div>
      </div>
  </div>

@endsection
