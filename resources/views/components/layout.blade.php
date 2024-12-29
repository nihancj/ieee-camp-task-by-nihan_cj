<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Home page for a technical organization.">
    <title>TechOrg - Innovating the Future</title>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500&display=swap" rel="stylesheet">
    <style>
        body {
            font-family: 'Roboto', sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f4f4f4;
            color: #333;
        }

        header {
            background-color: #333;
            color: #fff;
            padding: 15px 0;
        }

        header .container {
            width: 80%;
            margin: 0 auto;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        header nav ul {
            list-style: none;
            margin: 0;
            padding: 0;
            display: flex;
        }

        header nav ul li {
            margin-right: 20px;
        }

        header nav ul li a {
            color: #fff;
            text-decoration: none;
            font-size: 16px;
            font-weight: 500;
        }

        header nav ul li a:hover {
            text-decoration: underline;
        }

        .hero {
            background: url('https://via.placeholder.com/1500x800/333/fff?text=Tech+Innovation') center/cover;
            height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
            color: #fff;
            text-align: center;
            padding: 0 20px;
        }

        .hero h1 {
            font-size: 50px;
            margin: 0;
            font-weight: 700;
        }

        .hero p {
            font-size: 18px;
            margin-top: 20px;
        }

        .cta-button {
            margin-top: 30px;
            padding: 15px 30px;
            background-color: #ff6f61;
            color: #fff;
            font-size: 16px;
            text-decoration: none;
            border-radius: 5px;
            font-weight: 600;
        }

        .cta-button:hover {
            background-color: #ff4a3d;
        }

        section {
            padding: 60px 0;
            text-align: center;
        }

        section h2 {
            font-size: 32px;
            margin-bottom: 30px;
        }

        .service-cards {
            display: flex;
            justify-content: space-around;
            gap: 20px;
            flex-wrap: wrap;
        }

        .service-card {
            background-color: #fff;
            padding: 25px;
            width: 250px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            border-radius: 8px;
            text-align: center;
        }

        .service-card h3 {
            margin-top: 10px;
            font-size: 20px;
            font-weight: 600;
        }

        footer {
            background-color: #333;
            color: #fff;
            text-align: center;
            padding: 30px 20px;
        }

        footer a {
            color: #fff;
            text-decoration: none;
            font-weight: 600;
        }

        footer a:hover {
            text-decoration: underline;
        }
    </style>
</head>
<body>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

    <header>
        <div class="container">
            <div class="logo">
                <h1>IEEE LINK</h1>
            </div>
            <nav>
                <ul>
                    <li><a href="#home">Home</a></li>
                    <li><a href="#about">About Us</a></li>
                    <li><a href="#services">Services</a></li>
                    <li><a href="#contact">Contact</a></li>
                </ul>
            </nav>
        </div>
    </header>
    @yield('page-content')
    <footer>
        <p>&copy; Copyleft <b>IEEE Kerala Section</b>. All Rights Reserved</p>
        <p>Developed and Mantained by <a href="https://github.com/nihancj">Nihan</a></p>
    </footer>

</body>
</html>
