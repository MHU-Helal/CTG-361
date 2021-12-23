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
        
    }

?>