<?php

namespace FormEntityTest\Entity;

/**
 * UserTest entity
 *
 * @author Reginaldo Azevedo Junior <rjuniorbrasilia@gmail.com>
 * @author Johnny Fagundes <fagundesjohnny@gmail.com>
 */
class UserTest {

    /**
     *
     * @var integer
     * 
     * @ORM\Column(name="ID_USER", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idUser;
    
    /**
     *
     * @var string
     * 
     * @ORM\Column(name="NM_USER", type="string", length="15", nullable=false)
     */
    private $nmUser;

    /**
     *
     * @var string
     * @ORM\Column(name="PASSWD", type="string", nullable=false)
     */
    private $passwd;
    
    /**
     *
     * @var \DateTime
     * 
     * @ORM\Column(name="CREATION_DATE", type="date", nullable=false)
     */
    private $creationDate;
    
    /**
     *
     * @var string
     * @ORM\Column(name="STATUS", type="string", length="1", nullable=true)
     */
    private $status;
    
    /**
     *
     * @var float
     * @ORM\Column(name="NUMBER", type="float", nullable=true)
     */
    private $number;

    /**
     * 
     * @return integer
     */
    function getIdUser() {
        return $this->idUser;
    }

    /**
     * 
     * @return string
     */
    function getNmUser() {
        return $this->nmUser;
    }

    /**
     * 
     * @return string
     */
    function getPasswd() {
        return $this->passwd;
    }

    /**
     * 
     * @return \DateTime
     */
    function getCreationDate() {
        return $this->creationDate;
    }

    /**
     * 
     * @return string
     */
    function getStatus() {
        return $this->status;
    }

    /**
     * 
     * @return float
     */
    function getNumber() {
        return $this->number;
    }

    /**
     * 
     * @param integer $idUser
     * @return \UserTest
     */
    function setIdUser($idUser) {
        $this->idUser = $idUser;
        return $this;
    }

    /**
     * 
     * @param string $nmUser
     * @return \UserTest
     */
    function setNmUser($nmUser) {
        $this->nmUser = $nmUser;
        return $this;
    }

    /**
     * 
     * @param string $passwd
     * @return \UserTest
     */
    function setPasswd($passwd) {
        $this->passwd = $passwd;
        return $this;
    }

    /**
     * 
     * @param \DateTime $creationDate
     * @return \UserTest
     */
    function setCreationDate(\DateTime $creationDate) {
        $this->creationDate = $creationDate;
        return $this;
    }
    
    /**
     * 
     * @param string $status
     * @return \UserTest
     */
    function setStatus($status) {
        $this->status = $status;
        return $this;
    }

    /**
     * 
     * @param integer $number
     * @return \UserTest
     */
    function setNumber($number) {
        $this->number = $number;
        return $this;
    }
}
