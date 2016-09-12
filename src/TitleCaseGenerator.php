<?php
    class TitleCaseGenerator
    {
        function makeTitleCase($input_title)
        {
            $input_array_or_words = explode(" ", $input_title);
            $output_titlecased = array();
            $special_word_array = array("in", "or", "and", "the", "a", "then", "for", "but", "so", "yet", "as", "at", "into");
            $i=0;
            foreach ($input_array_or_words as $word) {
                $word = strtolower($word);
                if ($i==0)
                {
                    array_push($output_titlecased, ucfirst($word));
                } elseif (in_array($word, $special_word_array)) {
                    array_push($output_titlecased, $word);
                } else {
                    array_push($output_titlecased, ucfirst($word));
                }
                $i++;
            }
            return implode(" ", $output_titlecased);
        }
    }
?>
