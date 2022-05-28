<!DOCTYPE HTML>
<html>
    <?php
        $comments = simplexml_load_file('comments.php');

        $result = $comments->xpath("//comment[@*[namespace-uri()='http://www.w3.org/1999/xlink' and local-name()='href']='1.xml#xpointer($_GET[xpath])']");

        foreach ($result as $i => $node) {
            $i++;
        	echo $i.'. '.$node->theme.'<br>'.$node->author.' on '.$node->date.'<br>'.
            $node->text.'<br>';
        }
        if (($index = strpos($_GET['xpath'], 'question'))){
            echo "<a href='questions.php?xpath=".substr($_GET['xpath'], 0, strlen($_GET['xpath']) - $index-1)."'>< К списку вопросов</a><br>";
        }
        echo "<a href='index.php'>< К списку тем</a>";
    ?>
</html>