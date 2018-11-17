<?php
$planet = "Earth";

echo "The only place we have as our home in the entire universe is mother $planet.
        It's our duty to take care of our mother $planet.
        We should feel lucky because without $planet we have nowhere else to go.";


$star = "Sun";

echo <<<_END
The closest start to mother $planet is our $star. The $star is the source of life on $planet and without it nothing is possible.

<h1>
The $star is the fountain of life and gives without being tired. It's all
 giving and shines like glory.
</h1>
Tell me....</br>

YES? <h2>have you ever seen something as beautiful as this?</h2> Yet we cannot even look directly at the $star for it commands us to pay respect to it.</br> </br>

Beautiful. </br>Beautiful. </br></br></br></br></br>Beautiful.
<h3>The planets in our solar system are : </h3>
<ul>
    <li>Mercury</li>
    <li>Venus</li>
    <li>Earth</li>
    <li>Mars</li>
    <li>Jupiter</li>
    <li>Saturn</li>
    <li>Neptune</li>
    <li>Uranus</li>
    <li>Pluto</li>
</ul>
_END;



$author = "Scott Adams";
$out = <<<_END

Normal people believe that if ain't broke don't fix it.
Engineers believe that if ain't broke it doesn't have enough features yet.

- $author.
_END;

echo $out;

?>
