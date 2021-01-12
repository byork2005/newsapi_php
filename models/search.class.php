<?php

class search {

  public $api_key = "&apiKey=61c42825ab754c2b973d3041c2523b3f";
  public $url = "https://newsapi.org/v2/everything?language=en&q=";
  public $data;

  public function news_search($input) {
    $request_url = $this-> url . $input . $this -> api_key;
    $curl = curl_init($request_url);
    curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($curl, CURLOPT_HTTPHEADER, array("Content-Type: application/json"));

    $response = curl_exec($curl);
    curl_close($curl);

    $this -> data = $response;
  }








}

?>