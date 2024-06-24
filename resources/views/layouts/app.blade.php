<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    {{-- Fontes --}}
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Teko:wght@300..700&display=swap" rel="stylesheet">
    
    {{-- Bootstrap e CSS --}}
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="app.css">
    <link rel="stylesheet" href="@yield('css')">
    <title>@yield('title')</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }
    
        body {
            font-family: 'Teko', sans-serif;
            color: #333;
            font-size: 1.2rem;
            letter-spacing: 1px;
            line-height: auto;
            overflow-x: hidden;
        }
    
        header {
            top: 0;
            width: 100%;
            background: #fff;
            padding: 10px 20px;
            display: flex;
            justify-content: space-between;
            align-items: center;
            z-index: 1000;
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
            height: 100vh;
            background-color: #fff;
            display: flex;
            justify-content: center;
            align-items: center;
            text-align: center;
        }
    
        footer {
            background: #333;
            color: #fff;
            text-align: center;
            padding: 20px 0;
            position: relative;
        }
    
        footer .social-icons {
            margin-top: 10px;
        }
    
        footer .social-icons a {
            color: #fff;
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
    
    </style>
</head>
<body>
    <header class="header">
        <x-navbar/>
    </header>

    <div class="content">
        {{ $slot }}
    </div>

    <footer>
        <p>&copy; EEDJA. Todos os direitos reservados.</p>
        <div class="social-icons">
            <ion-icon name="logo-instagram"></ion-icon>
            <ion-icon name="logo-facebook"></ion-icon>
            <ion-icon name="logo-twitter"></ion-icon>    
        </div>
    </footer>

    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>