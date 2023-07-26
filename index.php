<?php
    class User{
       public $username;
       protected $email ;
       public $role = 'member';

       public function __construct($username,$email){
        $this->username=$username;
        $this->email=$email;
       }
       public function __destruct(){
        echo "the user $this->username was removed <br>";
       }
       public function __clone(){
        $this->username= $this->username .'(cloned)<br>';
       }
       public function addFriend(){
        return "$this->email added a new friend";
       }
       public function message(){
        return "$this->email , an admin, sent a new message";
       }
       public function getEmail(){
        return $this->email;
       }
       public function setEmail($email){
        if(strpos($email,'@')> -1){
          $this->email=$email;  
        }

       }
    }
    class AdminUser extends user{
        public $level;
        public $role='admin' ;
        // public $email;
        public function __construct($username,$email,$level){
            $this->level = $level;
            parent:: __construct($username,$email);
            // $this->email=$email;
        }

    }
    $userOne = new User('mario','mario@thenetninja.co.uk');
    $userTwo = new User('luigi','luigi@thenetninja.co.uk');
    $userThree = new AdminUser('sss','sss@.com','7');

    $userFour =clone $userOne;
    echo $userFour -> username;
    // unset($userOne);

    // echo $userOne->role .'<br>';
    // echo $userThree->role .'<br>';
    // echo $userTwo->message() .'<br>';
    // echo $userThree->message() .'<br>';

    // echo $userThree->username .'<br>';
    // echo $userThree->getEmail() .'<br>';
    // echo $userThree->level . '<br>';

    // echo $userOne->username .'<br>';
    // echo $userOne->email .'<br>';
    // echo $userOne->addFriend() .'<br>';

    // $userTwo->username= 'yoshi';
    // $userTwo->email= 'yoshi@thenetninja.co.uk';
    // $userOne->setEmail('yoshi@thenetninja.co.uk');
    // echo $userOne->getEmail() .'<br>';
    // echo $userTwo->getEmail();
    


    // echo $userTwo->username .'<br>';
    // echo $userTwo->email .'<br>';
    // echo $userTwo->addFriend() .'<br>';


    // print_r(get_class_vars('user'));
    // print_r(get_class_methods('user'));

    // echo'the class is '. get_class($userOne);

?>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
</body>