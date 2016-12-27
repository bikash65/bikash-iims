

<!DOCTYPE html>
<html >
<head>
    <meta charset="UTF-8">
    <title>Login</title>




    <link rel="stylesheet" href="{{URL::asset('cms/css/style.css')}}">




</head>  <body>

<!--Google Font - Work Sans-->
<link href='https://fonts.googleapis.com/css?family=Work+Sans:400,300,700' rel='stylesheet' type='text/css'>


<div class="container">
    <div class="profile">
        <button class="profile__avatar" id="toggleProfile">
            <img src="{{URL::asset('cms/img/logo.png')}}" alt="Avatar" />
        </button>
        <div class="profile__form">
            <div class="profile__fields">
                <div class="field">
                    <form class="form-horizontal" role="form" method="POST" action="{{ url('/loginaction') }}">
                        {{ csrf_field() }}
                        <input type="text" id="fieldUser" class="input"  name="email">
                        <label for="fieldUser" class="label">Email</label>
                        @if ($errors->has('email'))
                            <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                    @endif
                </div>
                <div class="field">
                    <input type="password" id="fieldPassword" name="password" class="input">
                    <label for="fieldPassword" class="label">Password</label>
                    @if ($errors->has('password'))
                        <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                    @endif
                </div>
                <div class="profile__footer">
                    <input type="submit" name="submit" class="btn" />
                    </form>



                </div>
            </div>
        </div>
        <div style = "font-size:13px; color:#fff; margin-top:10px" align="center">        </div>
    </div>

    <script src="{{URL::asset('cms/js/index.js')}}"></script>




</body>
</html>
