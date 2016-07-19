@extends('layouts.app')

@section('title') {{ trans('messages.services.title') }} @stop

@section('content')
    <div class="content">
        <h1>{{ trans('messages.services.title') }}</h1>
        <p>{{ trans('messages.services.text') }}</p>
    </div>
@endsection