<?php

$username = $_POST['username'];
$password = $_POST['password'];

//1. Haal gegevens van gebruiker op, aan de hand van email/username
//   Vijfstappenplan:
//      1. Haal de verbinding erbij
//      2. Schrijf de query met placeholders (SELECT * FROM users WHERE .......)
//      3. Zet om naar een prepared-statement
//      4. Voer het statement uit
//      5. Haal de gegevens op (tip: je verwacht één resultaat, niet een lijst)


//2. Check of je een resultaat krijgt (anders: account bestaat niet)
//   If-statement, check of "$statement->rowCount()" kleiner is dan 1


//3. Check of het ingevulde wachtwoord klopt met die uit de DB
//   Gebruik hiervoor password_verify(), zie evt. http://php.net/password_verify


//4. Alles alles klopt: stop gebruikersgegevens in de session
//   $_SESSION['user_id'] = ............
//   $_SESSION['user_name'] = ..........


