<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

use Symfony\Component\Security\Core\User\UserInterface;

/**
 * @ORM\Entity(repositoryClass="App\Repository\UserRepository")
 */
class User
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
	 * @ORM\Column(type="text", length=255)
	 */
	private $username;
	
	/**
	 * @ORM\Column(type="text", length=255)
	 */
	private $email;
	
	/**
	 * @ORM\Column(type="text", length=255)
	 */
	private $password;
	
	/**
	 * @ORM\Column(type="json_array")
	 */
	private $roles;
	
	
	public function getId()
    {
        return $this->id;
    }

    public function getUsername()
    {
        return $this->username;
    }
    public function setUsername($username)
    {
        $this->username = $username;
    }
	
    public function getEmail()
    {
        return $this->email;
    }
    public function setEmail($email)
    {
        $this->email = $email;
    }
	
    public function getPassword()
    {
        return $this->password;
    }
    public function setPassword($pass)
    {
        $this->password = $pass;
    }
	
    public function getUsername()
    {
        return $this->name;
    }
    public function setUsername($username)
    {
        $this->name = $username;
    }
	
    public function getRole()
    {
        return $this->roles;
    }
    public function setRole($role)
    {
        $this->roles = $role;
    }
	
	public function getSalt()
	{
		return null;
	}
	
	public function addRole($role) {
        $this->roles[] = $role;
    }
    
    public function removeRole($role) {
        $index = array_search($role, $this->roles, true);
        if ($index !== false) {
            array_splice($this->roles, $index, 1);
        }
    }
 
	
}












