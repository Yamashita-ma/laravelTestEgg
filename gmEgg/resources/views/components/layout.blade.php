<!DOCTYPE html>
<html lang="ja">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <link rel="stylesheet" type="text/css" href="{{ asset('css/style.css') }}">
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons"
        rel="stylesheet">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
        <title>
            卵かけ朝ごはん
        </title>
    </head>
    <body>
        <header>
            <div class="pc-logo">
                    <a href="{{ url('/')}}">
                        <img src="/assets/logo.png" alt="卵かけ朝ごはん！" width="300px"　class="pc-logo-img">
                    </a>
            </div>
            <div class="pc-menu">
                <nav class="navbar navbar-light bg-white fixed-top" style="margin-top: 50px;">
                    <ul>
                        <!-- <li><a href="#">マイページ</a></li> -->
                        <li><a href="{{ url('/')}}">ホーム</a></li>
                        <li><a href="{{ route('posts.create')}}">おすすめ卵かけごはん</a></li>
                        <li><a href="{{ route('lists.list')}}">みんなの卵かけごはん</a></li>
                    </ul>
                </nav>
            </div>



            <div class="menu">
                <nav class="navbar navbar-light bg-white fixed-top">
                    <!-- タイトル -->
                    <a class="navbar-brand" href="{{ url('/')}}">
                        <img src="/assets/logo.png" alt="卵かけ朝ごはん！" width="300px">
                    </a>
                    <!-- ハンバーガーメニュー -->
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <!-- ナビゲーションメニュー -->
                    <div class="collapse navbar-collapse" id="navbarNav">
                        <ul class="navbar-nav">
                            <li class="nav-item">
                            <a class="nav-link" href="{{ url('/')}}">ホーム</a>
                            </li>
                            <li class="nav-item">
                            <a class="nav-link" href="{{ route('posts.create')}}">おすすめ卵かけごはん</a>
                            </li>
                            <li class="nav-item">
                            <a class="nav-link" href="{{ route('lists.list')}}">みんなの卵かけごはん</a>
                            </li>
                        </ul>
                    </div>
                </nav>
            </div>
        </header>
        <main style="margin-top: 100px; margin-bottom: 25px;">

            {{ $slot }}

        </main>

        <script src="js/main.js"></script>
        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>

    </body>
</html>
