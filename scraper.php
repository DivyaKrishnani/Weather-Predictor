<?php

$city = $_GET['city'];

$city=str_replace(" ", "", $city);
#str_replace(what to remove,what to change to,replacing with)

$contents=file_get_contents("http://www.weather-forecast.com/locations/".$city."/forecasts/latest");


preg_match('/3 Day Weather Forecast Summary:<\/b><span class="read-more-small"><span class="read-more-content"> <span class="phrase">(.*?)<\/span><\/span></s', $contents, $matches);


#<\/span) \ is to escape not to be considered as end.

# /s for multiline check

echo $matches[1];

?>
