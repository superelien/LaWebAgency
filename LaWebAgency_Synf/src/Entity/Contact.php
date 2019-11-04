<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Security\Core\User\UserInterface;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * @ORM\Entity(repositoryClass="App\Repository\UserRepository")
 */
class Contact
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=180, unique=true)
     * @Assert\NotBlank()
     */
    private $name;

    /**
     * @ORM\Column(type="string")
     * @Assert\NotBlank()
     */
    private $mail;

    /**
     * @ORM\Column(type="string")
     * @Assert\NotBlank()
     */
    private $tel;

    /**
     * @ORM\Column(type="string")
     * @Assert\NotBlank()
     */
    private $sujet;

    /**
     * @ORM\Column(type="string")
     * @Assert\NotBlank()
     */
    private $message;


    /**
     * Get the value of Id
     *
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set the value of Id
     *
     * @param mixed id
     *
     * @return self
     */
    public function setId($id)
    {
        $this->id = $id;

        return $this;
    }

    /**
     * Get the value of Name
     *
     * @return mixed
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Set the value of Name
     *
     * @param mixed name
     *
     * @return self
     */
    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * Get the value of Mail
     *
     * @return mixed
     */
    public function getMail()
    {
        return $this->mail;
    }

    /**
     * Set the value of Mail
     *
     * @param mixed mail
     *
     * @return self
     */
    public function setMail($mail)
    {
        $this->mail = $mail;

        return $this;
    }

    /**
     * Get the value of Tel
     *
     * @return mixed
     */
    public function getTel()
    {
        return $this->tel;
    }

    /**
     * Set the value of Tel
     *
     * @param mixed tel
     *
     * @return self
     */
    public function setTel($tel)
    {
        $this->tel = $tel;

        return $this;
    }

    /**
     * Get the value of Sujet
     *
     * @return mixed
     */
    public function getSujet()
    {
        return $this->sujet;
    }

    /**
     * Set the value of Sujet
     *
     * @param mixed sujet
     *
     * @return self
     */
    public function setSujet($sujet)
    {
        $this->sujet = $sujet;

        return $this;
    }




    /**
     * Get the value of Message
     *
     * @return mixed
     */
    public function getMessage()
    {
        return $this->message;
    }

    /**
     * Set the value of Message
     *
     * @param mixed message
     *
     * @return self
     */
    public function setMessage($message)
    {
        $this->message = $message;

        return $this;
    }

}
