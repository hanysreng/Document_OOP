<?php 

namespace CodeCourse\Repository ;       
require "vendor/autoload.php";
$user=new UserRepository();
$user->get();

include "header.php";
include "form.php";
include "footer.php";


?>