<?php

require_once "./class-web-dev.php";
require_once "./itf-available-dev.php";

class BackendWebDev extends WebDev implements AvailableDev {
    
    // new static property
    public static string $specialisation = "Backend";
    
    //______________________________________________________________________________________________
    // constructor method
    function __construct(string $name, string $location, bool $english){
        parent::__construct($name, $location, $english); 
    }

    //______________________________________________________________________________________________
    // mew method that overrides a property
    public function setOperatingSystem(string $operatingSystem){
        $this->strOperatingSystem = $operatingSystem;
    }

    public function getOperatingSystem():string{ 
        return $this->strOperatingSystem;
    }

    //______________________________________________________________________________________________
    // override del método heredado (añadiendo la nueva static property)
    public function getAbstPersonalData():string{

        $overridedPersonalData = "
            <h3>- getAbstPersonalData (overrided)</h3>
            Name: $this->strName <br>
            Location: $this->strLocation <br>
            English: $this->boolEnglish <br>
            Specialisation: ". self::$specialisation ." <br>
            Tech Stack: $this->strTechStack <br><hr>
        ";

        return $overridedPersonalData;
    }

    //______________________________________________________________________________________________
    // interface methods
    public function level(int $yearsOfExpirience):string {

        if ($yearsOfExpirience <= 2) {
            $level = "Junior";
        } else if ($yearsOfExpirience > 2 & $yearsOfExpirience < 6) {
            $level = "Mid";
        } else if ($yearsOfExpirience >= 6) {
            $level = "Senior";
        }

        return $level;
    }

    public function workModel(int $officeDays, int $remoteDays):string {

        if ($officeDays === 0) {
            $workModel = "Remote";
        } else if ($remoteDays === 0) {
            $workModel = "In-Office";
        } else if ($officeDays > 0 & $remoteDays > 0) {
            $workModel = "Hybrid";
        } 

        return $workModel;
    }

}
