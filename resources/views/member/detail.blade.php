@extends('layouts.member_app')

@section('content')
<div class="container" style="width: 850px;">
    <br>
    <h2 class="display-5 text-center title-catalog text-uppercase" style="margin-bottom: 20px;"><b>{{$article->title}}</b></h2>
    <p class="text-center" style="margin-bottom: 5px;">Written by: {{$article->user->name}}</p>
    <p class="text-center">Last updated: {{$article->updated_at}}</p>

    <br><img style="width: 800px; height: 500px;" class="mx-auto d-block" src="/assets/{{$article->image}}"></img>

    <hr><br>
    <div class="text-center">
        <p class="text-justify">{{$article->description}}</p>
        <br>
        <a href="{{ url()->previous() }}" type="submit" class="btn btn-primary">Back</a>
    </div>

</div>
@endsection