<!DOCTYPE html>
<html>
<head>
	<title>Forms and Views</title>
</head>
<body>
{!! Form::open(['url' => '/calculating', 'method'=>'post']) !!}
{!! Form::text('numberinput1') !!}
{!! Form::text('numberinput2') !!}
{!!	Form::submit('Calculate') !!}
<!-- 	{!! Form::submit( 'Submit1', ['name' => 'submitbutton', 'value' => 'Submit1'])!!} -->
{!! Form::close() !!}
{!! link_to_route('randompage', 'test', [1,2]) !!}
</body>
