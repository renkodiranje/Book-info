<?php
require 'db.php';
if(isset($_GET['id'])){
    $id = $_GET['id'];
    $books = array_filter($db,function($el)
    {
        global $id;
        return $el['id'] == $id;
    });
}elseif($_GET['search']){
$search = $_GET['search'];
$books = array_filter($db,function($el)
{
    global $search;
    return $el['name'] == $search || $el['author'] == $search;
});
if(count($books)==0) {
    header("location:index.php?error=1");
}
}
?>
<?php $title = "Info"?>
<?php require 'partials/top.php';?>
<?php require 'partials/nav.php';?>
<?php require 'partials/form.php';?>
<?php require 'partials/card.php';?>
<?php require 'partials/bottom.php';?>
