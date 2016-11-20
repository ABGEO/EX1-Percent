<!DOCTYPE html>
<html>
    <head>
        <title>პროცენტები</title>
        <link rel="stylesheet" href="css/style.css" type="text/css" media="screen" />
    </head>
    <body>
        <h1>{ &lt;DIRECTED ByABGEO /&gt; }</h1>
        <div class="content">
            <div class="glava">მაგ.1: პროცენტები</div> <hr>

            <form action="/" method="POST">
                <center>
                    <input type="text" name="chis1" placeholder="შეიყვანეთ რიცხვი"> </br></br>
                    <input type="text" name="chis2" placeholder="შეიყვანეთ პროცენტი"> </br></br>

                    <input type="submit" value="გამოთვლა">
                </center>
            </form>

            <?php
                $chis1 = trim($_REQUEST['chis1']);
                $chis2 = trim($_REQUEST['chis2']);
                
                $perc = $chis1 / 100 * $chis2;

                echo "<hr> <center>";
                    echo $chis1."-ის ".$chis2."%-ია ".$perc.".";
                echo "</center>";
            ?>

        </div>
        <div class="footer">
            <p>{ TTProductions 2016-<?php echo date(Y); ?> }</p>
        </div>
    </body>
</html>