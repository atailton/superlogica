<?php

namespace App\Http\Controllers\Challenge;

use App\Http\Controllers\Controller;

class ChallengeThreeController extends Controller
{

    /*
        Como no exercício foi solicitado DML coloquei abaixo o SQL puro, entretanto, hoje em dia apenas uso os ORMs dos frameworks como o ELOQUENT por acreditar ser uma prática mais segura.
    */
    public function index()
    {
        $createTableUsuarios = 'CREATE TABLE `testsuperlogica`.`usuarios` (`id` INT NOT NULL AUTO_INCREMENT , `cpf` VARCHAR(255) NOT NULL , `nome` VARCHAR(255) NOT NULL , PRIMARY KEY (`id`)) ENGINE = InnoDB;';
        $createTableInfos = 'CREATE TABLE `testsuperlogica`.`infos` (`id` INT NOT NULL AUTO_INCREMENT , `cpf` VARCHAR(255) NOT NULL , `genero` VARCHAR(255) NOT NULL , `ano_nascimento` YEAR NOT NULL , PRIMARY KEY (`id`)) ENGINE = InnoDB;';
    }

    public function store()
    {
        $isertUsuarios = "INSERT INTO `usuarios` (`id`, `cpf`, `nome`) VALUES ('1', '16798125050', 'Luke Skywalker'), ('2', '59875804045', 'Bruce Wayne'), ('3', '04707649025', 'Diane Prince'), ('4', '21142450040', 'Bruce Banner'), ('5', '83257946074', 'Harley Quinn'), ('6', '07583509025', 'Peter Parker')";
        $insertInfos = "INSERT INTO `infos` (`id`, `cpf`, `genero`, `ano_nascimento`) VALUES ('1', '16798125050', 'M', '1976'), ('2', '59875804045', 'M', '1960'), ('3', '04707649025', 'F', '1988'), ('4', '21142450040', 'M', '1954'), ('5', '83257946074', 'F', '1970'), ('6', '07583509025', 'M', '1972')";
    }

    public function show()
    {
        $users = 'SELECT CONCAT(a.nome, " - ", b.genero) AS usuario, (year(now()) - b.ano_nascimento) as idade, IF((year(now()) - b.ano_nascimento) > 50, "YES", "NO") as maior_50_anos FROM usuarios a INNER JOIN infos b ON a.cpf = b.cpf;';
    }
   
}
