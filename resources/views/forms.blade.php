<!DOCTYPE html>
<html>
<head>
	<title>Forms and Views</title>
</head>
<body>
	{!! Form::open(['url' => '/formscalc', 'method'=>'post']) !!}
	{!! Form::label('number', 'Number') !!}
	{!! Form::text('numberinput', '') !!}
	{!! Form::submit( 'Submit1', ['name' => 'submitbutton', 'value' => 'Submit1'])!!}
    {!! Form::close() !!}
</body>
