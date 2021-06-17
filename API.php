<?php

Class API {

  public function GetEyeColor($id){

    $url = "https://swapi.dev/api/people/" . $id. "/"; 
    $ch = curl_init();  
    // Récupérer le contenu de la page
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1); 
  
    //Saisir l'URL et la transmettre à la variable.
    curl_setopt($ch, CURLOPT_URL, $url); 
    //Désactiver la vérification du certificat puisque waytolearnx utilise HTTPS
    curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
    //Exécutez la requête 
    $result1 = curl_exec($ch); 
  
    $data1 = json_decode($result1, true);
    return $data1["eye_color"];
  
  }
  
  public function GetNamePlanet($id){
  
    $url = "https://swapi.dev/api/planets/" . $id. "/"; 
    $ch = curl_init();  
    // Récupérer le contenu de la page
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1); 
  
    //Saisir l'URL et la transmettre à la variable.
    curl_setopt($ch, CURLOPT_URL, $url); 
    //Désactiver la vérification du certificat puisque waytolearnx utilise HTTPS
    curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
    //Exécutez la requête 
    $result = curl_exec($ch); 
  
    $data = json_decode($result, true);
    return $data["name"];
    
  }

  public function GetFullInfoPeople($id){

    $url = "https://swapi.dev/api/people/" . $id. "/"; 
    $ch = curl_init();  
    // Récupérer le contenu de la page
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1); 
  
    //Saisir l'URL et la transmettre à la variable.
    curl_setopt($ch, CURLOPT_URL, $url); 
    //Désactiver la vérification du certificat puisque waytolearnx utilise HTTPS
    curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
    //Exécutez la requête 
    $result = curl_exec($ch); 
  
    $data = json_decode($result, true);
    return $data;
  
  }


}



?>