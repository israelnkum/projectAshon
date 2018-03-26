<?php
session_start();
echo '<h1> Users Dashboard</h1>';

echo $_SESSION['u_id'];
echo $_SESSION['u_name'] ;
echo $_SESSION['logged_in'];