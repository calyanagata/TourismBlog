
@extends('layouts.member_app')
@section('content')

<div class="container">
    <br>
    <h2 class="display-5 text-center title-catalog text-uppercase"><b>Welcome, {{Auth::user()->name}}!</b></h2>
    
    <h3 class="display-5 text-center title-catalog text pt-3">Please take a look at our Indonesia's top tourist attractions below.</h3>
    <hr><br>
    <div class="row text-center">
        @foreach($article as $a)
        <div class="col-sm-4 mb-5">
            <div class="card card-custom">
                <img class="card-img-top card-img-top-custom" src="/assets/{{$a->image}}" alt="Card image cap">
                <div class="card-body">
                    <h5 class="card-title">{{$a->title}}</h5>
                    <p class="card-text card-text-custom">{{$a->description}}
                    </p><a href="{{url('/detail/'.$a->id.'/')}}" class="txtlink">full story</a>
                    <p class="card-text"><i><br>Category :
                            <a href="{{url('/category/'.$a->category_id.'/')}}" class="txtlink">{{$a->category->name}}</a>
                        </i></p>
                </div>
            </div>
        </div>
        @endforeach
    </div>
</div>

@endsection