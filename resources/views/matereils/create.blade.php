@extends('matereils.layout')

@section('title' , 'Creat matereil')

@section('content')

  
    <div class="container mt-5">
        <div class="row justify-content-center">
          <div class="col-md-5">
            <div class="card">
              <div class="card-body">
                <h5 class="card-title text-center">Ajouter un Matériel</h5>
                <form method="POST" action="{{url('matereils')}}">
                  {{ csrf_field() }}
                  <div class="mb-3">
                    <label for="nom" class="form-label">Nom:</label>
                    <input type="text" name="nom" class="form-control" id="nom" placeholder="Entrez le nom du matériel">
                    @error('nom')
                      <div style="color :red">
                          {{$message}}
                          <a href="{{url('matereils/create')}}" class="close" data-dismiss="alert" aria-label="close"><i class="fas fa-times-circle circle-xmark-icon"></i></a>
                      </div>
                    @enderror
                  </div>
                  <div class="mb-3">
                    <label for="prix" class="form-label">Prix:</label>
                    <input type="number" name="prix" class="form-control" id="prix" placeholder="Entrez le prix du matériel">
                    @error('prix')
                      <div style="color :red">
                          {{$message}}
                          <a href="{{url('matereils/create')}}" class="close" data-dismiss="alert" aria-label="close"><i class="fas fa-times-circle circle-xmark-icon"></i></a>
                      </div>
                    @enderror
                  </div>
                  <div class="d-flex justify-content-between">
                    <button type="submit" class="btn btn-primary">Ajouter</button>
                    <a href="{{url('matereils')}}">Cancel</a>
                  </div>
                </form>
              </div>
            </div>
          </div>
        </div>
    </div>



@stop