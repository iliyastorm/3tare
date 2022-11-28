<?php
if (isset($_POST['submit'])) {
    $n = $_POST['n1'];


    for ($k = 1; $k <= $n; $k++) {
        for ($i = 1; $i <= $k; $i++) {
            echo "*";
        }
        echo "<br>";
    }
}
?>
<form method="post">
    <label>number:</label> <br/>
    <input type="number" name="n1"/>
    <input type="submit" name="submit" value="run"/>
</form>

