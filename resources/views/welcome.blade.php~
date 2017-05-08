<!DOCTYPE html>
<html lang="{{ config('app.locale') }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
        <!-- Styles -->
        <style>
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Raleway', sans-serif;
                font-weight: 100;
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

            .links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 12px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
            }
            select {
                -webkit-appearance: none; 
                -moz-appearance: none;
                appearance: none;       /* remove default arrow */
                margin-right:25px;
                letter-spacing: .1rem;
            }

        </style>
    </head>
    <body>
        <div class="flex-center position-ref full-height">
            <?php 

              if(App::getLocale() == 'en') { LaravelLocalization::setLocale('en'); }elseif(App::getLocale() == 'fr') {

              LaravelLocalization::setLocale('fr'); }else { LaravelLocalization::setLocale('en'); }
            
            ?>

            @if (Route::has('login'))
                <div class="top-right links">
                    @if (Auth::check())
                        <a href="{{ url('/home') }}">@lang('keywords.Home')</a>

                    @else
                        <select>
                              <option value="en">Change Language</option>  
                              <option value="en">English</option>
                              <option value="fr">French</option>
                        </select>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;

                        <a href="{{ url('/login') }}">@lang('keywords.Login')</a>
                        <a href="{{ url('/register') }}">@lang('keywords.Register')</a>
                         
                    @endif
                </div>
            @endif

            <div class="content">
                 <div class="title m-b-md">
                    @lang('keywords.AppName')
                </div>

                <div class="links">
                    
                    <a href="https://laravel.com/docs">  @lang('messages.Language Test')</a>
                   
                </div>
            </div>
        </div>
    </body>
</html>


<script type="text/javascript">
    
    $('select').on('change', function() {
      
        var lang = this.value; $(location).attr('href', 'http://localhost/ABase/quickstartLang/public/'+lang);
    });

</script>
