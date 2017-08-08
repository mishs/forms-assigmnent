<!DOCTYPE html>
<html>
<head>
	<title>Forms and Views</title>
</head>
<body>
	{!! Form::open(['url' => 'viewwithaform', 'method'=>'post']) !!}
    //  {!! Form::open(['url' => 'calculate', 'method' => 'post', 'get']) !!}
	{!! Form::label('first-number', 'First Number') !!}
	{!! Form::text('first-number-input', '') !!}
	{!! Form::submit('Submit'); !!}

    {!! Form::close() !!}

</body>
