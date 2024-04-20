<!DOCTYPE html>
<html lang="ro">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exemple Video - ArkLine Production</title>
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
        .video-gallery {
            padding: 20px;
            display: flex;
            flex-wrap: wrap;
            justify-content: space-around;
        }
        .video {
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            margin: 10px;
            overflow: hidden;
        }
        .video iframe {
            width: 560px;
            height: 315px;
        }
        @media screen and (max-width: 600px) {
            .video iframe {
                width: 100%;
                height: auto;
            }
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
                <li><a href="exemple_video.php">Exemple Video</a></li>
                <li><a href="contact.php">Contact</a></li>
            </ul>
        </nav>
    </header>
    
    <main>
        <section class="video-gallery">
            <div class="video">
                <!-- Înlocuiește "embed_video_id" cu ID-ul real al videoclipului de pe YouTube -->
                <iframe src="https://www.youtube.com/embed/embed_video_id" 
                        frameborder="0" 
                        allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" 
                        allowfullscreen></iframe>
            </div>
            
               <div class="video">
                <!-- Înlocuiește "embed_video_id" cu ID-ul real al videoclipului de pe YouTube -->
                <iframe src="https://www.youtube.com/embed/embed_video_id" 
                        frameborder="0" 
                        allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" 
                        allowfullscreen></iframe>
            </div>
            
               <div class="video">
                <!-- Înlocuiește "embed_video_id" cu ID-ul real al videoclipului de pe YouTube -->
                <iframe src="https://www.youtube.com/embed/embed_video_id" 
                        frameborder="0" 
                        allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" 
                        allowfullscreen></iframe>
            </div>
            
               <div class="video">
                <!-- Înlocuiește "embed_video_id" cu ID-ul real al videoclipului de pe YouTube -->
                <iframe src="https://www.youtube.com/embed/embed_video_id" 
                        frameborder="0" 
                        allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" 
                        allowfullscreen></iframe>
            </div>
            <!-- Repetă blocul de mai sus pentru fiecare videoclip pe care vrei să-l afișezi -->
        </section>
    </main>

    <footer>
        <p>&copy; 2024 ArkLine. Toate drepturile rezervate.</p>
    </footer>
</body>
</html>


