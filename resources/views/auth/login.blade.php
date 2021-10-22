<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" rel="stylesheet"
          type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">
    <link href="{{mix('css/styles.css')}}" rel="stylesheet">
    <title>Login</title>
</head>

<body>
<section class="login">
    <div class="login-container">
        <div class="container">
            <div class="col-12">
                <h5 class="primary-text p-4">Am I Available?</h5>
            </div>
            <div class="col-12 login-field my-auto">
                <h4 class="dark-text">Inloggen</h4>
                <div class="my-auto">
                    {!! Form::open(['route' => 'login']) !!}
                    {!! Form::token() !!}
                    {!! Form::label('email', 'Email', ['class' => 'form-label'])!!}
                    {!! Form::email('email', null,['class' => 'form-control'] ) !!}
                    {!! Form::label('password', 'Wachtwoord', ['class' => 'mt-4 form-label'])!!}
                    {!! Form::password('password', null,['class' => 'form-control'] ) !!}
                    {!! Form::submit('Aanmelden', ['class' => ' mt-4 btn primary-btn']) !!}
                    {!! Form::close() !!}
                </div>

            </div>
        </div>
    </div>
    <div class="bg-pattern"></div>
</section>
</body>

</html>
