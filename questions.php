<!DOCTYPE HTML>
<html>
	<?php

        $quiz = simplexml_load_file('1.xml');

        $xpath_str = $_GET['xpath'].'/question';

        $result = $quiz->xpath($xpath_str);

        echo "<ol>";

        foreach ($result as $i => $node)
        {

            $i++;

            echo "<li>", $node->header, " <a href='comment.php?xpath=".$xpath_str.'['.$i."]'><input type='button' value='Коментировать'></a><a href='view_comments.php?xpath=".$xpath_str.'['.$i."]'> <input type='button' value='Смотреть комментарии'> </a><ol type='a'>";

            $result1 = $node->xpath("answer");

            foreach ($result1 as $node1) {
                echo "<li>", htmlspecialchars($node1), "</li>";
            }

            echo "</ol></li><br>";
        }

        echo "</ol>";
	?>
    <a href="index.php">< К списку тем</a>
</html>