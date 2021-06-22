@extends('layouts.admin_app')
@section('content')

<div class="container">
    <br>
    <h2 class="display-5 text-center title-catalog text-uppercase"><b>List of All Users</b></h2>
    <br><br>
    <table class="table table-hover">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Name</th>
                <th scope="col">Email</th>
                <th scope="col">Phone</th>
                <th scope="col">Created At</th>
                <th scope="col">Delete</th>
            </tr>
        </thead>
        <tbody>
            <?php $i = 1; ?>
            @foreach($user as $u)
            <tr>
                <th>{{$i++}}</th>
                <td>{{$u->name}}</td>
                <td>{{$u->email}}</td>
                <td>{{$u->phone}}</td>
                <td>{{$u->created_at}}</td>
                <td><a href="/admin/user/delete/{{$u->id}}" class="button"><i style="color: #dc3545;" class="bi bi-trash-fill"></i></a></td>
            </tr>

            @endforeach
        </tbody>
    </table>
</div>

@endsection