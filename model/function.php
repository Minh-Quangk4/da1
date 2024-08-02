<?php
    function createCode($size, $temp) {
        $result = '';

        if($size > strlen($temp)) {
            $size = strlen($temp);
        }
        for($i = 0; $i <$size; $i++) {

            $ran = rand(0, strlen($temp)-1);
            $itemRandom = $temp[$ran];
            $result.= $itemRandom;

            $temp = substr_replace($temp,'', $ran, 1);
        }

        return $result;
    }
?>