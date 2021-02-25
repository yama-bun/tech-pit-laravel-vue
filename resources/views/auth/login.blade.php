@extends('app')

@section('title')
    ログイン
@endsection

@section('content')
    <div class="container">
        <div class="row">
            <div class="mx-auto col-12 col-sm-11 col-md-9 col-lg-7 col-xl-6">
                <h1 class="text-center"><a href="/" class="text-dark">memo</a></h1>
                <div class="card-mt-3">
                    <div class="card-body text-center">
                        <h2 class="h3 card-title text-center mt-2">ログイン</h2>

                        <a href="{{ route('login.{provider}', ['provider' => 'google']) }}" class="btn btn-block btn-danger">
                            <i class="fab fa-google mr1"></i>Googleでログイン
                        </a>

                        @include('error_card_list')

                        <div class="card-text">
                            <form action="{{ route('login') }}" method="post">
                                @csrf

                                <div class="md-form">
                                    <label for="email">メールアドレス</label>
                                    <input class="form-control" type="text" name="email" id="email" required value="{{ old('email') }}">
                                </div>

                                <div class="md-form">
                                    <label for="password">パスワード</label>
                                    <input type="password" name="password" id="password" class="form-control" required>
                                </div>

                                <input type="hidden" name="remember" id="remember" value="on">

                                <div class="text-left">
                                    <a href="{{ route('password.request') }}" class="card-text">パスワード忘れた方</a>
                                </div>

                                <button class="btn btn-block blue-gradient mt-2 mb-2" type="submit">ログイン</button>

                            </form>

                            <div class="mt-0">
                                <a href="{{ route('register') }}" class="card-text">ユーザー登録はこちら</a>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
