<?php
require_once "pdo_connect.php";
class Country{
	public $Name;
	public $Continent;
	public $Region;

	public function info(){
		return "{$this->Name} находится в {$this->Continent} ({$this->Region})";
	}

}

$sql = "SELECT Name, Continent, Region FROM country";
$rs = $pdo->query($sql);
$rows = $rs->fetchAll(PDO::FETCH_CLASS, "Country");

foreach($rows as $country) {
	echo $country->info().'<br />';
}


