<?php
/**
 * Include once all required php files in here!
 */
include_once "functions.php";
include_once "arrays.php";

// // printing food array
// echo    "<pre>";
// print_r($food);
// echo    "</pre>";

// // printing name array
// echo    "<pre>";
// print_r($name);
// echo    "</pre>";

// // printing Location array
// echo    "<pre>";
// print_r($location);
// echo    "</pre>";

// // printing Customers array
// echo    "<pre>";
// print_r($customers);
// echo    "</pre>";

/**
 * for($i=0; $i<10; $i++){
 *   echo "I am for $i<hr>";    
 *}
 */
// Testing headline function
headline('Headline Function', 'h1', 'center', 'uppercase', '#f0f');

// Testing banglaHeadline function
banglaHeadline('This is a Bangla Headline Function!', 'nil');

//Testing GPA function
// getGpa(99);

//Testing Grade function
// getGrade(79);


foreach ($customers as $people){
    echo "Name: " . "<b style='color:aqua;'>" . $people['name'] . "</b><br>";
    echo "Position: " . $people['job'] . "<br>";
    echo "Phone Number: " . $people['cell'] . "<hr>";
};


?>