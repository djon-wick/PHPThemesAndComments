<!DOCTYPE HTML>
<html>
    <?php
        $comments = simplexml_load_file('comments.php');

        $comment = $comments->addChild('comment');
        $comment->addChild('date', date("F j, Y, G:i"));
        $comment->addChild('author', $_GET["author"]);
        $comment->addChild('text', $_GET["comment"]);

        $file = simplexml_load_file('1.xml');
        $res = $file->xpath($_GET['xpath'].'/header');

        // Костыль
        $kkk = "";
        foreach ($res as $res1)
            $kkk =  $res1;

        $comment->addChild('theme', $kkk);
        $comment->addAttribute("xlink:type", "simple", "http://www.w3.org/1999/xlink");
        $comment->addAttribute("xlink:href", '1.xml#xpointer('.$_GET["xpath"].')', "http://www.w3.org/1999/xlink");

        $comments->asXML('comments.php');
    ?>
    <p>Успешно!</p>
    <a href="index.php"> К списку тем</a>
    <br>
    <?php
        if (($index = strpos($_GET['xpath'], 'question'))){
            echo "<a href='questions.php?xpath=".substr($_GET['xpath'], 0, strlen($_GET['xpath']) - $index-1)."'>< К списку вопросов</a><br>";
        }
    ?>
</html>