@extends('layouts.app')
@section('title', 'Users')

@section('content')
<div class="user-show">
<table class="table">
            <tr>
                <th>Nombre</th>
                <th>Email</th>
                <th>Accion</th>
            </tr>
            <a href="{{ route('users.create') }}"><button class="btn btn-primary float-right mb-3" type="button">Crear Usuario</button></a>
            @foreach($user as $users)
                <tr>
                    <td>{{$users->name}}</td>
                    <td>{{$users->email}}</td> 
                    <td>
                      <button class="btn">
                        <a href="{{ route('users.edit', $users->id) }}"><i class="fas fa-edit"></i></a>
                      </button>
                      <form action="{{ route('users.destroy', $users->id)}}" method="post">
                        @csrf
                        @method('DELETE')
                        <button class="btn" type="submit"><i class="fas fa-trash"></i></button>
                      </form>
                    </td>  
                </tr>
              
            @endforeach
        </table>
</div>
@endsection