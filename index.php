<?
if(empty($_GET['id'])){
    $id = 1;
}
else{
    $id = (int)$_GET['id'];
}
if($id>3 || $id<1){
    $id = 1;
}
?>
<img width="450px" height="200px" src="./img/<?echo $id?>.jpg">
<a href="index.php?id=<?echo ($id>1) ? $id-1 : 3; ?>">Prev</a>
<a href="index.php?id=<?echo ($id<3) ? $id+1 : 1; ?>">Next</a>
