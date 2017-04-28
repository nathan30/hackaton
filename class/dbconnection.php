<?php

/**
 * Created by PhpStorm.
 * User: natha
 * Date: 27/04/2017
 * Time: 13:56
 */
class dbconnection{
    function connect(){
        $con = mysqli_connect("localhost","aokamifrbahacka","Hackanatman1","aokamifrbahacka") or die("Couldn't connect");
        return $con;
    }
    function query($query){
        $db = new dbconnection();
        $con = $db ->connect();
        $result = mysqli_query($con,$query);
        return $result;
    }
}