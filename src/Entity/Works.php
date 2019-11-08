<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\HttpFoundation\File\File;
use Vich\UploaderBundle\Mapping\Annotation as Vich;

/**
 * @ORM\Entity(repositoryClass="App\Repository\WorksRepository")
 * @Vich\Uploadable
 */
class Works
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $title;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $image;

    /**
     * @Vich\UploadableField(mapping="imgWorks_asset", fileNameProperty="image")
     * @var File
     */
    private $imageFile;

    /**
     * @ORM\Column(type="datetime")
     */
    private $updateAt;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $description;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $tags;

    // /**
    //  * @ORM\Column(type="string", length=255)
    //  */
    // private $imagebig;

    // /**
    //  ** @Vich\UploadableField(mapping="imgBigWorks_asset", fileNameProperty="image")
    //  * @var File
    //  */
    // private $imagebigFile;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $linkWebsite;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getTitle(): ?string
    {
        return $this->title;
    }

    public function setTitle(string $title): self
    {
        $this->title = $title;

        return $this;
    }

    public function getImage()
    {
        return $this->image;
    }

    public function setImage($image): self
    {
        $this->image = $image;

        return $this;
    }

    public function getImageFile(): ?file
    {
        return $this->imageFile;
    }

    /**
     * If manually uploading a file (i.e. not using Symfony Form) ensure an instance
     * of 'UploadedFile' is injected into this setter to trigger the update. If this
     * bundle's configuration parameter 'inject_on_load' is set to 'true' this setter
     * must be able to accept an instance of 'File' as the bundle will inject one here
     * during Doctrine hydration.
     *
     * @param File|\Symfony\Component\HttpFoundation\File\UploadedFile $imageFile
     */

    public function setImageFile(File $image = null): void
    {
        $this->imageFile = $image;

        // VERY IMPORTANT:
        // It is required that at least one field changes if you are using Doctrine,
        // otherwise the event listeners won't be called and the file is lost
        if ($image) {
            // if 'updatedAt' is not defined in your entity, use another property
            $this->updatedAt = new \DateTime('now');
        }
    }

    // public function getimagebig()
    // {
    //     return $this->imagebig;
    // }

    // public function setimagebig($imagebig): self
    // {
    //     $this->imagebig = $imagebig;

    //     return $this;
    // }

    // public function getimagebigFile(): ?file
    // {
    //     return $this->imagebigFile;
    // }

    // /**
    //  * If manually uploading a file (i.e. not using Symfony Form) ensure an instance
    //  * of 'UploadedFile' is injected into this setter to trigger the update. If this
    //  * bundle's configuration parameter 'inject_on_load' is set to 'true' this setter
    //  * must be able to accept an instance of 'File' as the bundle will inject one here
    //  * during Doctrine hydration.
    //  *
    //  * @param File|\Symfony\Component\HttpFoundation\File\UploadedFile $imagebigFile
    //  */

    // public function setimagebigFile(File $imagebig = null): void
    // {
    //     $this->imagebigFile = $imagebig;

    //     // VERY IMPORTANT:
    //     // It is required that at least one field changes if you are using Doctrine,
    //     // otherwise the event listeners won't be called and the file is lost
    //     if ($imagebig) {
    //         // if 'updatedAt' is not defined in your entity, use another property
    //         $this->updatedAt = new \DateTime('now');
    //     }
    // }

    public function getUpdateAt(): ?\DateTimeInterface
    {
        return $this->updateAt;
    }

    public function setUpdateAt(\DateTimeInterface $updateAt): self
    {
        $this->updateAt = $updateAt;

        return $this;
    }

    public function getDescription(): ?string
    {
        return $this->description;
    }

    public function setDescription(string $description): self
    {
        $this->description = $description;

        return $this;
    }

    public function getTags(): ?string
    {
        return $this->tags;
    }

    public function setTags(string $tags): self
    {
        $this->tags = $tags;

        return $this;
    }

    public function getLinkWebsite(): ?string
    {
        return $this->linkWebsite;
    }

    public function setLinkWebsite(string $linkWebsite): self
    {
        $this->linkWebsite = $linkWebsite;

        return $this;
    }
}
