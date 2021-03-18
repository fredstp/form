<?php
// fonction nombre de personne 

function nombrePersonne ($nbAdult, $nbChild)
{
    $resultat = $nbAdult+$nbChild; 
    return $resultat;
};

function checkRevenue ($fiscal, $min, $max)
{
    if ($fiscal >= $min && $fiscal <= $max)
    {
        return true;
    };
};