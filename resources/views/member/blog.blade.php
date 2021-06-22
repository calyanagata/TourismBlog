@extends('layouts.member_app')

@section('content')
<div class="container">
    <br>
    <h2 class="display-5 text-center title-catalog text-uppercase"><b>List of My Blogs</b></h2>
    <br><br>
    <table class="table table-hover">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Title</th>
                <th scope="col">Description</th>
                <th scope="col">Category</th>
                <th scope="col">Created At</th>
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
                <td>{{$a->created_at}}</td>
                <td><a href="/member/blog/delete/{{$a->id}}" class="button"><i style="color: #dc3545;" class="bi bi-trash-fill"></i></a></td>
            </tr>

            @endforeach
        </tbody>
    </table>
    <div class="text-center">
        <br><br>
        <a href="/member/blog/create" type="submit" class="btn btn-primary"><i class="bi bi-pencil-square pr-2"></i>Create Blog</a>
    </div>
</div>
</div>
@endsection