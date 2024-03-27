@extends('matereils.layout')

@section('title' , 'home matereil')

@section('content')

@if (session()->has('success'))
    <div class="title d-flex justify-content-center bg-success">
      <p class="me-2 text-white mt-2">
          {!! session()->get('success') !!}
      </p>
      <a href="{{route('matereils.index')}}" class="title mt-2"><i class="fas fa-times-circle circle-xmark-icon"></i></a>
    </div>
@endif


<div class="container mt-5">
    <div class="row justify-content-center">
      <div class="col-6">
          <table class="table border-black">
                <thead class="table-dark">
                    <tr>
                    <th scope="col">Id</th>
                    <th scope="col">Nom matereil</th>
                    <th scope="col">Prix</th>
                    <th scope="col">Action</th>
                    </tr>
                </thead>
                <tbody class="table-white justify-between">
                    @foreach ($matereil as $row)
                    <tr>
                    <th scope="row">{{$row['id']}}</th>
                    <td>{{$row['nom']}}</td>
                    <td>{{$row['prix']}}</td>
                    <td class="flex" style="">
                        <div class="btn-group">
                            <a href="{{ route('matereils.show', ['matereil' => $row['id']]) }}" class="btn btn-info btn-sm">
                                <i class="fa fa-eye"></i>
                            </a>
                            <a href="{{ route('matereils.edit', ['matereil' => $row['id']]) }}" class="btn btn-success btn-sm">
                                <i class='fa fa-edit'></i>
                            </a>
                            <form action="{{ route('matereils.destroy', ['matereil' => $row['id']]) }}" method="post">
                                @csrf
                                @method('delete')
                                <button onclick="return confirm('Are you sure?')" type="submit" class="btn btn-danger btn-sm">
                                    <i class="fa fa-trash"></i>
                                </button>
                            </form>
                        </div>
                    </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
            <p>Total de matereils: {{ count($matereil) }}</p>
      </div>
    </div>
  </div>


@stop