<?php
session_start();
echo '<h1> Users Dashboard</h1>';

echo $_SESSION['u_id']."<br>";
echo $_SESSION['u_name']."<br>" ;
echo $_SESSION['logged_in'];