<!DOCTYPE html>
<html>
<head>
    <title>SALJITELJ</title>
    <meta charset="UTF-8">
</head>
<body>
<h2>Slanje poruke</h2>
<?php
$mail = $_POST["mail"];
$naslov = $_POST["naslov"];
$txt = $_POST["tekst"];

echo "Primatelj: $mail<br>";
echo "Naslov: $naslov<br>";
echo "Tekst poruke: $txt<br><br>";

ini_set("SMTP", "smtp.gmail.com");
ini_set("sendmail_from", "matthouse.kucinac@gmail.com");

if(mail($mail, $naslov, $txt)){
    echo "Poruka poslana<br>";
}else{
    echo "Poruka nije poslana<br>";
}
?>
<br>
<a href="index.html">Unos nove poruke</a>
</body>
</html>