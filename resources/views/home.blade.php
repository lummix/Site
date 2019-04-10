<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="Site personnel Julien Meyer">
        <meta name="author" content="Julien Meyer">
        <META name="keywords" content="Developpeur, java, Julien, Julien Meyer, Développeur java, ">

          <title>Julien M.</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

        <!-- Styles -->
           <style>
          html, body {
              background-color: #2c2f33;
              color: #fff;
              font-family: 'Nunito', sans-serif;
              font-weight: 200;
              height: 100vh;
              margin: 0;
          }

          .full-height {
              height: 100vh;
          }

          .flex-center {
              align-items: center;
              display: flex;
              justify-content: center;
          }

          .position-ref {
              position: relative;
          }

          .top-right {
              position: absolute;
              right: 10px;
              top: 18px;
          }

          .content {
              text-align: center;
          }

          .title {
              font-size: 84px;
          }
          .sub-title{
            font-size: 30px;
          }

          .links > a {
              color: #fff;
              padding: 0 25px;
              font-size: 13px;
              font-weight: 600;
              letter-spacing: .1rem;
              text-decoration: none;
              text-transform: uppercase;
          }

          .m-b-md {
              margin-bottom: 0px;
          }
          .m-b-md2 {
              margin-bottom: 30px;
          }
        </style>
    </head>
    <body>
        <!--Script tawk-->
        <script type="text/javascript">
            var Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date();
            (function(){
            var s1=document.createElement("script"),s0=document.getElementsByTagName("script")[0];
            s1.async=true;
            s1.src='https://embed.tawk.to/5ca9e3da53f1e453fb8c83df/default';
            s1.charset='UTF-8';
            s1.setAttribute('crossorigin','*');
            s0.parentNode.insertBefore(s1,s0);
         })();
        </script>
        <!--Fin Script tawk-->

        <div class="flex-center position-ref full-height">
            @if (Route::has('login'))
                <div class="top-right links">
                    @auth
                        <a href="{{ url('/home') }}">Home</a>
                    @else
                        <a href="{{ route('login') }}">Login</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}">Register</a>
                        @endif
                    @endauth
                </div>
            @endif

            <div class="content">
                <div class="title m-b-md">
                   Bienvenue Visiteur
                </div>
                <div class ="sub-title m-b-md2">
                  < Julien Meyer / Développeur Java />

                </div>

                <div class="links">
                <a href="http://127.0.0.1./contact">Soon</a>
                 <a href="http://127.0.0.1./dev">Soon</a>
                 <a href="http://127.0.0.1./Mcp">Soon</a>
                 <a href="https://github.com/lummix">GitHub</a>
                </div>
            </div>
        </div>
    </body>
</html>
