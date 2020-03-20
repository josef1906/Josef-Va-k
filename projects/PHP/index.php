<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta http-equiv="Content-type" content="text/html; charset=utf-8"/>
        <meta http-equiv="Content-language" content="cs"/>
        <title>Programování</title>
        <meta charset="UTF-8">
        <link href="Screen/Screen.css" rel="stylesheet" type="text/css"/>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <!--
        <meta name="author" content="Richard Urbanek"/>
        <meta name="publisher" content="Richard Urbanek"/>
        <meta name="copyright" content="Richard Urbanek"/>
        <meta name="description" content="0 html"/>
        <meta name="keywords" content="Html, css, js"/>
        <link rel="shortcut icon" href="icon.ico"/>
        -->
        <link rel='stylesheet' type='text/css' href='css/Screen.css'>


    </head>
    <body>

        <h1>Song Lyrics</h1>
        <p>Fuck this shit you can find me in the moshpit</p>
        <i>I´ve been falling apart in pouring rain</i>
        <br>
        <span style="color:blue">Its like there is cancer in my lungs</span>

        <div id="pismo"> Lorem dolor ipsum</div>
        <div>Lorem dolor ipsum evok bla bla bla</div>
        <div>Lorem dolor hahahahah</div>
        <div class="text1"> random text z nemecka</div>
        <h2>Vtip</h2>
        <div>Sli ctyri a prostredni upadl hahah vtípek</div>

        <h3>Nadpis</h3>

        <div class="table">
            <div>
                <div>
                    <a href="https//www.seznam.cz">Seznam odkaz</a>
                    <a href="images/Messiah.jpg">Foto</a>
                    <br>
                    <img src="images/Messiah.jpg" alt="Messiah" title="Urbanek"width="300"/>
                    <a href="images/Messiah.jpg" >
                        <img src="images/Messiah.jpg" alt="Urbanek" title="messiah" width="200">  

                    </a>    

                    <br> 
                    <span class="span1">span1</span><span>span2</span>
                    <br>
                    Dasenka je hezky pes <div>Ragnar FTW</div> pod to hrotit<div>Bjorn ironside PogChamp</div>
                </div>
            </div>

            <div class="homepage" >
                <div>Negan and mothafuckin saviors</div>
                <div>lalala</div>

            </div><br>

            <table class='tab'border='#'width='300'>
                <thead>
                    <tr>
                        <td>Den</td><td>v praci</td><td>nema smenu</td><td>dovolena</td>
                    </tr>    
                </thead>
                <tbody>
                    <tr>
                        <td>pondeli</td>
                        <td>ano</td>
                        <td>ne</td>
                        <td>ne</td>
                    </tr>
                <td>utery</td>
                <td>ano</td>
                <td>ne</td>
                <td>ne</td>
                <tr>
                    <td>streda</td>  
                    <td>ano</td>  
                    <td>ne</td>
                    <td>ne</td>
                </tr>    
                <tr>
                    <td>ctvrtek</td>  
                    <td>ne</td>  
                    <td>ano</td>
                    <td>ne</td>
                </tr>
                <tr>
                    <td>patek</td>  
                    <td>ne</td>  
                    <td>ne</td>
                    <td>ano</td>
                </tr>  


                </tbody>
            </table> 

            <?PHP
            $test1 = 5;
            echo $test1 . "<br>";
            $test2 = 3;
            echo $test2 . "<br>";

            //Aritmeticke operatory
            var_dump($test1 + $test2);
            var_dump($test1 - $test2);
            var_dump($test1 / $test2);
            var_dump($test1 * $test2);

            //Prirovnavaci operatory
            var_dump($test1++);
            var_dump($test1--);
            var_dump($test1 += $test2);
            var_dump($test1 -= $test2);
            var_dump($test1 *= $test2);
            var_dump($test1 /= $test2);
            var_dump($test1 * $test2);

            //Porovnavaci operatory
            var_dump($test1 == $test2);
            var_dump($test1 != $test2);
            var_dump($test1 > $test2);
            var_dump($test1 < $test2);

            //Logicke operatory
            var_dump($test1 || $test2);
            var_dump($test1 && $test2);
            var_dump(!$test1);

            $a = 4;
            $b = 7;

            if ($a > $b) {
                echo "Pravda";
            } elseif ($b == $a) {
                echo "Lež";
            } else {

                if (!$b) {
                    echo "Lež";
                } else {
                    echo "platí";
                }
            }


            echo "<br>";
            echo "<div class=\"neco\">sem vlozte penize</div>";

            echo "<br>";
            echo "<br>";
            echo "<br>";


            $ovoce = array("Banan", "Ananas", "Pomeranc");

            var_dump($ovoce);



            $pacient = array();


            $pacient[1]["jmeno"] = "Jan";
            $pacient[1]["prijmeni"] = "Novak";
            $pacient[1]["telefon"] = "674835490";
            $pacient[1]["email"] = "jan.novak@gmail.com";
            $pacient[1]["mesta"] = "Praha";

            $pacient[2]["jmeno"] = "Pavel";
            $pacient[2]["prijmeni"] = "Nezval";
            $pacient[2]["telefon"] = "987654321";
            $pacient[2]["email"] = "Pavlik232@seznam.com";
            $pacient[2]["mesta"] = "Praha";

            $pacient[3]["jmeno"] = "Karel";
            $pacient[3]["prijmeni"] = "Rachunek";
            $pacient[3]["telefon"] = "654789426";
            $pacient[3]["email"] = "Rachunek@email.cz";
            $pacient[3]["mesta"] = "Praha";

            $pacient[4]["jmeno"] = "Petr";
            $pacient[4]["prijmeni"] = "Kral";
            $pacient[4]["telefon"] = "650485234";
            $pacient[4]["email"] = "petr.kral@gmail.com";
            $pacient[4]["mesta"] = "Celakovice";


            //var_dump($pacient);
            echo "<table border=\"1\">";
            foreach ($pacient as $keys => $values) {





                if ($keys == 1) {


                    $valuesHeader = $values;
                    echo "<tr>";
                    foreach ($valuesHeader as $keyh => $valueh) {
                        echo "<td>" . $keyh . "<td>";
                    }
                    echo "</tr>";


                    for ($index = 0; $index < count($values); $index++) {
                        echo "<td></td>";
                    }
                    echo "</tr>";
                }

                echo "<tr>";

                foreach ($values as $key => $value) {

                    echo "<td>" . $value . "<td>";
                }
                echo "</tr>";
            }
            echo"</table>";


            echo "<br>";
            echo "<br>";
            echo "<br>";

            $s = 32;
            
            //Vypise radky
            for ($i = 1; $s < 200; $s++) {
                echo"<td>" . $i . $s . "</td>";
            }

            //Vypise sloupce
            for ($i = 1; $s < 40; $s++) {
                echo"<td>" . $i . $s . "</td>";
            }

