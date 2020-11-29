<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Log-In</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">

        <!-- Styles -->
        <link rel='stylesheet' href='/css/app.css' type='text/css'>
    </head>
    <body>
        <div class="panel" style="text-align: center;">
            <div>
            <img style="width:150px; height:150px"  src="{{ url('/images/login-big.jpg') }}" alt="login">
            </div>
            
            <hr/>
            
            <div class="body">

                @if ($message = Session::get('error'))
                    <div class="message-error">
                        {{ $message }}
                    </div>
                    <br>
                @endif

                <form action='/loginsuccess' method='post'>

                    @csrf
                    
                    <div class="input-box">
                        <div class='label'>Email</div>
                        <div>
                            <input type='email' name='email' required>
                        </div>
                    </div>

                    <div class="input-box">
                        <div class='label'>Password</div>
                        <div>
                            <input type='password' name='password' required>
                        </div>
                    </div>

                    <button type="submit">LogIn</button>

                </form>
            </div>

        </div>
    </body>
</html>