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
        echo "<span style=\" text-transform:$case; color:$color; text-align:$align;\"><$heading>". $str . "</$heading></span>";
    };

?>