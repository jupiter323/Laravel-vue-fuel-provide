<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Taqah</title>

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
                    <div class="box-wrap">
                    <img id='gallon' src="./assets/images/gallon.png" alt="" />
                    <div class="box1">
                         <div class="dropwater-wrap">
                            <img src="https://images.vexels.com/media/users/3/145358/isolated/preview/caae118ed1bd555d7a47dcadf5af0bf8-water-drop-falling-illustration-by-vexels.png" class="dropwater"/>

                            <svg x="0" class="whole-water" y="0" width="10" height="220" xml:space="preserve" >
                                <linearGradient id="my-cool-gradient1" x2="0" y2="1">
                                    <stop offset="0%" stop-color="#a1a5d2" />
                                    <stop offset="50%" stop-color="#7177b5" />
                                    <stop offset="100%" stop-color="#533285" />
                                </linearGradient>

                                <pattern id="water1" width=".25" height="1.1" patternContentUnits="objectBoundingBox">
                                    <path fill="url(#my-cool-gradient1) #447799"  d="M0.25,1H0c0,0,0-0.659,0-0.916c0.083-0.303,0.158,0.334,0.25,0C0.25,0.327,0.25,1,0.25,1z"/>
                                </pattern>
                                <rect class="water-fill" mask="url(#text-mask)" fill="url(#water1)" y="0" width="2000" height="100%" opacity="1">
                                <animate attributeType="xml" attributeName="x" from="-500" to="0" repeatCount="indefinite" dur="5s"/>
                                </rect>
                            </svg>
                            <!-- <svg class ="back-water"x="0" y="0" width="10" height="220" xml:space="preserve" >
                                <rect class="water-fill" mask="url(#text-mask)" fill="url(#water1)" y="0" width="2000" height="100%" opacity="1">
                                <animate attributeType="xml" attributeName="x" from="-500" to="0" repeatCount="indefinite" dur="5s"/>
                                </rect>
                            </svg> -->
                          </div>
                          <img class="box-img" src="./assets/images/box1.png" alt="" />
                    </div>
                    <div class="box2">

                         <div class="dropwater-wrap">
                            <img src="https://images.vexels.com/media/users/3/145358/isolated/preview/caae118ed1bd555d7a47dcadf5af0bf8-water-drop-falling-illustration-by-vexels.png" class="dropwater"/>

                            <svg class="whole-water" x="0" y="0" width="10" height="220" xml:space="preserve">
                                <linearGradient id="my-cool-gradient2" x2="0" y2="1">
                                    <stop offset="0%" stop-color="#447799" />
                                    <stop offset="50%" stop-color="#224488" />
                                    <stop offset="100%" stop-color="#174da1" />
                                </linearGradient>
                                <pattern id="water2" width=".25" height="1.1" patternContentUnits="objectBoundingBox">
                                    <path fill="url(#my-cool-gradient2) #a1a5d2"  d="M0.25,1H0c0,0,0-0.659,0-0.916c0.083-0.303,0.158,0.334,0.25,0C0.25,0.327,0.25,1,0.25,1z"/>
                                </pattern>
                                <rect class="water-fill" mask="url(#text-mask)" fill="url(#water2)" y="0" width="2000" height="100%" opacity="1">
                                <animate attributeType="xml" attributeName="x" from="0" to="-500" repeatCount="indefinite" dur="5s"/>
                                </rect>
                            </svg>
                            <!-- <svg class ="back-water"x="0" y="0" width="10" height="220" xml:space="preserve" >
                                <rect class="water-fill" mask="url(#text-mask)" fill="url(#water2)" y="0" width="2000" height="100%" opacity="1">
                                <animate attributeType="xml" attributeName="x" from="-500" to="0" repeatCount="indefinite" dur="5s"/>
                                </rect>
                            </svg> -->
                          </div>
                          <img class="box-img" src="./assets/images/box2.png" alt="" />
                    <div>
                    </div>
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
