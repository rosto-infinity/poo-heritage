/<?php 
require "classes/User.class.php";
require "classes/Admin.class.php";

$user1 = new User("Eva", "0000");
$user1->FindUser();
echo "###################3  Admin ########################### <br>";
$admin1 = new Admin("Waffo", "0000",true);
$admin1 = new Admin("lele", "0000",false);
$admin1->FindAdmin();
$admin2->FindAdmin();


//echo "###################3  avec get ########################### <br>";

// $user2 = new User("Waffo", "1234");

//  $admin =new Admin("Waffo", "13579",true);

// echo  $user1->getName(). "<br>";
// echo  $user1->getPassword() ; 


// echo "#############  Admin ############## <br>";
// echo  $admin->getName() . "<br>"; 
// echo  $admin->getPassword().  "<br>";; 
// echo  $admin->getAdmin(); 