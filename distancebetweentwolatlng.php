<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Calculate distance between two latitude longitude using PHP</title>
</head>

<body>
<?php
function distancebetweentwolatlng($lat1, $lon1, $lat2, $lon2, $unit) 
{
  $theta = $lon1 - $lon2;
  $dist = sin(deg2rad($lat1)) * sin(deg2rad($lat2)) +  cos(deg2rad($lat1)) * cos(deg2rad($lat2)) * cos(deg2rad($theta));
  $dist = acos($dist);
  $dist = rad2deg($dist);
  $miles = $dist * 60 * 1.1515;
  $unit = strtoupper($unit);

  if ($unit == "KM") {
    return ($miles * 1.609344);
  } else if ($unit == "NM") {
      return ($miles * 0.8684);
    } else {
        return $miles;
      }
}

echo number_format(distancebetweentwolatlng(28.721909, 77.191567, 12.756225, 80.228258, "KM"),2) . " Kilometers<br>";
echo number_format(distancebetweentwolatlng(28.721909, 77.191567, 12.756225, 80.228258, "MI"),2) . " Miles<br>";
echo number_format(distancebetweentwolatlng(28.721909, 77.191567, 12.756225, 80.228258, "NM"),2) . " Nautical Miles<br>";
?>
</body>
</html>
