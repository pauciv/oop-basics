<?php

abstract class Developer {
    
    public string $strName;
    public string $strLocation;
    public string $strTechStack;

    function __construct(string $name, string $location){

        $this->strName = $name;
        $this->strLocation = $location;
    }

    abstract public function getAbstPersonalData(); 

    abstract public function setAbstTechStack(string $techStack); 
    abstract public function getAbstTechStack(); 
}
