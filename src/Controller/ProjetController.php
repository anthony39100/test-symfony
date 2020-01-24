<?php

namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ProjetController

{
/**
* @Route("/", name="default")
*/ 

public function default()
{


return new Response(
'<html><body>Home</body></html>'
);
}
}

<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

/**
* @Route("/admin/projet")
*/


class ProjetController extends AbstractController


{
/**
* @Route("/", name="projet")
*/





public function default()
{

$name="franck"; 
$age="21ans";
$price = 35.47;
$technos = ['java', 'javavascript', 'C#', 'C++'];
$people =[
['name' => 'Anthony', 'age' => 28, 'sexe' => 'Male'],
['name' => 'franck', 'age' => 21, 'sexe' => 'Male'],
['name' => 'Aurélie', 'age' => 26, 'sexe' => 'Male']
];
return $this->render('projet/index.html.twig',
[
'name' => $name,
'age' => $age,
'technos'=> $technos,
'people' => $people,
'price' => $price
]);
}



/**
* @Route("/add", name="projet_add")
*/
public function add()
{
return $this->render('projet/add.html.twig', [
'controller_name' => 'ProjetController',
]);
}


/**
* @Route("/edit/{id}", name="projet_edit", requirements={"id"="\d+"})
*/
public function edit($id)
{
return $this->render('projet/edit.html.twig', [
'controller_name' => 'ProjetController',
]);
}

/**
*@Route("/delete/{id}", name="projet_delete", requirements={"id"="\d+"})
*/
public function delete($id)
{
return $this->render('projet/index.html.twig', [
'controller_name' => 'ProjetController',
]);
}


}
