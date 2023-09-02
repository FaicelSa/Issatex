<?php // src/Controller/InscriptionController.php
namespace App\Controller;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use App\Repository\ClientRepository;
class InscriptionController extends AbstractController
{
    /**
     * @Route("/accueil",name="accueil")
     */
    public function number(ClientRepository $clientRepository)
    {
        $number = random_int(0, 100);

         return $this->render('Inscription/accueil.html.twig', );

    }
    /**
     * @Route("/voir/{id}",name="voir")
     */
    public function voirAction($id){
return $this->render('Inscription/voir.html.twig',array('id'=>$id));
    }
}
?>
