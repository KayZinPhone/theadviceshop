<footer><p class="copyright">&copy; 2015, The Advice Shop.</p>
    <p class="user"><?php
// echo $_SESSION['blah']; // demo undefined variable
        print_r($_SESSION);
if (isset($_SESSION['username'])) {
    echo "Hello " . $_SESSION['username'];
    echo " - <a href=\"logout.php?page=$name\">Logout</a>";
}
else
    echo "(Not logged in)";
?></p>
</footer>
<?php if (isset($dbh)) $dbh = null; ?>
