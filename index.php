<?php
class People {
    public $name;
    public $age;
    public $work;
    public $gender;
    private $bank_account;
}

class Animals {
    public $tiger;
    public $squirl;
    public $rebbit;
    public $wolf;
    private $elephant;
}

class Planets {
    public $venera;
    public $earch;
    public $mars;
    public $neptun;
    public $uranium;
}

$zoo = new Animals();
$company = new People();
$univerce = new Planets();
$zoo->tiger = 'Bishop';
//$zоо->elephant = 'John';
//$zоо->wolf = 'John';
$company->name = 'Alphabets';
$univerce->earch = 'New York';
echo "$company->name goin to the zoo, and watch like $zoo->tiger and John is arguing,
thats the worst thing in nowadays in $univerce->earch";
?>
