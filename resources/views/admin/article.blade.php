@extends('layouts.admin_app')
@section('content')

<div class="container">
    <br>
    <h2 class="display-5 text-center title-catalog text-uppercase"><b>List of All Articles</b></h2>
    <br><br>
    <table class="table table-hover">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Title</th>
                <th scope="col">Description</th>
                <th scope="col">Category</th>
                <th scope="col">Author</th>
                <th scope="col">Delete</th>
            </tr>
        </thead>
        <tbody>
            <?php $i = 1; ?>
            @foreach($article as $a)
            <tr>
                <th>{{$i++}}</th>
                <td><a href="{{url('/detail/'.$a->id.'/')}}" class="txtlink">{{$a->title}}</a></td>
                <td class="d-inline-block text-truncate" style="max-width: 400px;">{{$a->description}}</td>
                <td>{{$a->category->name}}</td>
                <td>{{$a->user->name}}</td>
                <td><a href="/admin/article/delete/{{$a->id}}" class="button"><i style="color: #dc3545;" class="bi bi-trash-fill"></i></a></td>
            </tr>

            @endforeach
        </tbody>
    </table>
</div>

@endsection