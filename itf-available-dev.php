<?php

interface AvailableDev {

    public function level(int $yearsOfExpirience):string; // que devuelva junior, mid o senior.
    public function workModel(int $officeDays, int $remoteDays):string; // que devuelva hybrid, remote o in-office

}
