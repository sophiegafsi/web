<?php

class JobOfferController
{

    public function list()
    {
        $job_offer = new JobOffer();
        $job_offers = $job_offer->getFrontAll();
        require(_PROJECT_DIR_.'/view/job_offer/list.php');
    }
    public function view()
    {
        $job_offer = new JobOffer();
        $job_offer = $job_offer->view($_GET['id']);
        if(empty($job_offer)){
            header("Location: index.php?controller=joboffer&action=list");
        }
        require(_PROJECT_DIR_.'/view/job_offer/view.php');
    }

    public function search()
    {
        $search = $_GET['search'];
        $secteur = $_GET['activitySector'];
        $job_offer = new JobOffer();
        $job_offers = $job_offer->search($search, $secteur);

        require(_PROJECT_DIR_.'/view/job_offer/search.php');
    }

}