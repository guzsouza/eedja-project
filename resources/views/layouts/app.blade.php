<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <link rel="icon" type="image/png" href="/img/logo-eedja.svg">

    {{-- Fontes --}}
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    {{-- <link href="https://fonts.googleapis.com/css2?family=Teko:wght@300..700&display=swap" rel="stylesheet"> --}}
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet">

    {{-- Bootstrap e CSS --}}
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="app.css">
    <link rel="stylesheet" href="@yield('css')">

    {{-- Jquery --}}
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <title>@yield('title')</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }
    
        body {
            font-family: 'Roboto', sans-serif;
            color: #333;
            font-size: 1.2rem;
            overflow-x: hidden;
        }
    
        .logo {
            font-size: 1.5em;
            font-weight: bold;
        }
    
        nav ul {
            list-style: none;
            display: flex;
        }
    
        nav ul li {
            margin: 0 10px;
        }
    
        nav ul li a {
            text-decoration: none;
            color: #333;
            padding: 5px 10px;
            transition: color 0.3s ease;
        }
    
        nav ul li a:hover {
            color: #007BFF;
        }

        #hero {
            display: flex;
            justify-content: center;
            align-items: center;
            text-align: center;
            height: 100vh;
            background-color: #fafafa;
        }
    
        footer {
            bottom: 0;
            background: #00000f;
            color: #ffffff;
            text-align: center;
            padding: 20px 0;
            position: relative;
        }
    
        footer .social-icons {
            margin-top: 10px;
        }
    
        footer .social-icons a {
            color: #ffffff;
            margin: 0 5px;
            text-decoration: none;
            font-size: 1.2em;
            transition: color 0.3s ease;
        }
    
        footer .social-icons a:hover {
            color: #007BFF;
        }

        .ionic{
            font-size: 1.5rem;
        }

        .header-container{
            -webkit-box-shadow: 0px 5px 10px 0px rgba(0,0,0,0.02);
            -moz-box-shadow: 0px 5px 10px 0px rgba(0,0,0,0.02);
            box-shadow: 0px 5px 10px 0px rgba(0,0,0,0.02);
        }
        
        .content{
            padding: 4% 6%;
        }
    </style>
</head>
<body>
    <header class="header-container">
        <x-navbar/>
    </header>

    <div class="content">
        {{ $slot }}
    </div>

    <footer>
        <p>&copy; EEDJA. Todos os direitos reservados.</p>
        <div class="social-icons">
            <a href=""><ion-icon name="logo-instagram"></ion-icon></a>
            <a href=""><ion-icon name="logo-facebook"></ion-icon></a>
            <a href=""><ion-icon name="logo-twitter"></ion-icon></a>
        </div>
    </footer>

    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>