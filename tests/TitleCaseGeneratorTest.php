<?php
    require_once "src/TitleCaseGenerator.php";

    class TitleCaseGeneratorTest extends PHPUnit_Framework_TestCase
    {
        function test_makeTitleCase_firstWord()
        {
            $test_TitleCaseGenerator = new TitleCaseGenerator;
            $input = "tHe woRD OR 27 wOrds";

            $result = $test_TitleCaseGenerator->makeTitleCase($input);

            $this->assertEquals("The Word or 27 Words", $result);
        }
    }
?>
