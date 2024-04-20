<!DOCTYPE html>
<html lang="ro">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ArkLine - Servicii Foto și Video</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            color: #333;
            background-color: #fff;
        }

        header, footer {
            background-color: #000;
            color: #fff;
            padding: 10px 20px;
            text-align: center;
        }

        nav ul {
            list-style-type: none;
            padding: 0;
        }

        nav ul li {
            display: inline;
            margin-right: 10px;
        }

        .hero {
            background-color: #000;
            color: #fff;
            padding: 20px;
            text-align: center;
        }

        .services {
            display: flex;
            justify-content: space-around;
            padding: 20px;
        }

        .service {
            background-color: #eee;
            padding: 10px;
            width: 30%;
            text-align: center;
        }

        .btn-primary {
            background-color: #ff0000;
            color: #fff;
            padding: 10px 20px;
            text-decoration: none;
            border-radius: 5px;
        }
    </style>
</head>
<body>
   <header>
    <a href="index.php">
        <img src="Logo ArkLine.png" alt="ArkLine Logo" style="height: 250px;"> <!-- Modifică src cu calea către logo-ul tău -->
    </a>
    <nav>
        <ul>
            <li><a href="index.php">Acasă</a></li>
            <li><a href="despre.php">Despre noi</a></li>
            <li><a href="servicii.php">Servicii</a></li>
            <li><a href="oferte.php">Oferte</a></li>
            <li><a href="contact.php">Contact</a></li>
        </ul>
    </nav>
</header>
    
    <main>
        <section class="hero">
            <h1>Bine ai venit la ArkLine!</h1>
            <p>Profesionalism și pasiune în fiecare cadru.</p>
            <a href="#contact" class="btn-primary">Contactează-ne</a>
        </section>

        <section class="services">
            <h2>Serviciile Noastre</h2>
            <div class="service">
                <h3>Fotografie</h3>
                <p>Descriere serviciu fotografie.</p>
            </div>
            <div class="service">
                <h3>Video</h3>
                <p>Descriere serviciu video.</p>
            </div>
        </section>
    </main>

    <footer>
        <p>&copy; 2024 ArkLine. Toate drepturile rezervate.</p>
    </footer>
    
    <script>
        // JavaScript code can go here if needed
    </script>
</body>
</html>

