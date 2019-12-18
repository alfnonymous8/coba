<?php include "header.php"; ?>
<!DOCTYPE html>
<html lang="en">
    <!-- <header> -->
        <!-- <h1 >Lapak Mainan</h1> -->
        <!-- <link rel="stylesheet" href="style3.css"> -->
    <!-- </header> -->
    <body class="container">
        <div>
            <nav>
                <ul>
                    <li><a href="home.php" target="self">Home</a></li>
                    <li><a href="profil.php" target="self">Profil</a></li>
                    <li><a href="product.php" target="self">Product</a></li>
                    <li><a href="portofolio.php" target="self">Portofolio</a></li>
                    <li><a href="contact.php" target="self">Contact</a></li>
                    <li><a href="comment.php" target="self">Comment</a></li>
                </ul>
            </nav>
            <section>
            <h2>Selamat Datang</h2>
            <!-- <p;">bla bla bla bla bla bla bla bla bla bla askdjnasjkdnasjkdnasjkdnjkasndasjkndjk asjkdjkasdjkasnkd asjdasjkdnjkasnd sajdkasnkjdnask sjkdjksandjknas djsandkasndkas djkasndjksnadj asjkdasnd jnndja jdsjnd djnajdjs adjsdnkasjnd asjkdnasjkdasjkdnjkasdj jk.<a href="https:\\www.google.com\" target="blank">learn more</a></p> -->
            <?php
                file = "data.txt";
                $handle = fopen ($file, "r");
                echo fread($handle, filesize($file));
                fclose($handle);
                $lines = file($file);
                echo $lines[1];
            ?>
            </section>
        </div>
    </body>
    <!-- <footer>Copyright 2019</footer> -->
    <?php include "footer.php"; ?>
</html>