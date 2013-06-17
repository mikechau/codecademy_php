
<ul>
<?php
  // set variable to url
  $url = "http://openexchangerates.org/api/currencies.json";

  // initialize curl resource
  $curl = curl_init();

  // call curl_setopt on $curl to modify curl url
  curl_setopt ($curl, CURLOPT_URL, $url);

  // call curl_setopt on $curl to tell it to return the data as a string when curl_exec is ran
  curl_setopt ($curl, CURLOPT_RETURNTRANSFER, 1);

  // curl_exec captures the return value
  $result = curl_exec ($curl);

  // close the curl session to free memory
  curl_close ($curl);

  // converts json to php variable, setting 1 means convert it to an array 
  $currencies = json_decode($result, 1);

  // loop through the $currencies array, where key is $symbol and value is $name
  foreach ($currencies as $symbol => $name) {
    print "<li>{$symbol} = {$name}</li> \n";
  }
?>
</ul>
