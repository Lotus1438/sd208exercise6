<?php
session_start();
$bookmarkArray = [];   


if(isset($_POST['save'])){
    $bookmark = $_POST['bookmark'];
    $url = $_POST['url'];

    $bmarks= ["bmark" => $bookmark, "link" => $url];

    if(isset($_SESSION["bookmarks"])){
        array_push($_SESSION["bookmarks"],$bmarks);
    }else{
        $bookmarkArray[]=$bmarks;
        $_SESSION["bookmarks"] = $bookmarkArray;
    
    }

    header("Location:index.php");
    
}


if(isset($_POST['delete'])){
    array_splice($_SESSION['bookmarks'],$_POST['index'], 1);
    header("Location:index.php");
}



?>