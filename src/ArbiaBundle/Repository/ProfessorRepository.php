<?php

namespace ArbiaBundle\Repository;

/**
 * ProfessorRepository
 *
 * This class was generated by the Doctrine ORM. Add your own custom
 * repository methods below.
 */


use Doctrine\ORM\EntityRepository;

class   ProfessorRepository extends EntityRepository
{
    public function findid($nom)
    {


        $qb = $this->createQueryBuilder('s');
        $qb->where('s.nom=:nom')->setParameter('nom', $nom);
        return $qb->getQuery()->getResult();


    }}
