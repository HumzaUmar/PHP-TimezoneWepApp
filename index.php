<!DOCTYPE html>
<html>
<head>
	<title>TIMEZONE</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <link rel="stylesheet" type="text/css" href="main.css">

</head>
<body>
<header>
<div class="container">
<div id="logo">	
<h1>T - <span style="color:#008eed">Zone</span></a></h1>
</div>		
</div>
</header>


<div class="main-text">
<div class="row">


<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
<form method="post">
	<input type="text" name="country_txt" style=" width: 350px; height: 50px; text-align: center; border-radius: 8px; " placeholder="Enter Location" >
</div>	


<div class="col-xs-12" style="margin-top:20px;">

	<div class="hint">
  	<p>E.g(Berlin, Qatar, Tokyo)</p>
</div>


  <button class="btn btn-default" title="Add Location" type="submit" name="submit_btn" style="height: 40px; border-radius: 10px;  background-color: #008eed; ">
  <i class="glyphicon glyphicon-plus" style="color: white;"></i>
  </button>

    <button class="btn btn-default" title="Current Location" type="submit" name="current_btn" style="height: 40px; border-radius: 10px;  background-color: #008eed; ">
  <i class="glyphicon glyphicon-user" style="color: white;"></i>
  </button>


  <button class="btn btn-default" title="Favourite Location"  type="submit" name="fav_btn" style="height: 40px; border-radius: 10px; background-color: #008eed;">
  <i class="glyphicon glyphicon-star" style="color: white;"></i>
  </button>

  <button class="btn btn-default" title="Reset Location" type="submit" name="reset_btn" style="height: 40px; border-radius: 10px; background-color: #008eed;">
  <i class="glyphicon glyphicon-trash" style="color: white;"></i>
  </button>

  </div>
 
  
</form>	
</div>
</div>

<?php 


$conn = new mysqli('localhost','root','','countries_db');
if($conn -> connect_error)
{
	die("Error". $conn -> connect_error);
}


