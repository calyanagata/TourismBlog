@extends('layouts.app')

@section('content')
<div class="container" style="width:850px;">
    <br>
    <h2 class="display-5 text-center title-catalog text-uppercase"><b>About Us - Wonderful Journey</b></h2>
    <hr><br>
    <br><img style="width: 800px; height: 500px;" class="mx-auto d-block" src="/assets/about_us.jpg"></img>
    <br><br>
    <div class="text-center">
        <p class="text-justify">
        Wonderful Journey Blog is a collective blog of expert travel writers, headed up by experienced travel journalist and editor, who report on trends, experiences, festivals and nocturnal adventures in cities around Indonesia.
        <br><br>
        We publish lovingly-compiled ‘Long Weekend’ city guides to all our favourite destinations, as well as fresh and insightful feature articles on the quirkiest crazes, the most intriguing experiences and the best nightlife our boundless curiosity can uncover. (Just hover you mouse over the “Category” tab on our top menu to browse recent posts by category). And because everyone needs to smell the flowers – and not the coffee – once in a while, we like to offset our urban Odysseys with the occasional jaunt in the great outdoors.
        <br><br>
        City breaks are what we live for most of all, and apart from our aforementioned Long Weekend guides, we also list our favourite cities according to theme. Be sure to drop by our favourite budget breaks and romantic destinations.
        </p>
        <br>
        <a href="{{ url()->previous() }}" type="submit" class="btn btn-primary">Back</a>
    </div>
</div>
@endsection