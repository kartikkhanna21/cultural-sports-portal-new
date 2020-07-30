<?php
$con= mysqli_connect('localhost','root','','sports_cultural_portal');
if(isset($_POST['update'])){
    $sql="SELECT * FROM sports_list";
    $res=mysqli_query($con,$sql);
    while ($row = $res->fetch_assoc()){
        $rid=$row['id'];
        $toggle=$_POST[$rid];
        $s="UPDATE `sports_list` 
            SET activity='$toggle'
            WHERE id='$rid'";
        mysqli_query($con,$s);
    }

}
header("location:Sports_list.php");
      
    mysqli_close($con);

?>