if(isset($_POST['submit_btn']))
 {


 	$country = ucwords($_POST['country_txt']);

	switch ($country) {
        case "Andorra":
            $mytime = "Europe/Andorra";
            break;
        case "Dubai":
            $mytime = "Asia/Dubai";
            break;
        case "Kabul":
            $mytime = "Asia/Kabul";
            break;
        case "Antigua":
            $mytime = "America/Antigua";
            break;
        case "Anguilla":
            $mytime = "America/Anguilla";
            break;
        case "Tirane":
            $mytime = "Europe/Tirane";
            break;
        case "Yerevan":
            $mytime = "Asia/Yerevan";
            break;
        case "Curacao":
            $mytime = "America/Curacao";
            break;
        case "Luanda":
            $mytime = "Africa/Luanda";
            break;
        case "South Pole":
            $mytime = "Antarctica/South_Pole";
            break;
         case "Buenos Aires":
            $mytime = "America/Argentina/Buenos_Aires";
            break;


                case "Catamarca":
                    $mytime = "America/Argentina/Catamarca";
                    break;
                case "Tucuman":
                    $mytime = "America/Argentina/Tucuman";
                    break;
                case "Rio Gallegos":
                    $mytime = "America/Argentina/Rio_Gallegos";
                    break;
                case "Cordoba":
                    $mytime = "America/Argentina/Cordoba";
                    break;
                case "Tucuman":
                    $mytime = "America/Argentina/Tucuman";
                    break;
              
                case "Jujuy":
                    $mytime = "America/Argentina/Jujuy";
                    break;
                case "San Luis":
                    $mytime = "America/Argentina/San_Luis";
                    break;
                case "La Rioja":
                    $mytime = "America/Argentina/La_Rioja";
                    break;
                case "Mendoza":
                    $mytime = "America/Argentina/Mendoza";
                    break;
               
                case "San Luis":
                    $mytime = "America/Argentina/San_Luis";
                    break;
                
                case "Salta":
                    $mytime = "America/Argentina/Salta";
                    break;
                case "San Juan":
                    $mytime = "America/Argentina/San_Juan";
                    break;
                
                case "Rio Gallegos":
                    $mytime = "America/Argentina/Rio_Gallegos";
                    break;
               
                case "Catamarca":
                    $mytime = "America/Argentina/Catamarca";
                    break;
                case "Ushuaia":
                    $mytime = "America/Argentina/Ushuaia";
                    break;
                case "Tucuman":
                    $mytime = "America/Argentina/Tucuman";
                    break;
       
        case "Pago_Pago":
            $mytime = "Pacific/Pago_Pago";
            break;
        case "Vienna":
            $mytime = "Europe/Vienna";
            break;
        
                case "Sydney":
                    $mytime = "Australia/Sydney";
                    break;
            
                case "Darwin":
                    $mytime = "Australia/Darwin";
                    break;
                case "Brisbane":
                    $mytime = "Australia/Brisbane";
                    break;
                case "Adelaide":
                    $mytime = "Australia/Adelaide";
                    break;
                case "Hobart":
                    $mytime = "Australia/Hobart";
                    break;
                case "Melbourne":
                    $mytime = "Australia/Melbourne";
                    break;
                case "Perth":
                    $mytime = "Australia/Perth";
                    break;
      
        case "Aruba":
            $mytime = "America/Aruba";
            break;
        case "Mariehamn":
            $mytime = "Europe/Mariehamn";
            break;
        case "Baku":
            $mytime = "Asia/Baku";
            break;
        case "Sarajevo":
            $mytime = "Europe/Sarajevo";
            break;
        case "Barbados":
            $mytime = "America/Barbados";
            break;
        case "Dhaka":
            $mytime = "Asia/Dhaka";
            break;
        case "Brussels":
            $mytime = "Europe/Brussels";
            break;
        case "Ouagadougou":
            $mytime = "Africa/Ouagadougou";
            break;
        case "Sofia":
            $mytime = "Europe/Sofia";
            break;
        case "Bahrain":
            $mytime = "Asia/Bahrain";
            break;
        case "Bujumbura":
            $mytime = "Africa/Bujumbura";
            break;
        case "Porto Novo":
            $mytime = "Africa/Porto-Novo";
            break;
        case "St Barthelemy":
            $mytime = "America/St_Barthelemy";
            break;
        case "Bermuda":
            $mytime = "Atlantic/Bermuda";
            break;
        case "Brunei":
            $mytime = "Asia/Brunei";
            break;
        case "La Paz":
            $mytime = "America/La_Paz";
            break;
        case "Curacao":
            $mytime = "America/Curacao";
            break;
        

                case "Rio Branco":
                    $mytime = "America/Rio_Branco";
                    break;
                case "Maceio":
                    $mytime = "America/Maceio";
                    break;
                case "Sao Paulo":
                    $mytime = "America/Sao_Paulo";
                    break;
                case "Manaus":
                    $mytime = "America/Manaus";
                    break;
                case "Bahia":
                    $mytime = "America/Bahia";
                    break;
                case "Fortaleza":
                    $mytime = "America/Fortaleza";
                    break;
                case "Sao_Paulo":
                    $mytime = "America/Sao_Paulo";
                    break;
               
                case "Campo Grande":
                    $mytime = "America/Campo_Grande";
                    break;
                case "Belem":
                    $mytime = "America/Belem";
                    break;
                case "Cuiaba":
                    $mytime = "America/Cuiaba";
                    break;
               
                case "Belem":
                    $mytime = "America/Belem";
                    break;
                case "Recife":
                    $mytime = "America/Recife";
                    break;
               
                case "Porto Velho":
                    $mytime = "America/Porto_Velho";
                    break;
                case "Boa Vista":
                    $mytime = "America/Boa_Vista";
                    break;
                case "Sao Paulo":
                    $mytime = "America/Sao_Paulo";
                    break;
               
                case "Maceio":
                    $mytime = "America/Maceio";
                    break;
                
                case "Recife":
                    $mytime = "America/Recife";
                    break;
                case "Araguaina":
                    $mytime = "America/Araguaina";
                    break;
        
        case "Nassau":
            $mytime = "America/Nassau";
            break;
        case "Thimphu":
            $mytime = "Asia/Thimphu";
            break;
        case "Syowa":
            $mytime = "Antarctica/Syowa";
            break;
        case "Gaborone":
            $mytime = "Africa/Gaborone";
            break;
        case "Minsk":
            $mytime = "Europe/Minsk";
            break;
        case "Belize":
            $mytime = "America/Belize";
            break;
       
                case "Edmonton":
                    $mytime = "America/Edmonton";
                    break;
                case "Vancouver":
                    $mytime = "America/Vancouver";
                    break;
                case "Winnipeg":
                    $mytime = "America/Winnipeg";
                    break;
                case "Halifax":
                    $mytime = "America/Halifax";
                    break;
                case "St Johns":
                    $mytime = "America/St_Johns";
                    break;
                case "Halifax":
                    $mytime = "America/Halifax";
                    break;
                case "Yellowknife":
                    $mytime = "America/Yellowknife";
                    break;
                case "Rankin_Inlet":
                    $mytime = "America/Rankin_Inlet";
                    break;
                case "Toronto":
                    $mytime = "America/Toronto";
                    break;
                case "Halifax":
                    $mytime = "America/Halifax";
                    break;
                case "Montreal":
                    $mytime = "America/Montreal";
                    break;
                case "Regina":
                    $mytime = "America/Regina";
                    break;
                case "Whitehorse":
                    $mytime = "America/Whitehorse";
                    break;
       
        		case "Indian/Cocos":
            	$mytime = "Indian/Cocos";
            	break;
        	
                case "Kinshasa":
                    $mytime = "Africa/Kinshasa";
                    break;
                
                case "Lubumbashi":
                    $mytime = "Africa/Lubumbashi";
                    break;
               
              
               
      
        case "Bangui":
            $mytime = "Africa/Bangui";
            break;
        case "Brazzaville":
            $mytime = "Africa/Brazzaville";
            break;
        case "Zurich":
            $mytime = "Europe/Zurich";
            break;
        case "Abidjan":
            $mytime = "Africa/Abidjan";
            break;
        case "Rarotonga":
            $mytime = "Pacific/Rarotonga";
            break;
        case "Santiago":
            $mytime = "America/Santiago";
            break;
        case "Lagos":
            $mytime = "Africa/Lagos";
            break;
 
                case "Shanghai":
                    $mytime = "Asia/Shanghai";
                    break;
                
                case "Harbin":
                    $mytime = "Asia/Harbin";
                    break;
                case "Chongqing":
                    $mytime = "Asia/Chongqing";
                    break;
                case "07":
                    $mytime = "Asia/Shanghai";
                    break;
                case "Urumqi":
                    $mytime = "Asia/Urumqi";
                    break;
                
                
                
       
        case "Bogota":
            $mytime = "America/Bogota";
            break;
        case "Costa Rica":
            $mytime = "America/Costa_Rica";
            break;
        case "Havana":
            $mytime = "America/Havana";
            break;
        case "Cape Verde":
            $mytime = "Atlantic/Cape_Verde";
            break;
        case "Curacao":
            $mytime = "America/Curacao";
            break;
        case "Christmas":
            $mytime = "Indian/Christmas";
            break;
        case "Nicosia":
            $mytime = "Asia/Nicosia";
            break;
        case "Prague":
            $mytime = "Europe/Prague";
            break;
        case "Berlin":
            $mytime = "Europe/Berlin";
            break;
        case "Djibouti":
            $mytime = "Africa/Djibouti";
            break;
        case "Copenhagen":
            $mytime = "Europe/Copenhagen";
            break;
        case "Dominica":
            $mytime = "America/Dominica";
            break;
        case "Santo Domingo":
            $mytime = "America/Santo_Domingo";
            break;
        case "Algiers":
            $mytime = "Africa/Algiers";
            break;
     
                case "Galapagos":
                    $mytime = "Pacific/Galapagos";
                    break;
                case "Guayaquil":
                    $mytime = "America/Guayaquil";
                    break;
                
                 
        case "Tallinn":
            $mytime = "Europe/Tallinn";
            break;
        case "Cairo":
            $mytime = "Africa/Cairo";
            break;
        case "El_Aaiun":
            $mytime = "Africa/El_Aaiun";
            break;
        case "Asmara":
            $mytime = "Africa/Asmara";
            break;
      
                case "Madrid":
                    $mytime = "Europe/Madrid";
                    break;
                
                case "Ceuta":
                    $mytime = "Africa/Ceuta";
                    break;
             
                case "Canary":
                    $mytime = "Atlantic/Canary";
                    break;

                
      
        case "Addis Ababa":
            $mytime = "Africa/Addis_Ababa";
            break;
        case "Helsinki":
            $mytime = "Europe/Helsinki";
            break;
        case "Fiji":
            $mytime = "Pacific/Fiji";
            break;
        case "Stanley":
            $mytime = "Atlantic/Stanley";
            break;
        case "Pohnpei":
            $mytime = "Pacific/Pohnpei";
            break;
        case "Faroe":
            $mytime = "Atlantic/Faroe";
            break;
        case "Paris":
            $mytime = "Europe/Paris";
            break;
       
        case "Libreville":
            $mytime = "Africa/Libreville";
            break;
        case "London":
            $mytime = "Europe/London";
            break;
        case "Grenada":
            $mytime = "America/Grenada";
            break;
        case "Tbilisi":
            $mytime = "Asia/Tbilisi";
            break;
        case "Cayenne":
            $mytime = "America/Cayenne";
            break;
        case "Guernsey":
            $mytime = "Europe/Guernsey";
            break;
        case "Accra":
            $mytime = "Africa/Accra";
            break;
        case "Gibraltar":
            $mytime = "Europe/Gibraltar";
            break;
       
        case "Thule":
            $mytime = "America/Thule";
            break;
        case "Godthab":
            $mytime = "America/Godthab";
            break;
               
        case "Banjul":
            $mytime = "Africa/Banjul";
            break;
        case "Conakry":
            $mytime = "Africa/Conakry";
            break;
        case "Guadeloupe":
            $mytime = "America/Guadeloupe";
            break;
        case "Malabo":
            $mytime = "Africa/Malabo";
            break;
        case "Athens":
            $mytime = "Europe/Athens";
            break;
        case "South Georgia":
            $mytime = "Atlantic/South_Georgia";
            break;
        case "Guatemala":
            $mytime = "America/Guatemala";
            break;
        case "Guam":
            $mytime = "Pacific/Guam";
            break;
        case "Bissau":
            $mytime = "Africa/Bissau";
            break;
        case "Guyana":
            $mytime = "America/Guyana";
            break;
        case "Hong Kong":
            $mytime = "Asia/Hong_Kong";
            break;
        case "Tegucigalpa":
            $mytime = "America/Tegucigalpa";
            break;
        case "Zagreb":
            $mytime = "Europe/Zagreb";
            break;
        case "Port Au Prince":
            $mytime = "America/Port-au-Prince";
            break;
        case "Budapest":
            $mytime = "Europe/Budapest";
            break;
       
                case "Pontianak":
                    $mytime = "Asia/Pontianak";
                    break;
                case "Makassar":
                    $mytime = "Asia/Makassar";
                    break;
                case "Jakarta":
                    $mytime = "Asia/Jakarta";
                    break;
       
                case "Pontianak":
                    $mytime = "Asia/Pontianak";
                    break;
               
                
        case "Dublin":
            $mytime = "Europe/Dublin";
            break;
        case "Jerusalem":
            $mytime = "Asia/Jerusalem";
            break;
        case "Isle Of Man":
            $mytime = "Europe/Isle_of_Man";
            break;
        case "Kolkata":
            $mytime = "Asia/Kolkata";
            break;
        case "Chagos":
            $mytime = "Indian/Chagos";
            break;
        case "Baghdad":
            $mytime = "Asia/Baghdad";
            break;
        case "Tehran":
            $mytime = "Asia/Tehran";
            break;
        case "Reykjavik":
            $mytime = "Atlantic/Reykjavik";
            break;
        case "Rome":
            $mytime = "Europe/Rome";
            break;
        case "Jersey":
            $mytime = "Europe/Jersey";
            break;
        case "Jamaica":
            $mytime = "America/Jamaica";
            break;
        case "Amman":
            $mytime = "Asia/Amman";
            break;
        case "Tokyo":
            $mytime = "Asia/Tokyo";
            break;
        case "Nairobi":
            $mytime = "Africa/Nairobi";
            break;
        case "Bishkek":
            $mytime = "Asia/Bishkek";
            break;
        case "Phnom Penh":
            $mytime = "Asia/Phnom_Penh";
            break;
        case "Tarawa":
            $mytime = "Pacific/Tarawa";
            break;
        case "Comoro":
            $mytime = "Indian/Comoro";
            break;
        case "St Kitts":
            $mytime = "America/St_Kitts";
            break;
        case "Pyongyang":
            $mytime = "Asia/Pyongyang";
            break;
        case "Seoul":
            $mytime = "Asia/Seoul";
            break;
        case "Kuwait":
            $mytime = "Asia/Kuwait";
            break;
        case "Cayman":
            $mytime = "America/Cayman";
            break;
        
                case "Almaty":
                    $mytime = "Asia/Almaty";
                    break;
               
                case "Qyzylorda":
                    $mytime = "Asia/Qyzylorda";
                    break;
                case "Aqtobe":
                    $mytime = "Asia/Aqtobe";
                    break;
                case "Qyzylorda":
                    $mytime = "Asia/Qyzylorda";
                    break;
             
                case "Oral":
                    $mytime = "Asia/Oral";
                    break;
                
      
        case "Vientiane":
            $mytime = "Asia/Vientiane";
            break;
        case "Beiruts":
            $mytime = "Asia/Beirut";
            break;
        case "St Lucia":
            $mytime = "America/St_Lucia";
            break;
        case "Vaduz":
            $mytime = "Europe/Vaduz";
            break;
        case "Colombo":
            $mytime = "Asia/Colombo";
            break;
        case "Monrovia":
            $mytime = "Africa/Monrovia";
            break;
        case "Maseru":
            $mytime = "Africa/Maseru";
            break;
        case "Vilnius":
            $mytime = "Europe/Vilnius";
            break;
        case "Luxembourg":
            $mytime = "Europe/Luxembourg";
            break;
        case "Riga":
            $mytime = "Europe/Riga";
            break;
        case "Tripoli":
            $mytime = "Africa/Tripoli";
            break;
        case "Casablanca":
            $mytime = "Africa/Casablanca";
            break;
        case "Monaco":
            $mytime = "Europe/Monaco";
            break;
        case "Chisinau":
            $mytime = "Europe/Chisinau";
            break;
        case "Podgorica":
            $mytime = "Europe/Podgorica";
            break;
        case "Marigot":
            $mytime = "America/Marigot";
            break;
        


        case "Antananarivo":
            $mytime = "Indian/Antananarivo";
            break;
        case "Kwajalein":
            $mytime = "Pacific/Kwajalein";
            break;
        case "Skopje":
            $mytime = "Europe/Skopje";
            break;
        case "Bamako":
            $mytime = "Africa/Bamako";
            break;
        case "Rangoon":
            $mytime = "Asia/Rangoon";
            break;
        
                case "Choibalsan":
                    $mytime = "Asia/Choibalsan";
                    break;
                case "Ulaanbaatar":
                    $mytime = "Asia/Ulaanbaatar";
                    break;
                case "Choibalsan":
                    $mytime = "Asia/Choibalsan";
                    break;
                case "Hovd":
                    $mytime = "Asia/Hovd";
                    break;
           
       
        case "Macau":
            $mytime = "Asia/Macau";
            break;
        case "Saipan":
            $mytime = "Pacific/Saipan";
            break;
        case "Martinique":
            $mytime = "America/Martinique";
            break;
        case "Nouakchott":
            $mytime = "Africa/Nouakchott";
            break;
        case "Montserrat":
            $mytime = "America/Montserrat";
            break;
        case "Malta":
            $mytime = "Europe/Malta";
            break;
        case "Mauritius":
            $mytime = "Indian/Mauritius";
            break;
        case "Maldives":
            $mytime = "Indian/Maldives";
            break;
        case "Blantyre":
            $mytime = "Africa/Blantyre";
            break;
     
                case "Mexico":
                    $mytime = "America/Mexico_City";
                    break;
                case "Tijuana":
                    $mytime = "America/Tijuana";
                    break;
                case "Hermosillo":
                    $mytime = "America/Hermosillo";
                    break;
                case "Merida":
                    $mytime = "America/Merida";
                    break;
               
                case "Chihuahua":
                    $mytime = "America/Chihuahua";
                    break;
                case "Monterrey":
                    $mytime = "America/Monterrey";
                    break;
             
                case "Mazatlan":
                    $mytime = "America/Mazatlan";
                    break;
                
                case "Chihuahua":
                    $mytime = "America/Chihuahua";
                    break;
                
                case "Cancun":
                    $mytime = "America/Cancun";
                    break;
             
              
      
                case "Kuala Lumpur":
                    $mytime = "Asia/Kuala_Lumpur";
                    break;
                
                   
                case "Kuching":
                    $mytime = "Asia/Kuching";
                    break;
              
            
     
        case "Maputo":
            $mytime = "Africa/Maputo";
            break;
        case "Windhoek":
            $mytime = "Africa/Windhoek";
            break;
        case "Noumea":
            $mytime = "Pacific/Noumea";
            break;
        case "Niamey":
            $mytime = "Africa/Niamey";
            break;
        case "Norfolk":
            $mytime = "Pacific/Norfolk";
            break;
        case "Lagos":
            $mytime = "Africa/Lagos";
            break;
        case "Managua":
            $mytime = "America/Managua";
            break;
        case "Amsterdam":
            $mytime = "Europe/Amsterdam";
            break;
        case "Oslo":
            $mytime = "Europe/Oslo";
            break;
        case "Kathmandu":
            $mytime = "Asia/Kathmandu";
            break;
        case "Nauru":
            $mytime = "Pacific/Nauru";
            break;
        case "Niue":
            $mytime = "Pacific/Niue";
            break;
       
                case "Auckland":
                    $mytime = "Pacific/Auckland";
                    break;
             
                
                
                case "Chatham":
                    $mytime = "Pacific/Chatham";
                    break;
                
        
        case "Muscat":
            $mytime = "Asia/Muscat";
            break;
        case "Panama":
            $mytime = "America/Panama";
            break;
        case "Lima":
            $mytime = "America/Lima";
            break;
        case "Marquesas":
            $mytime = "Pacific/Marquesas";
            break;
        case "Port Moresby":
            $mytime = "Pacific/Port_Moresby";
            break;
        case "Manila":
            $mytime = "Asia/Manila";
            break;
        case "Karachi":
            $mytime = "Asia/Karachi";

            break;
        case "Warsaw":
            $mytime = "Europe/Warsaw";
            break;
        case "Miquelon":
            $mytime = "America/Miquelon";
            break;
        case "Pitcairn":
            $mytime = "Pacific/Pitcairn";
            break;
        case "Puerto Rico":
            $mytime = "America/Puerto_Rico";
            break;
        case "Gaza":
            $mytime = "Asia/Gaza";
            break;
      
                case "Lisbon":
                    $mytime = "Europe/Lisbon";
                    break;
                
                
                case "Madeira":
                    $mytime = "Atlantic/Madeira";
                    break;
                
               
                case "Azores":
                    $mytime = "Atlantic/Azores";
                    break;
       
        case "Palau":
            $mytime = "Pacific/Palau";
            break;
        case "Asuncion":
            $mytime = "America/Asuncion";
            break;
        case "Qatar":
            $mytime = "Asia/Qatar";
            break;
        case "Reunion":
            $mytime = "Indian/Reunion";
            break;
        case "Bucharest":
            $mytime = "Europe/Bucharest";
            break;
        case "Belgrade":
            $mytime = "Europe/Belgrade";
            break;
      
                case "Volgograd":
                    $mytime = "Europe/Volgograd";
                    break;
                case "Irkutsk":
                    $mytime = "Asia/Irkutsk";
                    break;
                case "Novokuznetsk":
                    $mytime = "Asia/Novokuznetsk";
                    break;
                
                case "Vladivostok":
                    $mytime = "Asia/Vladivostok";
                    break;
                case "Moscow":
                    $mytime = "Europe/Moscow";
                    break;
                case "Volgograd":
                    $mytime = "Europe/Volgograd";
                    break;
                case "Samara":
                    $mytime = "Europe/Samara";
                    break;
               
                case "Irkutsk":
                    $mytime = "Asia/Irkutsk";
                    break;
                
                case "Yekaterinburg":
                    $mytime = "Asia/Yekaterinburg";
                    break;
              
                case "Anadyr":
                    $mytime = "Asia/Anadyr";
                    break;
                case "Samara":
                    $mytime = "Europe/Samara";
                    break;
               
                case "Krasnoyarsk":
                    $mytime = "Asia/Krasnoyarsk";
                    break;
                case "Irkutsk":
                    $mytime = "Asia/Irkutsk";
                    break;
               
                case "Kaliningrad":
                    $mytime = "Europe/Kaliningrad";
                    break;
                
                case "Kamchatka":
                    $mytime = "Asia/Kamchatka";
                    break;
             
                
                case "Vladivostok":
                    $mytime = "Asia/Vladivostok";
                    break;
                case "Krasnoyarsk":
                    $mytime = "Asia/Krasnoyarsk";
                    break;
                case "Omsk":
                    $mytime = "Asia/Omsk";
                    break;
                case "Yekaterinburg":
                    $mytime = "Asia/Yekaterinburg";
                    break;
                
               
                case "Magadan":
                    $mytime = "Asia/Magadan";
                    break;
                case "Samara":
                    $mytime = "Europe/Samara";
                    break;
            
                  
                case "Yekaterinburg":
                    $mytime = "Asia/Yekaterinburg";
                    break;
                           
                
                case "Kaliningrad":
                    $mytime = "Europe/Kaliningrad";
                    break;
                
                case "Yakutsk":
                    $mytime = "Asia/Yakutsk";
                    break;
                case "Sakhalin":
                    $mytime = "Asia/Sakhalin";
                    break;
                case "Krasnoyarsk":
                    $mytime = "Asia/Krasnoyarsk";
                    break;
                
        case "Kigali":
            $mytime = "Africa/Kigali";
            break;
        case "Riyadh":
            $mytime = "Asia/Riyadh";
            break;
        case "Guadalcanal":
            $mytime = "Pacific/Guadalcanal";
            break;
        case "Mahe":
            $mytime = "Indian/Mahe";
            break;
        case "Khartoum":
            $mytime = "Africa/Khartoum";
            break;
        case "Stockholm":
            $mytime = "Europe/Stockholm";
            break;
        case "Singapore":
            $mytime = "Asia/Singapore";
            break;
        case "St Helena":
            $mytime = "Atlantic/St_Helena";
            break;
        case "Ljubljana":
            $mytime = "Europe/Ljubljana";
            break;
        case "Longyearbyen":
            $mytime = "Arctic/Longyearbyen";
            break;
        case "Bratislava":
            $mytime = "Europe/Bratislava";
            break;
        case "Freetown":
            $mytime = "Africa/Freetown";
            break;
        case "San Marino":
            $mytime = "Europe/San_Marino";
            break;
        case "Dakar":
            $mytime = "Africa/Dakar";
            break;
        case "Mogadishu":
            $mytime = "Africa/Mogadishu";
            break;
        case "Paramaribo":
            $mytime = "America/Paramaribo";
            break;
        case "juda":
            $mytime = "Africa/Juba";
            break;
        case "Sao Tome":
            $mytime = "Africa/Sao_Tome";
            break;
        case "El Salvador":
            $mytime = "America/El_Salvador";
            break;
        case "Curacao":
            $mytime = "America/Curacao";
            break;
        case "Damascus":
            $mytime = "Asia/Damascus";
            break;
        case "Mbabane":
            $mytime = "Africa/Mbabane";
            break;
        case "Grand Turk":
            $mytime = "America/Grand_Turk";
            break;
        case "Ndjamena":
            $mytime = "Africa/Ndjamena";
            break;
        case "Kerguelen":
            $mytime = "Indian/Kerguelen";
            break;
        case "Lome":
            $mytime = "Africa/Lome";
            break;
        case "Bangkok":
            $mytime = "Asia/Bangkok";
            break;
        case "Dushanbe":
            $mytime = "Asia/Dushanbe";
            break;
        case "Fakaofo":
            $mytime = "Pacific/Fakaofo";
            break;
        case "Dili":
            $mytime = "Asia/Dili";
            break;
        case "Ashgabat":
            $mytime = "Asia/Ashgabat";
            break;
        case "Tunis":
            $mytime = "Africa/Tunis";
            break;
        case "Tongatapu":
            $mytime = "Pacific/Tongatapu";
            break;
        case "Istanbul":
            $mytime = "Asia/Istanbul";
            break;
        case "Spain":
            $mytime = "America/Port_of_Spain";
            break;
        case "Funafuti":
            $mytime = "Pacific/Funafuti";
            break;
        case "Taipei":
            $mytime = "Asia/Taipei";
            break;
        case "Dar Es Salaam":
            $mytime = "Africa/Dar_es_Salaam";
            break;
        
                case "Kiev":
                    $mytime = "Europe/Kiev";
                    break;
               
                case "Uzhgorod":
                    $mytime = "Europe/Uzhgorod";
                    break;
                case "Zaporozhye":
                    $mytime = "Europe/Zaporozhye";
                    break;
                
                case "Simferopol":
                    $mytime = "Europe/Simferopol";
                    break;
                
        case "Kampala":
            $mytime = "Africa/Kampala";
            break;
        case "Wake":
            $mytime = "Pacific/Wake";
            break;
        
                case "Anchorage":
                    $mytime = "America/Anchorage";
                    break;
                case "Chicago":
                    $mytime = "America/Chicago";
                    break;
               
                case "Phoenix":
                    $mytime = "America/Phoenix";
                    break;
                case "Los Angeles":
                    $mytime = "America/Los_Angeles";
                    break;
                case "Denver":
                    $mytime = "America/Denver";
                    break;
                case "New York":
                    $mytime = "America/New_York";
                    break;
                case "Newyork":
                    $mytime = "America/New_York";
                    break;
                case "NewYork":
                    $mytime = "America/New_York";
                    break;
                
                case "Honolulu":
                    $mytime = "Pacific/Honolulu";
                    break;
                
                case "Indianapolis":
                    $mytime = "America/Indiana/Indianapolis";
                    break;
                
        		case "Montevideo":
            	$mytime = "America/Montevideo";
            	break;
        
                case "Tashkent":
                    $mytime = "Asia/Tashkent";
                    break;
                case "Samarkand":
                    $mytime = "Asia/Samarkand";
                    break;
                
        case "Vatican":
            $mytime = "Europe/Vatican";
            break;
        case "St Vincent":
            $mytime = "America/St_Vincent";
            break;
        case "Caracas":
            $mytime = "America/Caracas";
            break;
        case "Tortola":
            $mytime = "America/Tortola";
            break;
        case "St_Thomas":
            $mytime = "America/St_Thomas";
            break;
        case "Phnom_Penh":
            $mytime = "Asia/Phnom_Penh";
            break;
        case "Efate":
            $mytime = "Pacific/Efate";
            break;
        case "Wallis":
            $mytime = "Pacific/Wallis";
            break;
        case "Pago Pago":
            $mytime = "Pacific/Pago_Pago";
            break;
        case "Aden":
            $mytime = "Asia/Aden";
            break;
        case "Mayotte":
            $mytime = "Indian/Mayotte";
            break;
        case "Belgrade":
            $mytime = "Europe/Belgrade";
            break;
        case "Johannesburg":
            $mytime = "Africa/Johannesburg";
            break;
        case "Lusaka":
            $mytime = "Africa/Lusaka";
            break;
        case "Harare":
            $mytime = "Africa/Harare";
            break;
		
		default:
		echo "Invalid: Not Found"; 
		}

if($country == ucwords($_POST['country_txt']) && (!empty($mytime)))
{
	
	$sql = "INSERT INTO data_tb (Timezone, Detail) VALUES ('$country','$mytime')";
	
	if($conn -> query ($sql) === true && $country == ucwords($_POST['country_txt']))
	{
		date_default_timezone_set($mytime);
		echo "$mytime<br>";
		echo date("h:ia");
		echo "<br>Added";


	}
}

else
{
	echo " : Try Again Please";

}
      	
}


