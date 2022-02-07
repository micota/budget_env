<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ログインフォーム</title>
    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>
    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/signin.css') }}" rel="stylesheet">
</head>
<body>
    <form class="form-signin" method="POST" action="{{ route('login') }}">
    @csrf
        <h1 class="h3 mb-3 fw-normal">ログイン</h1>
        @if (count($errors) > 0)
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        <label for="inputcode" class="sr-only">ID</label>
        <input id="inputcode" type="text" class="form-control" name="v_salesman_id" pattern="(0|[1-9][0-9]*)" autofocus>
        <label for="inputpassword" class="sr-only">Password</label>
        <input id="inputpassword" type="password" class="form-control" name="password" pattern="^([a-zA-Z0-9]{5,})$">
        <button class="btn btn-lg btn-primary btn-block" type="submit">ログイン</button>
    </form>
    
</body>
</html>