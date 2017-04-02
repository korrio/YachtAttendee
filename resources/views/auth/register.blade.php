<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>YatchAttend | Register</title>
    <link rel="stylesheet" href="{{ mix('css/app.css') }}">
</head>
<body class="auth">
    <div class="logo">
        <i class="fa fa-check-square-o"></i> YatchAttend
    </div>

    <form action="/register" method="POST" class="panel panel-default auth-panel register-panel">
        {{ csrf_field() }}
        <legend class="form-header">Register</legend>
        
        @if(count($errors) > 0)
        <div class="alert alert-danger alert-dismissible" role="alert">
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
            <strong>Error !</strong> Please try agian.
        </div>
        @endif

        <legend>Profile</legend>

        <div class="form-group{{ ($errors->has('title')) ? ' has-error has-feedback' : '' }}">
            <label for="title">Title</label>
            <input type="text" name="title" class="form-control" placeholder="Mr." value="{{ old('title') }}" required>
            @if ($errors->has('title'))
            <span class="form-control-feedback" aria-hidden="true">
                <i class="fa fa-times"></i>
            </span>
            <span class="help-block">{{ $errors->first('title') }}</span>
            @endif
        </div>

        <div class="form-group{{ ($errors->has('name')) ? ' has-error has-feedback' : '' }}">
            <label for="name">Name</label>
            <input type="text" name="name" class="form-control" placeholder="John" value="{{ old('name') }}" required>
            @if ($errors->has('name'))
            <span class="form-control-feedback" aria-hidden="true">
                <i class="fa fa-times"></i>
            </span>
            <span class="help-block">{{ $errors->first('name') }}</span>
            @endif
        </div>

        <div class="form-group{{ ($errors->has('lastname')) ? ' has-error has-feedback' : '' }}">
            <label for="lastname">Surname</label>
            <input type="text" name="lastname" class="form-control" placeholder="Lennon" value="{{ old('lastname') }}" required>
            @if ($errors->has('lastname'))
            <span class="form-control-feedback" aria-hidden="true">
                <i class="fa fa-times"></i>
            </span>
            <span class="help-block">{{ $errors->first('lastname') }}</span>
            @endif
        </div>

        <div class="form-group{{ ($errors->has('type')) ? ' has-error has-feedback' : '' }}">
            <label for="type">What kind of user type you are registering ?</label>
            <select name="type" class="form-control" required>
                <option value="1">Attendee</option>
                <option value="2">Charter / Organizer</option>
                 <option value="3">Vendor</option>
            </select>
            @if ($errors->has('type'))
            <span class="help-block">{{ $errors->first('type') }}</span>
            @endif
        </div>

        <div class="form-group{{ ($errors->has('faculty')) ? ' has-error has-feedback' : '' }}">
            <label for="organization">Organization</label>
            <select name="organization" class="form-control" required readonly>
                <option value="1" selected>AAA Pte.Ltd.</option>
            </select>
            @if ($errors->has('faculty'))
            <span class="help-block">{{ $errors->first('faculty') }}</span>
            @endif
        </div>

        <legend>Account Information</legend>

        <div class="form-group{{ ($errors->has('email')) ? ' has-error has-feedback' : '' }}">
            <label for="email">Email</label>
            <input type="email" name="email" class="form-control" placeholder="Email" value="{{ old('email') }}" required>
            @if ($errors->has('email'))
            <span class="form-control-feedback" aria-hidden="true">
                <i class="fa fa-times"></i>
            </span>
            <span class="help-block">{{ $errors->first('email') }}</span>
            @endif
        </div>

        <div class="form-group{{ ($errors->has('username')) ? ' has-error has-feedback' : '' }}">
            <label for="username">Username</label>
            <input type="text" name="username" class="form-control" placeholder="Username" value="{{ old('username') }}" required>
            @if ($errors->has('username'))
            <span class="form-control-feedback" aria-hidden="true">
                <i class="fa fa-times"></i>
            </span>
            <span class="help-block">{{ $errors->first('username') }}</span>
            @endif
        </div>

        <div class="form-group{{ ($errors->has('password')) ? ' has-error has-feedback' : '' }}">
            <label for="password">Password</label>
            <input type="password" name="password" class="form-control" placeholder="Password" required>
            @if ($errors->has('password'))
            <span class="form-control-feedback" aria-hidden="true">
                <i class="fa fa-times"></i>
            </span>
            <span class="help-block">{{ $errors->first('password') }}</span>
            @endif
        </div>

        <div class="form-group{{ ($errors->has('password_confirmation')) ? ' has-error has-feedback' : '' }}">
            <label for="password_confirmation">Password (Repeat)</label>
            <input type="password" name="password_confirmation" class="form-control" placeholder="Password (Repeat)" required>
            @if ($errors->has('password_confirmation'))
            <span class="form-control-feedback" aria-hidden="true">
                <i class="fa fa-times"></i>
            </span>
            <span class="help-block">{{ $errors->first('password_confirmation') }}</span>
            @endif
        </div>

        <button type="submit" name="submit" class="btn btn-raised-success btn-lg btn-block">
            Register
        </button>
    </form>
    <a href="/login" class="outside-panel-link">Login</a>
    <script src="{{ mix('js/app.js') }}"></script>
</body>
</html>