<?php

use Alura\Bank\Model\Cpf;
use Alura\Bank\Model\Employee\{Developer, Manager, Director};
use Alura\Bank\Service\BonusController;

require_once "src/auto-load.php";

$employee1 = new Developer('Lucas', new Cpf('111.111.111-11'), 'Developer', 1000);
$employee2 = new Manager('Bicalho', new Cpf('222.222.222-22'), 'Manager', 3000);
$employee3 = new Director('Fraga', new Cpf('333.333.333-33'), 'Director', 5000);

$employee1->levelUp();

$controller = new BonusController();

$controller->addBonus($employee1);
$controller->addBonus($employee2);
$controller->addBonus($employee3);

echo $controller->getTotalBonus();
