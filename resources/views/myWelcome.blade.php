<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Nunito&display=swap">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Noto+Sans+SC&display=swap">

    <link rel="stylesheet" href="{{asset('/static/bootstrap/css/bootstrap.min.css')}}">
    <script src="{{asset('/static/jquery.min.js')}}"></script>
    <script src="{{asset('/static/bootstrap/js/bootstrap.min.js')}}"></script>
    <!-- Styles -->
    <style>
        body {
            font-family: 'Noto Sans SC', sans-serif;
        }

        .banner-img {
            height:35vh;
            background: url('{{ asset('img/banner-0.jpg') }}') 0 80%;
            background-size: cover;
        }
    </style>
</head>

<body class="vh-100 d-md-flex flex-md-column">
    @component('common.navbar')

    @endcomponent
    <main class="flex-md-grow-1">
        <div id="banner" class="carousel slide" data-ride="carousel">
            <!-- 指示符 -->
            <ul class="carousel-indicators">
                <li data-target="#banner" data-slide-to="0" class="active"></li>
                <li data-target="#banner" data-slide-to="1"></li>
                <li data-target="#banner" data-slide-to="2"></li>
                <li data-target="#banner" data-slide-to="3"></li>
            </ul>

            <!-- 轮播图片 -->
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <div class="banner-img" index='0'></div>
                    <div class="carousel-caption">
                        <p class="display-3">Laravel</p>
                        <h4>更优雅的PHP框架</h4>
                    </div>
                </div>
                <div class="carousel-item">
                    <div class="banner-img" index='1'></div>
                    <div class="carousel-caption">
                        <p class="display-3">Nginx</p>
                        <h4>更快的WEB服务器</h4>
                    </div>
                </div>
                <div class="carousel-item">
                    <div class="banner-img" index='2'></div>
                    <div class="carousel-caption">
                        <p class="display-3">七牛云CDN</p>
                        <h4>更近的缓存服务器</h4>
                    </div>
                </div>
                <div class="carousel-item">
                    <div class="banner-img" index='3'></div>
                    <div class="carousel-caption">
                        <p class="display-3">Docker</p>
                        <h4>更少的性能开销</h4>
                    </div>
                </div>
            </div>

            <!-- 左右切换按钮 -->
            <a class="carousel-control-prev" href="#banner" data-slide="prev">
                <span class="carousel-control-prev-icon"></span>
            </a>
            <a class="carousel-control-next" href="#banner" data-slide="next">
                <span class="carousel-control-next-icon"></span>
            </a>

        </div>
    </main>
    @component('common.footer')

    @endcomponent
    <script>
        $.each($(".banner-img"),function(i,o){
            $(o).css({'background':"url('{{ asset('img') }}/banner-"+i+".jpg') 0 80% ",'background-size':'cover'})
        })
    </script>
</body>

</html>