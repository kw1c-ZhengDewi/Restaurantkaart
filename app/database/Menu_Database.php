<?php

// Volledig pad naar autoload bestand opbouwen
$autoloadPath = $_SERVER['DOCUMENT_ROOT'] . '/../restaurantkaart/vendor/autoload.php';

// Controleren of het bestand bestaat voordat we het inladen
if (file_exists($autoloadPath)) {
    require $autoloadPath;
    // ✅ Bestand is succesvol ingeladen
    echo "Het bestand is gevonden";
} else {
    echo "❌ Bestand niet gevonden: $autoloadPath";
}
