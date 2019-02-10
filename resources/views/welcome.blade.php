<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet" type="text/css">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous" />
        <link href="{{ mix('css/app.css') }}" type="text/css" rel="stylesheet" />
        <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}" />
        
        <meta name="csrf-token" value="{{ csrf_token() }}" />
    </head>
    <body>
        <input type="hidden" id="base_url" value="{{ asset('/') }}" />
        <nav class="container">
            <div class="row">
                <div class="col-md-9">
                    
                </div>
                <div class="col-md-3">
                    <div class="logo">
                        <a href="#"><img src="./assets/images/logo.png" alt=""></a>
                    </div>
                </div>
            </div>
        </nav>
        <section class="main container" id="app">
            <div class="gallon row">
                <div class="col-md-12">
                    <img id='gallon' src="./assets/images/gallon.png" alt="" />
                </div>

                <malehastag-component></malehastag-component>
                <femalehastag-component></femalehastag-component>

                <maletweet-component></maletweet-component>
                <femaletweet-component></femaletweet-component>
            </div>
            <div class="row campaign-content">
                <div class="col-md-6">
                    <div id="campaign-content">
                        <h5 class="text-center">محتوى الحملة</h5>
                        <ul>
                            <li>الفيديو</li>
                            <li>الإعلانات</li>
                            <li>أخرى</li>
                            <div class="clear"></div>
                        </ul>
                    </div>
                </div>
                <div class="col-md-6"></div>
            </div>
        </section>
        <footer class="container">
            <div class="row justify-content-center">
                <div class="col-md-4">
                    <div class="copyright">
                        <div class="text-center">
                            <div id="copy-links">حقوق النشر </div>
                            <div id="copyright">2018 &copy جميع الحقوق محفوظة</div>
                        </div>
                        <div class="text-center">نص التذييل</div>
                    </div>
                    <div class="social-links">
                        <ul>
                            <li>
                                <a href="#"><i class="fab fa-twitter"></i></a>
                            </li>
                            <li>
                                <a href="#"><i class="fab fa-instagram"></i></a>
                            </li>
                            <li>
                                <a href="#"><i class="fab fa-facebook-f"></i></a>
                            </li>
                            <li>
                                <a href="#"><i class="fab fa-snapchat-ghost"></i></a>
                            </li>
                            <li>
                                <a href="#"><i class="fab fa-linkedin-in"></i></a>
                            </li>
                            <li>
                                <a href="#"><i class="fab fa-telegram"></i></a>
                            </li>
                            <li>
                                <a href="#"><i class="fab fa-youtube-square"></i></a>
                            </li>
                            <li>
                                <a href="#"><i class="far fa-file"></i></a>
                            </li>
                            <div class="clear"></div>
                        </ul>
                    </div>
                </div>
            </div>
        </footer>
        <script src="{{ mix('js/app.js') }}" type="text/javascript"></script>
    </body>
</html>
