<?php
$con= mysqli_connect('localhost','root','','sports_cultural_portal');
if(isset($_POST['update'])){
    $sql="SELECT * FROM cultural_list";
    $res=mysqli_query($con,$sql);
    while ($row = $res->fetch_assoc()){
        $rid=$row['id'];
        $toggle=$_POST[$rid];
        $s="UPDATE `cultural_list` 
            SET activity='$toggle'
            WHERE id='$rid'";
        mysqli_query($con,$s);
    }

}
header("location:cultural_list.php");
      
    mysqli_close($con);

?>