<?php

class HomepageController
{
    public function display()
    {
        $recruiter = new Recruiter();
        $recruiters = $recruiter->getAll();

        $job_offer = new JobOffer();
        $job_offers = $job_offer->getLast();
        require('view/homepage/display.php');
    }

}