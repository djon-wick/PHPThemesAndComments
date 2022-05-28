<!DOCTYPE HTML>
<html>
    <form action="link.php" method="get">
        <?PHP
            echo "<input type='hidden' name='xpath' value='$_GET[xpath]'>"
        ?>
        <input type="text" name="author" placeholder="Автор">
        <br>
        <textarea name="comment" placeholder="Комментраий"></textarea>
        <br>
        <input type="submit">
    </form>
</html>