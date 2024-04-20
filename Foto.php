<!DOCTYPE html>
<html lang="ro">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exemple Foto - ArkLine Production</title>
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
        .gallery {
            display: flex;
            flex-wrap: wrap;
            padding: 20px;
            justify-content: space-around;
        }
        .photo {
            margin: 10px;
            border: 3px solid #fff;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
        .photo img {
            width: 100%;
            height: auto;
            display: block;
        }
        .modal {
            display: none; 
            position: fixed; 
            z-index: 1000; 
            left: 0;
            top: 0;
            width: 100%; 
            height: 100%; 
            overflow: auto; 
            background-color: rgb(0,0,0); 
            background-color: rgba(0,0,0,0.9); 
        }
        .modal-content {
            margin: auto;
            display: block;
            width: 80%;
            max-width: 700px;
        }
        .close {
            position: absolute;
            top: 15px;
            right: 35px;
            color: #f1f1f1;
            font-size: 40px;
            font-weight: bold;
            transition: 0.3s;
        }
        .close:hover,
        .close:focus {
            color: #bbb;
            text-decoration: none;
            cursor: pointer;
        }
    </style>
</head>
<body>
    <header>
        <a href="index.php">
            <img src="logo_path.png" alt="ArkLine Logo" style="height: 50px;"> <!-- Actualizează calea logo-ului -->
        </a>
        <nav>
            <ul>
                <li><a href="index.php">Acasă</a></li>
                <li><a href="despre.php">Despre noi</a></li>
                <li><a href="servicii.php">Servicii</a></li>
                <li><a href="oferte.php">Oferte</a></li>
                <li><a href="exemple_foto.php">Exemple Foto</a></li>
                <li><a href="contact.php">Contact</a></li>
            </ul>
        </nav>
    </header>
    
    <main>
        <section class="gallery">
            <!-- Exemplu de imagine în galerie -->
            <div class="photo">
                <img src="imagine1.jpg" alt="Exemplu foto 1" onclick="openModal(this);">
            </div>
            <!-- Repetă blocul de mai sus pentru fiecare fotografie -->
            <!-- Mai adaugă alte imagini aici -->
        </section>

        <!-- Modalul pentru vizualizare la mărime completă -->
        <div id="myModal" class="modal">
            <span class="close" onclick="closeModal()">&times;</span>
            <img class="modal-content" id="img01">
        </div>
    </main>

    <footer>
        <p>&copy; 2024 ArkLine. Toate drepturile rezervate.</p>
    </footer>
    
    <script>
        // Funcția pentru a deschide modalul cu imaginea la mărime completă
        function openModal(img) {
            var modal = document.getElementById("myModal");
            var modalImg = document.getElementById("img01");
            modal.style.display = "block";
            modalImg.src = img.src;
        }

        // Funcția pentru a închide modalul
        function closeModal() {
            var modal = document.getElementById("myModal");
            modal.style.display = "none";
        }
    </script>
</body>
</html>


