@extends('layouts/email')

@section('title') New contact @stop

@section('content')

<h2>New contact message</h2>

Details:
<br><br><b>From</b> {{ $request->first_name }} {{ $request->last_name }} ({{ $request->email }})
<br><b>Photo:</b> 
@if($request->hasFile('photo'))
	Attached
@else
	Not provided
@endif
<br>
<br><b>Mesage:</b><br>
{{ $request->message }}

@stop