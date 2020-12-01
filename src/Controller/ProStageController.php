<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;



class ProStageController extends AbstractController
{
   /**
       * @Route("/", name="pro_stage_accueil")
       */
    public function index(): Response
    {
        return $this->render('pro_stage/index.html.twig', [
            'controller_name' => 'ProStageController',
        ]);
    }
    /**
        * @Route("/entreprises", name="pro_stage_entreprises")
        */
     public function listeEntreprise(): Response
     {
         return $this->render('pro_stage/index.html.twig', [
             'controller_name' => 'ProStageController',
         ]);
     }
     /**
         * @Route("/formations", name="pro_stage_formations")
         */
      public function listeFormation(): Response
      {
          return $this->render('pro_stage/index.html.twig', [
              'controller_name' => 'ProStageController',
          ]);
      }
      /**
          * @Route("/stages/{id}", name="pro_stage_formations")
          */
       public function description(): Response
       {
           return $this->render('pro_stage/index.html.twig', [
               'controller_name' => 'ProStageController',
           ]);
       }

}
