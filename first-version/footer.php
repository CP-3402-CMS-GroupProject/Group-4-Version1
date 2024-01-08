<?php 
echo login(array('username' => 123, 'password' => 123), 'optional_second_argument');

get_footer();
?>
<br>
<?php
echo select_city();
?>
<br>
<?php
echo custom_datetime();
?>


<footer>
    <p>&copy; <?php echo date("Y"); ?></p>
</footer>

</body>
</html>