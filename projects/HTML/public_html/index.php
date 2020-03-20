<!DOCTYPE html>
<html lang="cs">
    <head>
      <title> ZT2-NEW project </title> 
      <link rel="stylesheet" type="text/css" href="css/screen.css">
    </head>
    <body>
        <h1>MMA</h1>
    <p1>Mixed martial arts (MMA) is a full-contact combat sport that allows striking and grappling, both standing and on the ground, using techniques from various combat sports and martial arts. The first documented use of the term mixed martial arts was in a review of UFC 1 by television critic Howard Rosenberg in 1993.The term gained popularity when newfullcontact.com, then one of the largest websites covering the sport, hosted and republished the article.The question of who actually coined the term is subject to debate.</p1>
    <br>
    <br>
    <p2>down just click on official mma side:</p2>
    <br>
    <a href="https://www.mmafighting.com/"> official mma side </a>
    <br>
    <br>
    <img border="3" src="mma.jpg" alt="mma" style="float:right;" width="300" height="300">
    <br>
    <p3> mma logo:</p3>
    <br>
    <a href="mma.jpg"> mma logo </a>
    <br>
    <br>
    <p4> some another physical sports: </p4>
    <br>
    <ul>
        <li>box</li>
         <li>kickbox</li>
          <li>thaybox</li>
           <li>kungfu</li>
            <li>karate</li>
    </ul>
    <br>
    <table border="5">
        <tr>
                <td>Mixed martial arts</td>
                <td>Smisena bojova umeni</td>
                <td>Mischkampfkunste</td>
        </tr>
        <tr>
                <td>Blandet kampsport</td>
                <td>Zmiesane bojove umenia</td>
                <td>Mixta militaris artes<td>
        </tr>
</table>
<br>
<br>
    <form action="stranka.html">
    Opinion: 
    <input type=text size=16 name="nazor">
    <input type=submit value=send>
    <br>
    <br>
 <textarea rows="4" cols="50">
Jottings.
</textarea>  
    <br>
<br>
    <label><input type="radio" name="male"> male</label>
<label><input type="radio" name="female"> female</label>
<br>
<br>
<button type="button">
    Click me!!
    <br>
    <br>
    <input type ="checkbox"
           name="vehicle1"
           vaue="bike"> i have a bike
    <br>
    <input type ="checkbox"
           name="vehicle2"
           value="car"> I have a car
    <br>
    <input type ="checkbox"
           name="vehicle3"
           value="Bout" checked>have a boat
    <br>
  
</form>
<br>
<br>
<a href="/home/uzivatel/projects/HTML/public_html/lll.url">news</a> 

    </body>
</html>

    <?PHP

echo "Ahoj";

print_r("Ahoj");

var_dump("Ahoj");

echo "\$fdsfsdf";

echo "<a href=\"index.php\">Homepage</a>";

$a = 3;
$b = 3;
$c = '3';

var_dump($a+$b);
var_dump($a/$c);
var_dump($a*$b);
var_dump($a-$b);
var_dump($a++);
var_dump($a--);
var_dump($a+=$b);
var_dump($a-=$b);
var_dump($a*=$b);
var_dump($a/=$b);
var_dump($a==$b);
var_dump($a!=$b);
var_dump($a<$b);
var_dump($a>$b);
var_dump($a||$b);
var_dump($a&&$b);
var_dump(!$a);
echo "<br>";

$zelenina = array ('rajce', 'kapusta', 'mrkev', 'kukurice', 'hrasek', 'paprika', 'salat', 'brokolice', 'zeli', 'brambory');

$auto['osobni']['skoda'][] = 'octavia';
$auto['osobni']['skoda'][] = 'yeti';
$auto['osobni']['skoda'][] = 'kaktus';
$auto['osobni']['skoda'][] = 'fabia';
$auto['osobni']['skoda'][] = 'superb';
$auto['osobni']['bmw'][] = 'x1';
$auto['osobni']['bmw'][] = 'x2';
$auto['osobni']['bmw'][] = 'x3';
$auto['osobni']['bmw'][] = 'x4';
$auto['osobni']['bmw'][] = 'x5';
$auto['osobni']['bmw'][] = 'x6';
$auto['osobni']['audy'][] = 'rx8';
$auto['osobni']['fiat'][] = 'punto';
$auto['osobni']['renaut'][] = 'kaskaj';
$auto['osobni']['ferrari'][] = 'enzo';
$auto['osobni']['fiat'][] = 'multipla';
$auto['osobni']['buggaty'][] = 'veyron';
$auto['osobni']['ferrari'][] = '348';
$auto['osobni']['ferrari'][] = '360';
$auto['osobni']['ferrari'][] = '458 italia';
var_dump($zelenina);
var_dump($auto);

echo "<br>";

echo "<table border = '1'>";

foreach ($zelenina as  $key => $value)  {
    
    echo  $value."<br>";
}

  {  echo  "<tr>"
           "<td>" ".$key." "</td>"
           "<td>" ".$value." "</td>"
           "</tr>";
}

        echo "</table>";


  

 


  ?>

