<?php
namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Session\SessionInterface;
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
    private $steps = [
        'step1' => ProjectType::class,
        'step2' => ProjectCarType::class,
        'step3' => ProjectBuildType::class,
        'step4' => ProjectOffersType::class,
        'step5' => CreditType::class,
        'step6' => SituationType::class,
        'step7' => RevenueType::class,
        'step8' => OtherRevenuType::class,
        'step9' => ChargeType::class,
        'step10' => SituationProfessionalType::class,
        'step11' => SituationProfessionalCoType::class,
        'step12' => SituationInheritanceType::class,
        'step13' => BankType::class,
        'step14' => MaritalStatusType::class,
        'step15' => MaritalStatusCoType::class,
        'step16' => ContactDetailsType::class,
    ];

    public function step($step, Request $request, SessionInterface $session)
    {
        if (!isset($this->steps[$step])) {
            throw $this->createNotFoundException('Étape non trouvée');
        }

        $formClass = $this->steps[$step];
        $form = $this->createForm($formClass::class);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $session->set($step . '_data', $form->getData());
            $nextStep = $this->getNextStep($step);
            return $this->redirectToRoute($nextStep);
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
