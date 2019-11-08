<?php

namespace App\DatasFixtures;

use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\Persistence\ObjectManager;
use App\Entity\User;
use Symfony\Component\Security\Core\Encoder\UserPasswordEncoderInterface;


class AdminUserFixtures extends Fixture
{
    private $passwordEncoder;

    public function __construct(UserPasswordEncoderInterface $passwordEncoder)
    {
        $this->passwordEncoder = $passwordEncoder;
    }

    public function load(ObjectManager $manager)
    {
        $user = new User();
        $user->setEmail('aurelien@lawebagency.net');
        $user->addRole('ROLE_ADMIN');
        $user->setPassword($this->passwordEncoder->encodePassword(
            $user,
            '$ReLien102'
        ));

        $user2 = new User();
        $user2->setEmail('acdoublet@lawebagency.net');
        $user2->addRole('ROLE_ADMIN');
        $user2->setPassword($this->passwordEncoder->encodePassword(
            $user2,
            'LaFemmeDeMaVie'
        ));

        $user3 = new User();
        $user3->setEmail('Admin@lawebagency.net');
        $user3->addRole('ROLE_ADMIN');
        $user3->setPassword($this->passwordEncoder->encodePassword(
            $user3,
            'LAWA127'
        ));

        $manager->persist($user);
        $manager->persist($user2);
        $manager->persist($user3);
        $manager->flush();
    }
}