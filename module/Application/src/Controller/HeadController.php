<?php
namespace Application\Controller;

use Application\Service\CategoryManager;
use Application\Service\CurrencyManager;
use Application\Service\OfferManager;
use Doctrine\ORM\EntityManager;
use Zend\Mvc\Controller\AbstractActionController;
use Zend\View\Model\ViewModel;

/**
 * This is the Head controller class of the application.
 * This controller is used for managing posts (adding/editing/viewing/deleting).
 */
class HeadController extends AbstractActionController
{
    /**
     * Entity manager.
     * @var EntityManager
     */
    private $entityManager;

    /**
     * Currency manager.
     * @var CurrencyManager
     */
    private $currencyManager;

    /**
     * Offer manager.
     * @var OfferManager
     */
    private $offerManager;

    /**
     * Category manager.
     * @var CategoryManager
     */
    private $categoryManager;
    
    /**
     * Constructor is used for injecting dependencies into the controller.
     */
    public function __construct($entityManager, $currencyManager, $offerManager, $categoryManager)
    {
        $this->entityManager = $entityManager;
        $this->currencyManager = $currencyManager;
        $this->offerManager = $offerManager;
        $this->categoryManager = $categoryManager;
    }


    /**
     * Fill db from Xml file
     * @return ViewModel
     */
    public function xmlAction()
    {

        $xml_file = 'tmp/import/offer.xml';

//        var_dump($xml_file);

        if(file_exists($xml_file)){
            $xml = simplexml_load_file($xml_file);
        }else{
            throw new \Exception('Not Find Xml file');
        }

//        var_dump($xml);

        $json = json_encode($xml);
        $data = json_decode($json,TRUE);


        $currency = $data['shop']['currencies']['currency'];
//        var_dump($currency);

        foreach ($currency as $cur){
//            var_dump($cur['@attributes']);
            $this->currencyManager->addNewCurrency($cur['@attributes']);
        }


        $category = $data['shop']['categories']['category'];
//        var_dump($category);
        foreach ($category as $cat){
//            var_dump($cat);
            $this->categoryManager->addNewCategory($cat);
        }


        $offer = $data['shop']['offers']['offer'];
//        var_dump($offer);
        foreach ($offer as $of){
//            var_dump($of);
            $this->offerManager->addNewOffer($of);
        }
        return new ViewModel(['data' => $data]);

    }

}
