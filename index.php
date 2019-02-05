<!DOCTYPE HTML>
<html>
 <head>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
  <title>Баллистический калькулятор</title>
  <link rel="stylesheet" type="text/css" href="index_1.css">
 </head>
 <body>
  <div class="text">
   <h1>БАЛЛИСТИЧЕСКИЙ КАЛЬКУЛЯТОР</h1>
  </div>
    <form method="post" action""> 
	<p class="distance1">ДАЛЬНОСТЬ (м), max=30 м</p>
	<p class="wind_speed1">СКОРОСТЬ ВЕТРА (м/с), max=10 м/с</p>
	<p class="direction_wind1">НАПРАВЛЕНИЕ ВЕТРА</p>
	
	<input type="text" id="distance1" name="distance1" size="2" class="distance" value="" /><br/>
	<input type="text" id="wind_speed1" name="wind_speed1" size="2" class="wind_speed" value="" /><br/>
    <select name="direction_wind1" id="direction_wind1" class="direction_wind">
            	<option value=""></option>
                <option value="n">север</option>
    	        <option value="s">юг</option>
    	        <option value="w">запад</option>
    	        <option value="o">восток</option>
    	        <option value="nw">северо-запад</option>
    	        <option value="sw">юго-запад</option>
    	        <option value="no">северо-восток</option>
    	        <option value="so">юго-восток</option>
     </select> <br>
     
 <input type="submit" name="submit" value="ВЫЧИСЛИТЬ (СБРОСИТЬ ДАННЫЕ)" class="cnop1"/><br/>
</form>
<p class="vertical">ВЕРТИКАЛЬ (см)</p>
<p class="horizontal">ГОРИЗОНТАЛЬ (см)</p>

<?php

    $distance = $_POST['distance1'];
    $wind_speed = $_POST['wind_speed1'];
    $direction_wind = $_POST['direction_wind1'];
    
    switch ($distance) {
      case '1':
      $deviation = -10.1;
      break;
      case '2':
      $deviation = -5.9;
      break;
      case '3':
      $deviation = -2.4;
      break;
      case '4':
      $deviation = 0.3;
      break;
      case '5':
      $deviation = 2.3;
      break;
      case '6':
      $deviation = 3.5;
      break;
      case '7':
      $deviation = 3.9;
      break;
      case '8':
      $deviation = 3.4;
      break;
      case '9':
      $deviation = 2.2;
      break;
      case '10':
      $deviation = 0;
      break;
      case '11':
      $deviation = -3.1;
      break;
      case '12':
      $deviation = -7;
      break;
      case '13':
      $deviation = -11.9;
      break;
      case '14':
      $deviation = -17.8;
      break;
      case '15':
      $deviation = -24.7;
      break;
      case '16':
      $deviation = -32.5;
      break;
      case '17':
      $deviation = -41.5;
      break;
      case '18':
      $deviation = -51.5;
      break;
      case '19':
      $deviation = -62.5;
      break;
      case '20':
      $deviation = -74.8;
      break;
      case '21':
      $deviation = -88.1;
      break;
      case '22':
      $deviation = -102.7;
      break;
      case '23':
      $deviation = -118.4;
      break;
      case '24':
      $deviation = -135.4;
      break;
      case '25':
      $deviation = -153.7;
      break;
      case '26':
      $deviation = -173.3;
      break;
      case '27':
      $deviation = -194.2;
      break;
      case '28':
      $deviation = -216.5;
      break;
      case '29':
      $deviation = -240.2;
      break;
      case '30':
      $deviation = -265.3;
      break;
    
  }
  
  switch ($wind_speed)
  {
      case '1': 
      $correction = $distance * 0.06;
      break;
      case '2': 
      $correction = $distance * 0.21;
      break;
      case '3': 
      $correction = $distance * 0.21;
      break;
      case '4': 
      $correction = $distance * 0.23;
      break;
      case '6': 
      $correction = $distance * 0.49;
      break;
      case '7': 
      $correction = $distance * 0.49;
      break;
      case '8': 
      $correction = $distance * 0.49;
      break;
      case '9': 
      $correction = $distance * 0.59;
      break;
      case '10': 
      $correction = $distance * 0.59;
      break;
  }
  
 
  if ($direction_wind == 'nw' or $direction_wind == 'no' or $direction_wind == 'sw'
      or $direction_wind == 'so')
  {
    $correction = $correction/2;  
  }
  if ($direction_wind == 'n' or $direction_wind == 's')
  {
    $correction = 0;  
  }
 
  $vertical = $deviation;
  $horizontal = $correction;
  
  if ($distance >=31 or $wind_speed >=10)
  {
      echo '<p class="signal">ВВЕДЕНЫ НЕКОРРЕКТНЫЕ ДАННЫЕ:<br>- дальность max=30 м,<br>- скорость ветра max=10 м/с</p>';
  
  }
  else
  {
   echo '<p class="vertical11">'.$vertical.'</p><br>';
   echo '<p class="horizontal11">'.$horizontal.'</p>';
  }
	?>  

 </body>
</html>