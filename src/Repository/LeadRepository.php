<?php

namespace App\Repository;

use App\Entity\Lead;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

class LeadRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Lead::class);
    }

    public function insert(array $data): void
    {
        $lead = new Lead();

        // Supposons que chaque clé dans $data correspond à un setter dans l'entité Lead
        foreach ($data as $key => $value) {
            $methodName = 'set' . ucfirst($key);
            if (method_exists($lead, $methodName)) {
                $lead->$methodName($value);
            }
        }

        $this->_em->persist($lead);
        $this->_em->flush();
    }

    public function getLastId(): ?int
    {
        $entityManager = $this->getEntityManager();
        $query = $entityManager->createQuery(
            'SELECT l.id FROM App\Entity\Lead l ORDER BY l.id DESC'
        )->setMaxResults(1);

        return $query->getSingleScalarResult();
    }
}
