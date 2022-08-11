<?php

$server="localhost:3306";
$username="root";
$password="";

$con = mysqli_connect($server,$username,$password);

if($con==FALSE){
    echo "Connection Not established";
}

else{
   $email = $_POST['email'];
   $roll = $_POST['RollNo'];
   $class = $_POST['Class'];
   $section = $_POST['Section'];
   $mentor = $_POST['mentor'];
   $Rajneesh=$_POST['op1']+$_POST['op7']+$_POST['op13']+$_POST['op19']+$_POST['op25']+$_POST['op31']+$_POST['op37']+$_POST['op43']+$_POST['op49']+$_POST['op55']+$_POST['op61']+$_POST['op67']+$_POST['op73']+$_POST['op79']+$_POST['op85'];

   $Rohit=$_POST['op2']+$_POST['op8']+$_POST['op14']+$_POST['op20']+$_POST['op26']+$_POST['op32']+$_POST['op38']+$_POST['op44']+$_POST['op50']+$_POST['op56']+$_POST['op62']+$_POST['op68']+$_POST['op74']+$_POST['op80']+$_POST['op86'];

   $Rajeev= $_POST['op3']+$_POST['op9']+$_POST['op15']+$_POST['op21']+$_POST['op27']+$_POST['op33']+$_POST['op39']+$_POST['op45']+$_POST['op51']+$_POST['op57']+$_POST['op63']+$_POST['op69']+$_POST['op75']+$_POST['op81']+$_POST['op87'];

   $Poonam= $_POST['op4']+$_POST['op10']+$_POST['op16']+$_POST['op22']+$_POST['op28']+$_POST['op34']+$_POST['op40']+$_POST['op46']+$_POST['op52']+$_POST['op58']+$_POST['op64']+$_POST['op70']+$_POST['op76']+$_POST['op82']+$_POST['op88'];

   $Sonali= $_POST['op5']+$_POST['op11']+$_POST['op17']+$_POST['op23']+$_POST['op29']+$_POST['op35']+$_POST['op41']+$_POST['op47']+$_POST['op53']+$_POST['op59']+$_POST['op65']+$_POST['op71']+$_POST['op77']+$_POST['op83']+$_POST['op89'];

   $Dileep= $_POST['op6']+$_POST['op12']+$_POST['op18']+$_POST['op24']+$_POST['op30']+$_POST['op36']+$_POST['op42']+$_POST['op48']+$_POST['op54']+$_POST['op60']+$_POST['op66']+$_POST['op72']+$_POST['op78']+$_POST['op84']+$_POST['op90'];

   
   
   $sug= $_POST['sug'];

   $query = "INSERT INTO `feedback`.`response` VALUES('$email','$roll','$class','$section','$mentor','$Rajneesh','$Rohit','$Rajeev','$Poonam','$Sonali','$Dileep','$sug');";



$r1 =array($_POST['op1'],$_POST['op7'],$_POST['op13'],$_POST['op19'],$_POST['op25'],$_POST['op31'],$_POST['op37'],$_POST['op43'],$_POST['op49'],$_POST['op55'],$_POST['op61'],$_POST['op67'],$_POST['op73'],$_POST['op79'],$_POST['op85']);

$r2=array($_POST['op2'],$_POST['op8'],$_POST['op14'],$_POST['op20'],$_POST['op26'],$_POST['op32'],$_POST['op38'],$_POST['op44'],$_POST['op50'],$_POST['op56'],$_POST['op62'],$_POST['op68'],$_POST['op74'],$_POST['op80'],$_POST['op86']);

$r3 = array($_POST['op3'],$_POST['op9'],$_POST['op15'],$_POST['op21'],$_POST['op27'],$_POST['op33'],$_POST['op39'],$_POST['op45'],$_POST['op51'],$_POST['op57'],$_POST['op63'],$_POST['op69'],$_POST['op75'],$_POST['op81'],$_POST['op87']);

$p= array($_POST['op4'],$_POST['op10'],$_POST['op16'],$_POST['op22'],$_POST['op28'],$_POST['op34'],$_POST['op40'],$_POST['op46'],$_POST['op52'],$_POST['op58'],$_POST['op64'],$_POST['op70'],$_POST['op76'],$_POST['op82'],$_POST['op88']);

$s = array($_POST['op5'],$_POST['op11'],$_POST['op17'],$_POST['op23'],$_POST['op29'],$_POST['op35'],$_POST['op41'],$_POST['op47'],$_POST['op53'],$_POST['op59'],$_POST['op65'],$_POST['op71'],$_POST['op77'],$_POST['op83'],$_POST['op89']);

$d = array($_POST['op6'],$_POST['op12'],$_POST['op18'],$_POST['op24'],$_POST['op30'],$_POST['op36'],$_POST['op42'],$_POST['op48'],$_POST['op54'],$_POST['op60'],$_POST['op66'],$_POST['op72'],$_POST['op78'],$_POST['op84'],$_POST['op90']);



  for($i=0;$i<15;$i++){
      $query2="INSERT INTO `feedback`.`responseq` VALUES('$r1[$i]','$r2[$i]','$r3[$i]','$p[$i]','$s[$i]','$d[$i]');";
      $con->query($query2);
  }

   try{
    if($con->query($query)){
        header('location:feedback2.html');
    }

}


 catch(Exception $e){
     header('location:feedback1.html');
 
}
   


}


?>