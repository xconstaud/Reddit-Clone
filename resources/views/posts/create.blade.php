@extends('layouts.master')


@section('content')
    <div class="row align-left">
        <h1>Create a Post</h1>
    </div>
    <form method="POST" action="{{ action('PostsController@store') }}">
        {!! csrf_field() !!}
        <div class="row">
            <div class="small-12 columns">
                <label>Title
                    <input name="title" type="text">
                </label>
            </div>
            <div class="small-12 columns">
                <label>
                    Content
                    <textarea name="content" placeholder="None"></textarea>
                </label>
            </div>
            <div class="small-12 columns">
                <label>URL
                    <input name="url" type="text">
                </label>
            </div>
        </div>
        <div class="row align-center">
            <button type="submit" class="button">Submit</button>
        </div>
    </form>

@stop
