<?php
function zamien($plik) {
    if(file_exists($plik)) {
    $slowa=file($plik);
    $znaki=["A" => "Ą","a" => "ą","C" => "Ć","c" => "ć","E" => "Ę","e" => "ę","L" => "Ł","l" => "ł","N" => "Ń","n" => "ń","O" => "Ó","o" => "ó","S" => "Ś","s" => "ś","Z" => "Ź","z" => "ź","Z" => "Ż","z" => "ż"];
    file_put_contents($plik,str_replace(array_values($znaki), array_keys($znaki), $slowa));
    echo "$plik zostal zamieniony";
} else {
    echo "$plik nie istnieje";
}
}
zamien('./plik7.1.txt');
?>