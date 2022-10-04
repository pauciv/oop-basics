<?php

require_once "./abs-class-developer.php";

class WebDev extends Developer {

    public string $strOperatingSystem;
    protected string $strKeyboardType;
    protected bool $boolEnglish;

    //______________________________________________________________________________________________
    public function __construct(string $name, string $location, bool $english){
        parent::__construct($name, $location);

        // just the new properties
        $this->boolEnglish = $english;
    }

    //______________________________________________________________________________________________
    public function getAbstPersonalData(){
        echo "<h3>- getAbstPersonalData</h3>";
        // echo  $this->strName . " from " . $this->strLocation . "ENG";

        if ($this->boolEnglish == true) {
            $personalData = $this->strName . " from " . $this->strLocation . " (ENG)";
        } else {
            $personalData = $this->strName . " from " . $this->strLocation;
        }
        return $personalData ."<hr>";
    }

    //______________________________________________________________________________________________
    // $arrTechStack (from abstract superclass)
    public function setAbstTechStack(string $techstack){
        $this->strTechStack = $techstack;
    }

    public function getAbstTechStack(){ // añado posiciones al array en backend
        return $this->strTechStack ."<hr>";
    }

    //______________________________________________________________________________________________
    // $strOperatingSystem & $strKeyboardType (from this class)
    public function setWebDevInfo(string $opSystem, string $keyboardType){
        $this->strOperatingSystem = $opSystem;
        $this->strKeyboardType = $keyboardType;
    }

    public function getWebDevInfo():string{
        $webDevInfo = "
            Operating System: $this->strOperatingSystem <br>
            Keyboard Type: $this->strKeyboardType <br><hr>
        ";
        return $webDevInfo;
    }
    //______________________________________________________________________________________________

    public function __destruct(){
        echo "<br><br>", "destructor method";
    }
    
}


