<!DOCTYPE HTML>
    <html>
    	<?php

            $quiz = simplexml_load_file('1.xml');

            $xpath_str = "lecture";

            $result = $quiz->xpath($xpath_str);

            echo "<ol>";

            foreach ($result as $i => $node) {

                $i++;

                echo "<li>
                        <a href='questions.php?xpath=".$xpath_str.'['.$i."]'>", $node->header, "</a> ";

                echo "<a href='comment.php?xpath=".$xpath_str.'['.$i."]'> <input type='button' value='Коментировать'> </a>";
                        
                echo "<a href='view_comments.php?xpath=".$xpath_str.'['.$i."]'> <input type='button' value='Смотреть комментарии'> </a> </li>";
            }

            echo "</ol>";

    	?>
    </html>