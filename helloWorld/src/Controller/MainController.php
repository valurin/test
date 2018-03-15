<?php
namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template; //add this line to add usage of Route class.

class MainController extends Controller
{

     /**
  * @Route("/", name="app_home")
  * @Template("main/home.html.twig")
  */
    public function homeAction()
    {

        /*return new Response(
            "<html><body><h1>Welcome to my website.</h1></body></html>"
        );*/
        //return $this->render("main/home.html.twig", ["project_name" => "helloWorld"]);
        {
	        return ["project_name" => "yourProject"];
	    }

    }
	    

}