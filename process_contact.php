<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $date = trim($_POST['date']);
    $eventType = trim($_POST['event-type']);
    $details = trim($_POST['details']);

    $to = 'Production.arkline@gmail.com';
    $subject = "Cerere rezervare pentru data $date";
    $body = "Data evenimentului: $date\n" .
            "Tipul evenimentului: $eventType\n" .
            "Detalii: $details";
    
    $headers = "From: webmaster@arkline.ro\r\n";
    $headers .= "Reply-To: webmaster@arkline.ro\r\n";
    $headers .= "X-Mailer: PHP/" . phpversion();

    if (mail($to, $subject, $body, $headers)) {
        echo "Mesajul a fost trimis. Vă mulțumim pentru că ne-ați contactat!";
        // Aici poți adăuga o redirecționare sau o confirmare de primire pe pagina web
    } else {
        echo "Ne pare rău, a apărut o eroare la trimiterea mesajului.";
    }
} else {
    // Dacă formularul nu a fost trimis corect, afișează un mesaj de eroare
    echo "Formularul trebuie trimis pentru a procesa datele.";
}
?>
