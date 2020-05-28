@extends('layouts.app')

@section('content')
<div class="container-fluid">
    <h1>Lista de Usuarios Registrados
        <div class="row">
                  <div class="col-3">

                        <div class="card bg-danger">
                            <h5>Total usuarios Registrados</h5>
                            <?php use App\User; $users_count = User::all()->count(); ?>
                            <span class="right badge badge-danger">{{ $users_count ?? '0' }}</span>
                        </div>
                  </div>
        </div>
        <a href="usuarios/create"><button type="button" class="btn btn-success float-right">Agregar Usuario</button></a> <br>
    </h1>
  <table class="table">
    <thead class="thead-dark">
      <tr>
        <th scope="col">ID</th>
        <th scope="col">Nomre</th>
        <th scope="col">Email</th>
      </tr>
    </thead>
    <tbody>
    @foreach($users as $user)
          <tr>
              <th scope="row">{{$user->id}}</th>
              <td>{{$user->name}}</td>
              <td>{{$user->email}}</td>
          </tr>
    @endforeach
    </tbody>
  </table>
</div>



@endsection