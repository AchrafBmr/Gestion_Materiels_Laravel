@extends('matereils.layout')

@section('title' , 'edit matereil')

@section('content')

  
<div class="container mt-5">
  <div class="row justify-content-center">
    <div class="col-md-5">
      <div class="card">
        <div class="card-body">
          <h5 class="card-title text-center">Modifier un Matériel</h5>
          <form method="POST" action="{{ route('matereils.update', ['matereil' => $mt['id']]) }}">
            {{ csrf_field() }}
            @method('PUT')
            <div class="mb-3">
              <label for="nom" class="form-label">Nom:</label>
              <input type="text" value="{{$mt['nom']}}" name="nom" class="form-control">
              @error('nom')
                <div style="color :red">
                    {{$message}}
                    <a href="{{url('matereils/create')}}" class="close" data-dismiss="alert" aria-label="close">×</a>
                </div>
              @enderror
            </div>
            <div class="mb-3">
              <label for="prix" class="form-label">Prix:</label>
              <input type="number" value="{{$mt['prix']}}" name="prix" class="form-control">
              @error('prix')
                <div style="color :red">
                    {{$message}}
                    <a href="{{url('matereils/create')}}" class="close" data-dismiss="alert" aria-label="close">×</a>
                </div>
              @enderror
            </div>
            <div class="d-flex justify-content-between">
              <button type="submit" class="btn btn-primary">Modifier</button>
              <a href="{{url('matereils')}}" class="title">Cancel</a>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
</div>



@stop