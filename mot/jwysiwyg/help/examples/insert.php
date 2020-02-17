<?php

    $dbc = mysqli_connect("localhost","root","","youtube")
    or die('error is connection establishment');

    $xxd =  $_POST['xxd'];

    $query = "INSERT INTO youtube123 (addres)"."value ('$xxd')";

    $result = mysqli_query($dbc,$query);


?>