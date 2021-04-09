<?php


class Borrower {
    //Attributes
    private $ldap/* primary key */, $firstName;
    
    public function __construct($ldap, $firstName) {
        $this->ldap = $ldap;
        $this->firstName =$firstName;
    }
    
    public function getLdap(){
        return $ldap;
    }
    
    public function getFisrtName(){
        return $firstName;
    }
    
    public function setLdap($ldap){
        $this->ldap = $ldap;
    }
    
    public function setFirstName($firstName){
        $this->firstName = $firstName;
    }
    
    public function array(){
        $borrowerArray = array(
            'ldap' => $this->ldap,
            'firstName' => $this->firstName
        );
    }
    
    
}
