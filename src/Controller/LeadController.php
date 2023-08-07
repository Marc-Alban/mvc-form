<?php

namespace App\Controller;

use App\Service\LeadService;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;


class LeadController extends AbstractController
{
    private $leadService;

    public function __construct(LeadService $leadService)
    {
        $this->leadService = $leadService;
    }

    /**
     * @Route("/conso", name="lead_index")
     */
    public function index(Request $request): Response
    {
        if ($request->isMethod('POST')) {
            $data = $request->request->all(); // Récupérer les données du formulaire
            $result = $this->leadService->processLeadData($data);

            // Gérer le résultat ici (rediriger, afficher un message, etc.)
            $_SESSION['result'] = $result;

            return $this->render('end.html.twig'); // Assurez-vous que ce modèle existe
        }

        return $this->render('lead/index.html.twig'); // Assurez-vous que ce modèle existe
    }
}
