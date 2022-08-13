<?php
    require "php/header.php";
?>
<p><span>Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolores est quidem, vero maxime modi nisi error voluptatem culpa corrupti aliquid itaque magnam voluptatibus tempore veritatis ipsam accusantium optio fuga totam.</span><span>Maxime unde error, magnam voluptatum modi eos, reprehenderit voluptate magni blanditiis adipisci ullam ipsa! Quam velit est facere quo? Culpa ab doloribus aliquam ducimus dolorem eaque temporibus, illo repellendus distinctio.</span></p>
    <?php
        echo "Hello, $hi";
        echo"<h1 class='privet'>Hello, $dolly</h1>";
        echo'<h1 class="privet">Hello, '.$dolly.'</h1>';
        $href = "second.php";
    ?>
    <a href="<?php echo $href?>"><?= $lincString ?></a>
<?php
    require "php/footer.php";
?>