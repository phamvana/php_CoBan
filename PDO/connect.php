<?php
//echo "test connect.php"; ==> OK
//print_r(PDO::getAvailableDrivers()); ==> OK


try {
    $handler = new PDO('mysql:host=localhost; dbname=php_coban', 'root', '');
    $handler->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    echo $e->getMessage() . "<br/>";
    die("Sorry, database have problem!");
}
        //echo "The rest of your pages";
class getUserEmail{
    public $id, $name , $email,  $nameEmail;
    public function __construct(){ //Hàm khởi tạo của Lớp
        $this->nameEmail = "Name: {$this->name} --> Email: {$this->email}";
    }
}