/<?php 
require "classes/User.class.php";
require "classes/Admin.class.php";

// $user1 = new User("Eva", "0000");
// $user2 = new User("Lele", "4200");
// $user1->FindUser();
// $user2->FindUser();
// echo "###################3  Admin ########################### <br>";
// $admin1 = new Admin("Waffo", "0000",true);
// $admin2 = new Admin("lele", "0000",false);
// $admin3 = new Admin("lele", "0000",false);
// $admin1->FindAdmin();
// $admin2->FindAdmin();


//echo "###################3  avec get ########################### <br>";

// $user2 = new User("Waffo", "1234");

//  $admin =new Admin("Waffo", "13579",true);

// echo  $user1->getName(). "<br>";
// echo  $user1->getPassword() ; 


// echo "#############  Admin ############## <br>";
// echo  $admin->getName() . "<br>"; 
// echo  $admin->getPassword().  "<br>";; 
// echo  $admin->getAdmin(); // Exemple d'utilisation


$user = new User('JohnDoe', 'password123');
echo $user->getName(); // JohnDoe
$user->setName('JaneDoe');
echo $user->getName(); // JaneDoe

if ($user->verifyPassword('password123')) {
    echo "Mot de passe correct";
} else {
    echo "Mot de passe incorrect";
}

$user->findUser();