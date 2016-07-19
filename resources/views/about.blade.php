@extends('layouts.app')

@section('title') {{ trans('messages.about.title') }} @stop

@section('content')
    <div class="content">
        <h1>{{ trans('messages.about.title') }}</h1>
        <p>{{ trans('messages.about.text') }}</p>
    </div>
@endsection