<?php

namespace organiza\V1\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * User
 *
 * @ORM\Table(name="user", uniqueConstraints={@ORM\UniqueConstraint(name="email", columns={"email"})})
 * @ORM\Entity
 */
class User
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer", precision=0, scale=0, nullable=false, unique=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="full_name", type="string", length=100, precision=0, scale=0, nullable=false, unique=false)
     */
    private $fullName;

    /**
     * @var string|null
     *
     * @ORM\Column(name="telephone", type="string", length=13, precision=0, scale=0, nullable=true, options={"default"="NULL"}, unique=false)
     */
    private $telephone = 'NULL';

    /**
     * @var string
     *
     * @ORM\Column(name="email", type="string", length=256, precision=0, scale=0, nullable=false, unique=false)
     */
    private $email;

    /**
     * @var string
     *
     * @ORM\Column(name="p_password", type="string", length=256, precision=0, scale=0, nullable=false, unique=false)
     */
    private $pPassword;

    /**
     * @var bool
     *
     * @ORM\Column(name="permission", type="boolean", precision=0, scale=0, nullable=false, unique=false)
     */
    private $permission;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="dt_resgister", type="datetime", precision=0, scale=0, nullable=false, options={"default"="current_timestamp()"}, unique=false)
     */
    private $dtResgister = 'current_timestamp()';


    /**
     * Get id.
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set fullName.
     *
     * @param string $fullName
     *
     * @return User
     */
    public function setFullName($fullName)
    {
        $this->fullName = $fullName;

        return $this;
    }

    /**
     * Get fullName.
     *
     * @return string
     */
    public function getFullName()
    {
        return $this->fullName;
    }

    /**
     * Set telephone.
     *
     * @param string|null $telephone
     *
     * @return User
     */
    public function setTelephone($telephone = null)
    {
        $this->telephone = $telephone;

        return $this;
    }

    /**
     * Get telephone.
     *
     * @return string|null
     */
    public function getTelephone()
    {
        return $this->telephone;
    }

    /**
     * Set email.
     *
     * @param string $email
     *
     * @return User
     */
    public function setEmail($email)
    {
        $this->email = $email;

        return $this;
    }

    /**
     * Get email.
     *
     * @return string
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * Set pPassword.
     *
     * @param string $pPassword
     *
     * @return User
     */
    public function setPPassword($pPassword)
    {
        $this->pPassword = $pPassword;

        return $this;
    }

    /**
     * Get pPassword.
     *
     * @return string
     */
    public function getPPassword()
    {
        return $this->pPassword;
    }

    /**
     * Set permission.
     *
     * @param bool $permission
     *
     * @return User
     */
    public function setPermission($permission)
    {
        $this->permission = $permission;

        return $this;
    }

    /**
     * Get permission.
     *
     * @return bool
     */
    public function getPermission()
    {
        return $this->permission;
    }

    /**
     * Set dtResgister.
     *
     * @param \DateTime $dtResgister
     *
     * @return User
     */
    public function setDtResgister($dtResgister)
    {
        $this->dtResgister = $dtResgister;

        return $this;
    }

    /**
     * Get dtResgister.
     *
     * @return \DateTime
     */
    public function getDtResgister()
    {
        return $this->dtResgister;
    }
}
