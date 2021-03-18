<?php
require_once "fonction.php";
// tableau de revenu
$revenue1 = [
    "min" => 27256 ,
    "max" => 38377,
];
$revenue2 = [
    "min" => 36397 ,
    "max" => 577357,
];
$revenue3 = [
    "min" => 43771 ,
    "max" => 68946,
];
$revenue4 = [
    "min" => 52842 ,
    "max" => 82586,
];
$revenue5 = [
    "min" => 62163 ,
    "max" => 97766,
];
$revenue6 = [
    "min" => 70058 ,
    "max" => 110017,
];

// variables 
$name = ($_POST["userName"]);
$firstName = ($_POST["firstName"]);
$adress =  ($_POST["adress"]);
$phone =  ($_POST["phone"]);
$mail = ($_POST["mail"]);
$adultNumber = ($_POST["adultNumber"]);
$childNumber = ($_POST["childNumber"]);
$incomeMonth = ($_POST["incomeMonth"]);
$taxIncome = ($_POST["taxIncome"]);
// détermine le nombre de personne en additionnant
$nbPersonne = $adultNumber + $childNumber;

// si incomeMonth, taxIncome et le nombre de personne ne sont pas vide, on traite les donnés
if (!empty($incomeMonth) && (!empty($taxIncome)) && (!empty($nbPersonne))) 
{
    //traitement en fonction du nombre de personne
    if ($nbPersonne >= 6 ) {
        $checkRevenue = checkRevenue($taxIncome,$revenue6['min'],$revenue6['max']);
        if ($checkRevenue == true) {
            header("location: succes.html");
        } else {
            echo "Vous n'êtes pas éligible";
        };
    } else if ($nbPersonne === 5) {
        $checkRevenue = checkRevenue($taxIncome,$revenue5['min'],$revenue5['max']);
        if ($checkRevenue == true){
            header("location: succes.html");
        } else {
            echo "Vous n'êtes pas éligible";
        }; 
    } else if ($nbPersonne === 4) {
        $checkRevenue = checkRevenue($taxIncome,$revenue4['min'],$revenue4['max']);
        if ($checkRevenue == true){
            header("location: succes.html");
        } else {
            echo "Vous n'êtes pas éligible";
        }; 
    } else if ($nbPersonne === 3) {
        $checkRevenue = checkRevenue($taxIncome,$revenue3['min'],$revenue3['max']);
        if ($checkRevenue == true){
            echo header("location: succes.html");
        } else {
            echo "Vous n'êtes pas éligible";
        };
    } else if ($nbPersonne === 2) {
        $checkRevenue = checkRevenue($taxIncome,$revenue2['min'],$revenue2['max']);
        if ($checkRevenue == true){
            header("location: succes.html");
        } else {
            echo "Vous n'êtes pas éligible";
        };
    } else if ($nbPersonne === 1) {
        $checkRevenue = checkRevenue($taxIncome,$revenue1['min'],$revenue1['max']);
        if ($checkRevenue == true){
            header("location: succes.html");
        }else {
             echo "Vous n'êtes pas éligible";
        };
    } 
}
?>