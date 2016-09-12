<?php
    require_once "src/TitleCaseGenerator.php";

    class TitleCaseGeneratorTest extends PHPUnit_Framework_TestCase
    {
        function test_makeTitleCase_oneWord()
        {
            $test_TitleCaseGenerator = new TitleCaseGenerator;
            $input = "word";

            $result = $test_TitleCaseGenerator->makeTitleCase($input);

            $this->assertEquals("Word", $result);
        }

        function test_makeTitleCase_multipleWords()
        {
            $test_TitleCaseGenerator = new TitleCaseGenerator;
            $input = "word or words";

            $result = $test_TitleCaseGenerator->makeTitleCase($input);

            $this->assertEquals("Word Or Words", $result);
        }
    }
?>
