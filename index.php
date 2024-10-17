/<?php 
require "classes/User.class.php";
require "classes/Admin.class.php";

$user1 = new User("Eva", "0000");
$user1->FindUser();
echo "#############  Admin ############## <br>";
$admin1 = new Admin("Waffo", "0000",true);
$admin1->FindAdmin();



// $user2 = new User("Waffo", "1234");

//  $admin =new Admin("Waffo", "13579",true);

// echo  $user1->getName(). "<br>";
// echo  $user1->getPassword() ; 


// echo "#############  Admin ############## <br>";
// echo  $admin->getName() . "<br>"; 
// echo  $admin->getPassword().  "<br>";; 
// echo  $admin->getAdmin(); 