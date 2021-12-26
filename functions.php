<?php
    /**
     * Headline modification function
     *
     * @param [type] $str
     * @param string $heading
     * @param string $align
     * @param string $case
     * @param string $color
     * @return void
     */
    function headline ($str, $heading = 'h1', $align = 'center', $case = 'lowercase', $color = 'black'){

        if ($case !== 'lowercase' && $case !== 'uppercase') {
            $str= 'You have selected wrong font-case!';
        }
        echo "<span style=\" text-transform:$case; color:$color; text-align:$align;\"><$heading>". $str . "</$heading></span>";
    };

    /**
     * Headline function that turns Bangla color name into English
     *
     * @param [type] $txt
     * @param string $color
     * @return void
     */
    function banglaHeadline ($txt, $color='komola'){
        // Condition to transcribe bangla color name!
        if ($color == 'lal') {
            $colorTag = 'red';
        } elseif ($color == 'sobuj') {
            $colorTag = 'green';
        }elseif ($color == 'holud') {
            $colorTag = 'yellow';
        }elseif ($color == 'kalo') {
            $colorTag = 'black';
        }elseif ($color == 'nil') {
            $colorTag = 'blue';
        }elseif ($color == 'komola') {
            $colorTag = 'orange';
        }else{
            $colortag ='#eee';
        };

        echo "<span style=\" color:$colorTag; text-align:center;\"><h1>" . $txt . "</h1></span>";
        
    };

    /**
     * GPA calculator function
     *
     * @param [type] $marks
     * @return void
     */
    function getGpa ($marks){
       switch ($marks){
           case $marks >=0 && $marks <=32:
            $gpa = 0;
            break;
           
           case $marks >=33 && $marks <=39:
            $gpa = 2;
            break;
           
           case $marks >=40 && $marks <=49:
            $gpa = 2.5;
            break;
           
           case $marks >=50 && $marks <=59:
            $gpa = 3;
            break;
           
           case $marks >=60 && $marks <=69:
            $gpa = 3.5;
            break;
           
           case $marks >=70 && $marks <=79:
            $gpa = 4;
            break;
           
           case $marks >=80 && $marks <=100:
            $gpa = 5;
            break;
                      
            default:
            $gpa = 'Invalid input!';
            break;
       };
       echo $gpa;
    };


    function getGrade($marks){
        switch ($marks){
            case $marks >=0 && $marks <=32:
            $grade  = 'F';
            break;

            case $marks >=33 && $marks <=39:
            $grade  = 'D';
            break;

            case $marks >=40 && $marks <=49:
            $grade  = 'C';
            break;

            case $marks >=50 && $marks <=59:
            $grade  = 'B';
            break;

            case $marks >=60 && $marks <=69:
            $grade  = 'A-';
            break;

            case $marks >=70 && $marks <=79:
            $grade  = 'A';
            break;

            case $marks >=80 && $marks <=100:
            $grade  = 'A+';
            break;

            default:
            $grade  = 'Invalid Number!';
            break;
        };
        echo $grade;
    }



    

?>