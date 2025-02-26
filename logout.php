<?php
session_start();
if(isset($_SESSION['NAME']))
{
    session_destroy();
}
echo"<script><alert>Logout Successful!!</alert></script>";
echo"<script>window.location.href = 'HEADER2.php';</script>";
?>