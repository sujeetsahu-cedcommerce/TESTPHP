<?php
    // session_start();
    // if(!isset($_SESSION['upperarray'])){
    //     $_SESSION['upperarray']=array();
    // }

    if(isset($_POST['info'])){
        $info=$_POST['info'];
        echo strtoupper($info);
        
    }
    if(isset($_POST['countletter'])){
        $countletter=$_POST['countletter'];
        $len=strlen($countletter);
        $words = str_word_count($countletter);
        echo $words."words".$len."characters";
    }

    if(isset($_POST['infolower'])){
        $infolower=$_POST['infolower'];
        $lower = strtolower($infolower);
        echo $lower;
    }
?>