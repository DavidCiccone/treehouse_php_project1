<?php
//refreshes the page every 20 seconds
header("Refresh:20");

//array of quote information
    $quotes = array(
        array(
            "quote" => "Every great developer you know got there by solving problems they were unqualified to solve until they actually did it.","source" => "Patrick McKenzie",
            "citation" => "Twitter",
            "year" => "2016",
            "catagory" => array("tag" => "random")
        ),
        array(
            "quote" => "Die with memories, not dreams.",
            "source" => "Unknown",
            "citation" => "codeofliving.com",
            "year" => "",
            "catagory" => array("tag" => "random")
        ),
        array(
            "quote" => "Everything you can imagine is real.",
            "source" => "Pablo Picasso",
            "citation" => "codeofliving.com",
            "year" => "",
            "catagory" => array("tag" => "random")
        ),
        array(
            "quote" => "I've failed over and over and over again in my life and that is why I succeed.",
            "source" => "Michael Jordan",
            "citation" => "Nike TV commercial",
            "year" => "1997",
            "catagory" => array("tag" => "inspirational")
        ),
        array(
            "quote" => "Small steps in the right direction can turn out to be the biggest step of your life.",
            "source" => "Unknown",
            "citation" => "",
            "year" => "",
            "catagory" => array("tag" => "inspirational")
        )
    );

    //function that chooses a random quote from the above array
    function getRandomQuote($array){    
        return $array[rand(0,4)];
    }
    
    //function that prints the quote
    function printQuote($array){
        
        $singleQuote = getRandomQuote($array);
         
        //builds the string to apply to the page
        $quoteString = '<p class="quote">'. $singleQuote["quote"] .'</p><p class="source">'. $singleQuote["source"];
        
        if($singleQuote["citation"] && $singleQuote["year"]){
           $quoteString .= '<span class="citation">' . $singleQuote["citation"] . '</span><span class="year">' . $singleQuote["year"] . '</span></p>';
        } else if($singleQuote["citation"]){
            $quoteString .= '<span class="citation">' . $singleQuote["citation"] . '</span></p>';
        }else if($singleQuote["year"]){
            $quoteString .= '<span class="year">' . $singleQuote["year"] . '</span></p>';
        }else{
            $quoteString .= '</p>';
        };
        //prints the string to page      
        print $quoteString;            
    };
    printQuote($quotes);
?>