<?php
/*
Template Name: Adoptable Buns Endpoint
*/
header('Content-type: application/json');

$response = file_get_contents('http://api.petfinder.com/pet.getRandom?key=43f17b198413d28662c918a83e33dae0&animal=rabbit&status=A&format=json&output=full');

echo $response;

?>