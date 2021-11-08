<?php
require_once "template.class.php";
$uri= $_SERVER['REQUEST_URI'];
$htt=$_SERVER['HTTP_HOST'];
// echo $htt."<br>".$uri;
// $nav=$uri;
// echo $nav;
// $nueva=$uri;
$url = explode("/",$uri);
array_shift($url);
var_dump($htt);
// $child="";

$data=["nombre"=>"Sebastian"];

if(end( $url) ==""){
    $child= new Template("view/index.html",$data);
    // echo "<br>Estamos en inicio";
}elseif(end( $url) =="about"){
    $child= new Template("view/about.html",$data);
    echo "<br>Estamos en about";

}elseif(end( $url) =="catalogo"){
    $child= new Template("view/catalogo.html",$data);
    // echo "<br>Estamos en catalogo";
}else{
    echo "<br>no";
}



$title="Mi primera página";
include_once "view/app.html";