if(isset($_POST['fav_btn']))
 {
 	
$sql = "SELECT Timezone, Detail FROM data_tb";
$result = $conn->query($sql);


?>

<table id="favtable" border="2" align="center" style="margin-top:40px; border-radius: 9px; width: 55%; font-size: 20px; text-align: left;">
	<tr>
		<th>Country/City</th>
		<th>Timezone</th>
		<th>Date</th>
		<th>Time</th>
	</tr>

<?php




if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {

/*

echo "Timezone: ".$row["Timezone"]."<br>"."Region: ".$row["Detail"]."<br>"."Date: ";  
date_default_timezone_set($row["Detail"]);
echo date("d-M-Y");
echo "<br>";
echo "Time: ";
echo date("h:ia");
echo "<br><br><br>";

*/

?>


	<tr>
		<td><?php echo $row['Timezone']; ?></td>
		<td><?php echo $row['Detail']; ?></td>
		<?php date_default_timezone_set($row["Detail"]); ?>
		<td><?php echo date("D-M-Y"); ?></td>
		<td><?php echo date("h:iA"); ?></td>
	</tr>
	<?php

}



} 
else 
{
    echo "0 results";
    ?>
    <tr>
    	<td style="text-align: center;" colspan="4">Please Add Your Timezone</td>
    </tr>
    

</table>

<?php
}}

