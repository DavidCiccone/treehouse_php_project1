// PHP - Random Quote Generator

// Create the Multidimensional array of quote elements and name it quotes



// Each inner array element should be an associative array



// Create the getRandomQuuote function and name it getRandomQuote



// Create the printQuote funtion and name it printQuotewe

//Quote, Source, Citation, Year
<?php
$quotes = array(
    array(
        "quote" => "Every great developer you know got there by solving problems they were unqualified to solve until they actually did it.","source" => "Patrick McKenzie",
        "citation" => "Twitter",
        "year" => "2016"
    ),
    array(
        "quote" => "Die with memories, not dreams.",
        "source" => "",
        "citation" => "codeofliving.com",
        "year" => ""
    ),
    array(
        "quote" => "Everything you can imagine is real.",
        "source" => "Pablo Picasso",
        "citation" => "codeofliving.com",
        "year" => ""
    ),
    array(
        "quote" => "I've failed over and over and over again in my life and that is why I succeed.",
        "source" => "Michael Jordan",
        "citation" => "Nike TV commercial",
        "year" => "1997"
    ),
    array(
        "quote" => "Small steps in the right direction can turn out to be the biggest step of your life.",
        "source" => "Unknown",
        "citation" => "",
        "year" => ""
    )
  );
//var_dump($quotes[1]['quote']);

    function getRandomQuote($array){
       
        echo($array[rand(0,4)]['quote']);
    }
    getRandomQuote($quotes);
?>
  