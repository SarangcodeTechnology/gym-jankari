
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
        body{
            height: 80vh;
            display: flex;
            justify-content: center;
            align-items: center;
        }
        .login-container{
            background: green;
            padding: 50px 30px 50px 30px;
            display: flex;
            flex-direction: column;
            align-items: center;
        }
        p{
            color: #fff;
        }
        .myform{
            display: flex;
            flex-direction: column;
        }
        input{
            padding: 10px 10px 10px 10px;
        }
        button{
            margin-top: 10px;
            padding: 10px 10px 10px 10px;

        }
    </style>
</head>
<body>
    <div class="login-container">
        <p>GYM JANKARI</p>
        <p>Sign In</p>

        <form class="myform" action="{{ route('voyager.login') }}" method="POST" autocomplete="false">
            @csrf
            <div class="form-group form-group-default" id="emailGroup">
                <div class="controls">
                    <input type="text" name="email" id="email" placeholder="Email" class="form-control" required>
                </div>
            </div>

            <div class="form-group form-group-default" id="passwordGroup">
                <div class="controls">
                    <input type="password" placeholder="Password" name="password" class="form-control" required>
                </div>
            </div>

            <button type="submit" class="btn btn-block login-button">
                <span class="signingin hidden"><span class="voyager-refresh"></span>Sign In</span>
            </button>

        </form>

        <div style="clear:both"></div>

        @if(!$errors->isEmpty())
            <div class="alert alert-red">
                <ul class="list-unstyled">
                    @foreach($errors->all() as $err)
                        <li>{{ $err }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

    </div> <!-- .login-container -->
</body>
</html>



