<?php

    require_once("personne.php"); 

    $p1 = new Personne();
    $p1->set_nom("Bob");
    $p1->set_prenom("Marley");
    $p1->set_age(36);
    $p1->affiche();
    
    $p2 = new Personne();
    $p2->set_nom("Lighyear");
    $p2->set_prenom("Buzz");
    $p2->set_age(28);
    $p2->affiche();
    
    $p3 = new Personne();
    $p3->set_nom("Férellec-Lozach");
    $p3->set_prenom("Alan");
    $p3->set_age(22);
    $p3->affiche();
    
    $p4 = new Personne();
    $p4->set_nom("Didier");
    $p4->set_prenom("Drogba");
    $p4->set_age(45);
    $p4->affiche();
    
    $p5 = new Personne();
    $p5->set_nom("Lana");
    $p5->set_prenom("Rhoades");
    $p5->set_age(26);
    $p5->affiche();

?>