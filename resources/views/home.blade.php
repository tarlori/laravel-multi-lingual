@extends('layouts.app')

@section('title') {{ trans('messages.welcome') }} @stop

@section('content')
    <div class="content">
        <h1>{{ trans('messages.welcome') }}</h1>

        @if (session()->has('success'))
            <div class="alert alert-success"><p>{{ session('success') }}</p></div>
        @endif

        <form id="form-contact" method="post" action="{{ Helper::format_uri('contact') }}" enctype="multipart/form-data">
            
            {!! csrf_field() !!}

            <div class="form-group">

                <label for="first_name" class="control-label">{{ trans('messages.contact.first_name_label') }}</label>
                <input type="text" class="form-control" id="first_name" name="first_name" value="{{ old('first_name') }}">
                @if ($errors->has('first_name'))
                    <span class="text-danger">{{ $errors->first('first_name') }}</span>
                @endif

            </div>

            <div class="form-group">

                <label for="last_name" class="control-label">{{ trans('messages.contact.last_name_label') }}</label>
                <input type="text" class="form-control" id="last_name" name="last_name" value="{{ old('last_name') }}">
                @if ($errors->has('last_name'))
                    <span class="text-danger">{{ $errors->first('last_name') }}</span>
                @endif

            </div>

            <div class="form-group">

                <label for="email" class="control-label">{{ trans('messages.contact.email_label') }}</label>
                <input type="text" class="form-control" id="email" name="email" value="{{ old('email') }}">
                @if ($errors->has('email'))
                    <span class="text-danger">{{ $errors->first('email') }}</span>
                @endif

            </div>

            <div class="form-group">

                <label for="photo" class="control-label">{{ trans('messages.contact.photo_label') }}</label>
                <input type="file" id="photo" name="photo">                
                @if ($errors->has('photo'))
                    <span class="text-danger">{{ $errors->first('photo') }}</span>
                @endif

            </div>

            <div class="form-group">

                <label for="message" class="control-label">{{ trans('messages.contact.message_label') }}</label>
                <textarea class="form-control" id="message" name="message">{{ old('message') }}</textarea>
                @if ($errors->has('message'))
                    <span class="text-danger">{{ $errors->first('message') }}</span>
                @endif

            </div>

            <div class="form-group">

                <input type="submit" class="btn btn-success" name="Submit">

            </div>
        </form>
    </div>
@endsection