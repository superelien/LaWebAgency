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
        $user->setEmail('tarzan@lajungle.com');
        $user->addRole('batman');
        $user->setPassword($this->passwordEncoder->encodePassword(
            $user,
            '$ReLien102'
        ));


        $manager->persist($user);
        $manager->persist($user2);
        $manager->persist($user3);
        $manager->flush();
    }
}