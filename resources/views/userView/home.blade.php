@extends('layouts.master')

@section('title')
Kais Blog
@endsection

@section('content')
<section class="row new-post">
    <div class="col-md-6 offset-md-3">

        <header>
            <h3>What do you have to think??</h3>
        </header>
        <form action="{{route('createPost')}}" method="post" style="padding:0 !important;text-align:right !imporant; display:inline !important;">
            <div class="form-group">
                <textarea class="form-control" name="body" id="new-post" cols="300" rows="5"
                    placeholder="Your Post"></textarea>
            </div>
            <button type="submit" class="btn btn-primary">Post</button>
            <input type="hidden" value="{{ Session::token()}}" name="_token">
        </form>

    </div>
</section>
<section class="row posts">
<div class="col-md-6 offset-md-3">
    <header><h3>What other people say....</h3></header>
    <article class="post">
        <p>I love you 3000</p>
        <div class="info">
        <p>Post by <a href="">Kais</a> on 24 Feb 2020</p>
        </div>
        <div class="interaction">
        <a href="">Like|</a>
        <a href="">Dislike|</a>
        <a href="">Edit|</a>
        <a href="">Delelte|</a>
        </div>
    </article>
</div>
</section>
@endsection
