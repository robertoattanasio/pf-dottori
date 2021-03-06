<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    {{-- GOOGLE FONTS KARLA --}}
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Karla:ital,wght@0,200;0,300;0,400;0,500;0,600;0,700;0,800;1,200;1,300;1,400;1,500;1,600;1,700;1,800&display=swap" rel="stylesheet">

    {{-- FONT AWESOME --}}
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" integrity="sha512-iBBXm8fW90+nuLcSKlbmrPcLa0OT92xO1BIsZ+ywDWZCvqsWgccV3gFoRBv0z+8dLJgyAHIhR35VZc2oM/gI1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    
    {{-- STYLES CSS --}}
    <link rel="stylesheet" href="{{asset('css/styles.css')}}">


    {{-- TITLE --}}
    <title>@yield('pageTitle') | TrueDoctors</title>

</head>
<body>

    <div id="loader"></div>
    
    <main class="card">
        <div class="wrapper-auth">
            @yield('content')
        </div>
    </main>

    <script>

        var body = document.getElementById('mainBody');
        var loader = document.getElementById('loader');

        window.addEventListener('load', function(){
            loader.style.opacity = 0;

            setTimeout(function(){ 
            body.style.overflow = 'auto';
                }, 100);
        })

    </script>

</body>
</html>