<?php
// first message
echo "Hello world!";
echo "<br/>";
echo "<br/>";

// variables
$num_1 = 11;
$num_2 = 35;

echo "num_1 = $num_1  num_2=$num_2";
echo "<br/>";
echo "<br/>";

// operations
$a = 8 + 2;
echo $a . "; ";
$a = 8 - 2;
echo $a . "; ";
$a = 8 * 2;
echo $a . "; ";
$a = 8 / 2;
echo $a . "; ";
$a = 8 % 2;
echo $a . "; ";
$a = 8 ** 2;
echo $a . "; ";
$a = (2 == "2");
echo $a;
echo "<br/>";
echo "<br/>";

// if..else
$a = 5;
if($a > 0){
    echo "Value more than 0";
}
elseif($a < 0){
    echo "Value less than 0";
}
else{
    echo "Value equal 0";
}
echo "<br/>";
echo "<br/>";

$a = -10;
echo $a > 0 ? "Value more than 0" : "Value less than 0 or equal";
echo "<br/>";
echo "<br/>";

// loops
for ($i = 1; $i < 10; $i++)
{
    echo "Sqr($i) = " . $i * $i . "<br/>";
}
echo "<br/>";

$num = 1;
while ($num < 10){
    echo "Sqr($num) = " . $num * $num . "<br/>";
    $num++;
}
echo "<br/>";
// arrays
$countries = ["Germany" => "Berlin", "France" => "Paris", "Spain" => "Madrid"];
echo $countries["Spain"];
echo "<br />";
$countries["Italy"] = "Rome";
echo $countries["Italy"];

echo "<br/>";
echo "<br/>";

foreach ($countries as $country => $capital){
    echo "Country: $country. Capital: $capital <br/>";
}
echo "<br/>";

// functions
function hello()
{
    echo "Hello PHP";
}

hello();
echo "<br />";
echo "<br/>";

// OOP
class Person{
    private $fullName;
    private $age;
    private $address;

    function __construct($fullName, $age, $address)
    {
        $this->fullName = $fullName;
        $this->age = $age;
        $this->address = $address;
    }

    public function getFullName(){
        return $this->fullName;
    }

    public function setFullName($fullName){
        $this->fullName = $fullName;
    }

    public function getAge(){
        return $this->age;
    }

    public function setAge($age){
        $this->age = $age;
    }

    public function returnAddress(){
        return $this->address;
    }

    public function setAddress($address){
        $this->address = $address;
    }

    public function __toString()
    {
        return "Full name: $this->fullName. Age: $this->age. Address: $this->address";
    }
}

class Employee extends Person{
    private $company;
    public function __construct($fullName, $age, $address, $company)
    {
        parent::__construct($fullName, $age, $address);
        $this->company = $company;
    }

    public function getCompany(){
        return $this->company;
    }

    public function setCompany($company){
        $this->company = $company;
    }

    public function __toString()
    {
        return parent::__toString() . ". Company: $this->company";
    }
}

$person = new Person("Vasiliy Pavliuk", 19, "Kyiv, Ukraine");
echo $person;
echo "<br />";
echo "<br/>";
$employee = new Employee("Tkachenko Roman", 19, "Lutsk, Ukraine", "Google");
echo $employee;
echo "<br />";
echo "<br/>";

// singleton
class Singleton{
    private static $instance;
    private function __construct()
    {
    }

    protected function __clone() {

    }

    public function __wakeup()
    {
        throw new \Exception("Cannot unserialize a singleton.");
    }

    public static function getInstance(){
        if(is_null(self::$instance))
            self::$instance = new Singleton();
        return self::$instance;
    }
}

function clientCode()
{
    $s1 = Singleton::getInstance();
    $s2 = Singleton::getInstance();
    if ($s1 === $s2) {
        echo "Singleton works, both variables contain the same instance.";
    } else {
        echo "Singleton failed, variables contain different instances.";
    }
}

clientCode();
?>