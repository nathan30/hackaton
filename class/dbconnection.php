<?php

/**
 * Created by PhpStorm.
 * User: natha
 * Date: 27/04/2017
 * Time: 13:56
 */
class dbconnection{
    function connect(){
        $con = mysqli_connect("localhost","root","","hackaton") or die("Couldn't connect");
        return $con;
    }
}