<?php
    require "Titulaire.php";
    require "Compte.php";

    $martin = new Titulaire("Mystère", "Martin", "2001/02/02", "Mulhouse");
    $didier = new Titulaire("Deschamps", "Didier", "1982/10/25", "Paris");
    // $compte = new Compte("Compte courant", 125.5, "€", $Didier);
    // $compte2 = new Compte("Compte courant", 2000, "€", $Didier);

    // $compte->debit(120);
    // var_dump($Didier);

    echo $didier->calcAge();


?>