<?php
        
        
        // Report all errors
        // Dit is nu handig bij het testen
        // In een productie omgeving doe je dit niet of anders
        error_reporting(E_ALL);


        
        // my API reageert op GET en POST requests
        print "<h3>hello from myAPI !!</h3>"; // say hello to client
     
        
        $myTime = time(); // get the server time

		if (!empty($_GET['data'])){  
            $dataFromGet= $_GET['data'];
            print "<h4>GET request ontvangen</h4>";
            print "de data uit het GET request is: " . $dataFromGet;
            switch($dataFromGet){
                case "server":
                        print "<pre>my server variables are:  " ;
                        print_r($_SERVER);  // show server data
                        print "</pre>"; 
                    break;
                case "tijd":
                        print "<br>server tijd: " . date("h:i:s",$myTime);
                    break;

                 // hier moet jij zelf code schrijven
                case "":
                    print "<br> boi typ wat dan";
                    break;

                case "n":
                    print " <br> <iframe width='560' height='315' src='https://www.youtube.com/embed/ngr1ytSABQ0?controls=0?autoplay=1' frameborder='0' allow='accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture' allowfullscreen></iframe>";
                    break;
                case "easter egg":
                    print " <br> chupapi muñaño";
                    break;
                case "cookie":
                    print "<br><br>INFINITE COOKIE GLITCH 2021!!!!<br> <a href=https://orteil.dashnet.org/cookieclicker/>CLICK HERE FOR COOKIES</a>";
                    break;
                  // einde eigen code  
                default:
                    print "<h3>ERROR: geen bestaande command &#128540;</h3>";
            }
        }     
?>
