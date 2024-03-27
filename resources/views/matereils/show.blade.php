@extends('matereils.layout')

@section('title' , 'show matereil')

@section('content')

@if (session()->has('success'))
    <div class="title d-flex justify-content-center bg-success">
      <p class="me-2 text-white mt-2">
          {!! session()->get('success') !!}
      </p>
      <a href="{{route('matereils.show' , ['matereil' => $mt['id']])}}" class="title mt-2"><i class="fas fa-times-circle circle-xmark-icon"></i></a>
    </div>
@endif

<div class="container">
  <div class="row justify-content-center mt-4">
    <div class="col-8 col-md-6 col-lg-4">
      <div class="card border-success shadow">
        <div class="card-body">
          <h5 class="card-title text-center">Matereils Details</h5>
          <hr>
          <div class="row">
            <div class="col-4">
              <h6 class="card-subtitle">ID:</h6>
            </div>
            <div class="col-8">
              <p class="card-text">{{$mt['id']}}</p>
            </div>
          </div>
          <div class="row">
            <div class="col-4">
              <h6 class="card-subtitle">Nom:</h6>
            </div>
            <div class="col-8">
              <p class="card-text">{{$mt['nom']}}</p>
            </div>
          </div>
          <div class="row">
            <div class="col-4">
              <h6 class="card-subtitle">Prix:</h6>
            </div>
            <div class="col-8">
              <p class="card-text">{{$mt['prix']}}</p>
            </div>
          </div>

          <div class="btn-group mt-auto">
              <a href="{{ route('matereils.edit', ['matereil' => $mt['id']]) }}" class="btn btn-success btn-sm">
                <i class="fa fa-edit"></i>
              </a>
              <form action="{{ route('matereils.destroy', ['matereil' => $mt['id']]) }}" method="post">
                @csrf
                @method('delete')
                <button onclick="return confirm('Are you sure?')" type="submit" class="btn btn-danger btn-sm">
                  <i class="fa fa-trash"></i>
                </button>
              </form>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
    

@stop