<?php


namespace App\Services\Business;


use App\Models\AssessmentModel;



class SecurityService
{


    public function compare(AssessmentModel $AM)
    {
        // compare function that get the AssessmentModel values and see if have the string as "CST=-256" for each of the inputs
        // if yes, return false; if not, return true
        if ($AM->getUsername() == "CST-256"
            && $AM->getPassword() == "CST-256"
            && $AM->getEmail() == "CST-256"
            && $AM->getAge() == "CST-256")
        {
            return true;}
        {return false;}


    }
}
