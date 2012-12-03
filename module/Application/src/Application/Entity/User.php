<?php
namespace Application\Entity;

use Doctrine\ORM\Mapping AS ORM,
    Doctrine\Common\Collections\ArrayCollection;

/**
 * @ORM\Entity 
 */
class User
{
    /**
     * @var integer
     * 
     * @ORM\Column(type="integer",nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    protected $id;

    /**
     * @var string
     * 
     * @ORM\Column(type="string",nullable=false)	 
     */
    protected $username;

    /**
     * @var string
     * 
     * @ORM\Column(type="string",nullable=false)	 
     */
    protected $password;

    /**
     *
     * @var DateTime
     * 
     * @ORM\Column(type="string",nullable=false)
     */
    protected $insertDate;

    /**
     * @ORM\PrePersist 
     */
    public function beforeInsert() 
    {
        $this->insertDate = new DateTime();
    }
}