<?php
namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class LuckyController extends AbstractController
{
/**
* @Route("/test", name="app_lucky_number")
*/
public function number(): Response
{
$number = random_int(0, 10);

return $this->render('base.html.twig');
    }
}