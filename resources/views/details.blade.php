<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js" integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <title>Document</title>
</head>
<body>
    <div class="card">
        <div class="card-body">
            <div class="form-group">
                <h2>{{$title}}</h2>
                
            </div>
        </div>

    </div>
    <div class="card">
        <div class="card-body">
            @if(@isset($data))
            {{ Form::model( $data,array("route"=>["home.update",$data->id],"method"=>"PATCH","class"=>"form-horizontal validate","autocomplete"=>"off") ) }}

           @else
            {!! Form::open(['route'=>'home.store', 'method'=>'POST', 'enctype' => 'multipart/form-data']) !!}
            @endif
                <div class="row">
                    <div class="col-md-6 form-group">
                        {!! Form::label('name', 'Name') !!}
                        {!! Form::text('name', null, ['class'=>'form-control']) !!}
                    </div>
                    <div class="col-md-6 form-group">
                        {!! Form::label('phone', 'Phone') !!}
                        {!! Form::text('phone',null,['class'=>'form-control']) !!}
                    </div>
                    <div class="col-md-6 form-group">
                        {!! Form::label('dob', 'Date Of Birth') !!}
                        {!! Form::date('dob', null, ['class'=>'form-control']) !!}
                    </div>
                    <div class="col-md-6 form-group">
                        {!! Form::label('note', 'Note') !!}
                        {!! Form::textarea('note',null, ['class'=>'form-control']) !!}
                    </div>

                </div>
                
                
                {!! Form::submit('Submit', ['class' => 'btn btn-primary']) !!}
            {!! Form::close() !!}
        </div>
    </div>
    
</body>
</html>