##################################2017-18#######################################



            /** cyklus   
             */
            echo "<br>";
            echo "<br>";
            echo "<br>";

            for ($i = 1; $i < 12; $i++) {
                echo "<a href=\"www.seznam.cz\">odkaz na seznam" . $i . "</a><br>";
            }


            $users = array(1 => "Palecek", 2 => "Konopka", 3 => "Jurka", 4 => "Zeman");

            echo "<table border=1>";

            foreach ($users as $key => $value) {
                echo "<tr><td>Jmeno studenta " . $value . "</td><td> Cislo studenta " . $key . "</td></tr>";
            }


            echo "</table>";

            /**
             * Pole
             */
            $students = FALSE;
            $students1 = "Palecek, Hajny, Tomicek, Zeman";

            var_dump($students);
            var_dump(explode(",", $students));
            /**
             * Funkce vlastní
             */
            echo "je to Paleček??";
            var_dump(isPalecek("Palecek"));

            function isPalecek($name) {



                //$name = strtolower($name);
                //$name = trim($name); 
                //$name = ucfirst($name);
                //if ($name == "Palecek")
                //    return TRUE

                return FALSE;
            }

            $name = "Pomeranc";
            $names = array("Okurka", "Kvetak");

            echo checkname($name, $names);

            var_dump(checkname($name, $names));

            function checkname($name, array $names) {
                foreach ($names as $key => $value) {

                    if ($value == $names)
                        return TRUE;
                }
                return FALSE;
            }

            echo "<br><br><br><br>";

            $message = "Ahoj, včera jsem vyhodil jsem toho chuje který "
                    . "to jsou hrozný kecy "
                    . "trénuju muay thai druhým rokem "
                    . "je to bojový sport docela dobrý "
                    . "to je ale hlupák proč to dělá";


            $word = array("chuje", "kecy", "hlupák");

            echo isValid($message, $word);

            function isValid($message, $word) {

                foreach ($word as $key => $value) {

                    if (strpos($message, $value) > 0) {
                        return "Použil/a jste nevhodné slovo" . $value . "";
                    }
                }
                return true;
            }

            var_dump(abs(10));
            var_dump(round(12.675));
            var_dump(rand());
            var_dump(max(12, 234, 35, 48, 4));
            var_dump(min(12, 4, 57, 48, 98));

            function getnumber($number, $decimals = 0, $dec_point = '.', $sep = ',') {
                return number_format($number, $decimals, $dec_point, $sep);
            }

            echo getnumber(4893473, 2, ',', ' ');

            $string = "nejaky text";
            $slova = "neverim vlastnim ocim";
            $pole = array("poleA", "poleB", "poleC");
            $Velka = "VELKA PISMENA";
            $mala = "mala pismena";

            echo "<br>";
            echo "<br>";


            $cena = 210;
            $koeficient = 0.123;
            $zaokrouhleni = 3;
            
            echo dph($cena);

            function dph($cena, $koeficient = 0.173) {
                $zdaneni = $koeficient;

                return round($cena * $zdaneni);
                
            }
            
            class penize {
                private $cena;
                
            public function construct() {
                $this->cena = $cena; 
            }
                
            public function vypocetDPH($koeficient = 1.21, $zaokrouhleni = 2) {   
                return round ($this->cena * $koeficient, $zaokrouhleni);
            }    
               
            }
            
            
            /**
             * @type  class
             * vytvoří třídu
             */
            
           class uzivatel {
             public $jmeno;
             public $prijmeni;
             public $pohlavi;
             public $heslo;
             public $email;
             public $telefon;
             public $mesto;
             public $adresa;
             public $PSC;
             
             
             public function __construct ($uzivatel) {
                foreach ($array as $key => $value) {
                        
                
                         
                }
            }
                
             
                
           }
            
           
            include'Index2.php';
                  
                     
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            ?>




    </body>
</html
