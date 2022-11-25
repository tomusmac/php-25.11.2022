<?php
function zamien($plik) {
    if(file_exists($plik)) {
    $wiersze=file($plik);
    file_put_contents($plik,array_reverse($wiersze));
    echo "$plik zostal zamieniony";
} else {
    echo "$plik nie istnieje";
}
}
zamien('./plik7.2.txt');
?>