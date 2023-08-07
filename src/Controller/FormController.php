<?php
namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Session\SessionInterface;
use Symfony\Component\Form\FormFactoryInterface; 
use App\Form\ProjectType;
use App\Form\ProjectCarType;
use App\Form\ProjectBuildType;
use App\Form\ProjectOffersType;
use App\Form\CreditType;
use App\Form\SituationType;
use App\Form\RevenueType;
use App\Form\OtherRevenuType;
use App\Form\ChargeType;
use App\Form\SituationProfessionalType;
use App\Form\SituationProfessionalCoType;
use App\Form\SituationInheritanceType;
use App\Form\BankType;
use App\Form\MaritalStatusType;
use App\Form\MaritalStatusCoType;
use App\Form\ContactDetailsType;

class FormController extends AbstractController
{
    private $formFactory;

    // Ajoutez le constructeur avec le service FormFactoryInterface en tant qu'argument
    public function __construct(FormFactoryInterface $formFactory)
    {
        $this->formFactory = $formFactory;
    }

    private $steps = [
        'project' => ProjectType::class,
        'projectCar' => ProjectCarType::class,
        'projectBuild' => ProjectBuildType::class,
        'projectOffers' => ProjectOffersType::class,
        'credit' => CreditType::class,
        'situation' => SituationType::class,
        'revenue' => RevenueType::class,
        'otherRevenu' => OtherRevenuType::class,
        'charge' => ChargeType::class,
        'situationProfessional' => SituationProfessionalType::class,
        'situationProfessionalCo' => SituationProfessionalCoType::class,
        'situationInheritance' => SituationInheritanceType::class,
        'bank' => BankType::class,
        'maritalStatus' => MaritalStatusType::class,
        'maritalStatusCo' => MaritalStatusCoType::class,
        'contactDetails' => ContactDetailsType::class,
    ];

   /**
     * @Route("/form/{step}", name="form_step")
     */
    public function step($step, Request $request, SessionInterface $session)
    {
        // dd($step);
        if (!isset($this->steps[$step])) {
            throw $this->createNotFoundException('Étape non trouvée');
        }

        $formClass = $this->steps[$step];
        $form = $this->formFactory->create($formClass);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $session->set($step . '_data', $form->getData());
            $nextStep = $this->getNextStep($step);
            return $this->redirectToRoute('form_step', ['step' => $nextStep]);
        }

        return $this->render('form/' . $step . '.html.twig', [
            'form' => $form->createView(),
        ]);
    }

    private function getNextStep($currentStep)
    {
        $keys = array_keys($this->steps);
        $currentIndex = array_search($currentStep, $keys);
        if ($currentIndex === false || $currentIndex === count($keys) - 1) {
            // Retournez la route de fin si c'est la dernière étape
            return 'finish';
        }

        return $keys[$currentIndex + 1];
    }
}