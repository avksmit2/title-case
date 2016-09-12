<?php
    class TitleCaseGenerator
    {
        function makeTitleCase($input_title)
        {
            $input_array_or_words = explode(" ", $input_title);
            $output_titlecased = array();
            foreach ($input_array_or_words as $word) {
                array_push($output_titlecased, ucfirst($word));
            }
            return implode(" ", $output_titlecased);
        }
    }
?>