if(isset($_POST['reset_btn']))
{
$sql = "DELETE FROM data_tb";

if ($conn->query($sql) === TRUE) {
    echo "Reset successfully";
} else {
    echo "Error: " . $conn->error;
}

}


if(isset($_POST['current_btn']))
{


$user_ip = getenv('REMOTE_ADDR');
$geo = unserialize (file_get_contents("http://www.geoplugin.net/php.gp?ip==$user_ip"));
$mycity = $geo["geoplugin_city"];
$myregion = $geo["geoplugin_regionName"];
$mycountry = $geo["geoplugin_countryName"];
$mycountrycode = $geo["geoplugin_countryCode"];
$mycurrency = $geo["geoplugin_currencyCode"];
$myexchange = $geo["geoplugin_currencyConverter"];


?>

<table  border="2" align="center" style="margin-top:40px; border-radius: 9px; width: 70%; font-size: 20px; text-align: left;">
	<thead><h2 style="text-align: center;">Your Current Location:</h2></thead>
	<tr>
		<th>Location</th>
		<th>Region</th>
		<th>Country</th>
		<th>Country Code</th>
		<th>Currency Code</th>
		<th>Currency Rate($)</th>
	</tr>

	<tr>
		<td><?php echo $mycity; ?></td>
		<td><?php echo $myregion; ?></td>
	
		<td><?php echo $mycountry; ?></td>
		<td><?php echo $mycountrycode; ?></td>

		<td><?php echo $mycurrency; ?></td>
		<td><?php echo $myexchange; ?></td>
	</tr>
	<?php

}




 ?>

</body>
</html>