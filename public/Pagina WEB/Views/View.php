
<?php
class View {
    
    public static function show ($View, $data=null){
        include_once ("header.php");
        include ("$View.php");    
        include_once ("footer.php");
    } 
}
?>