<?php
class I_ReferAndEarn_IndexController extends Mage_Core_Controller_Front_Action{
    public function IndexAction() {
      
	  $this->loadLayout();   
	  $this->getLayout()->getBlock("head")->setTitle($this->__("Titlename"));
	        $breadcrumbs = $this->getLayout()->getBlock("breadcrumbs");
      $breadcrumbs->addCrumb("home", array(
                "label" => $this->__("Home Page"),
                "title" => $this->__("Home Page"),
                "link"  => Mage::getBaseUrl()
		   ));

      $breadcrumbs->addCrumb("titlename", array(
                "label" => $this->__("Titlename"),
                "title" => $this->__("Titlename")
		   ));

      $this->renderLayout(); 
	  
    }

    public function submitFormAction(){
      //return true;
      $postParameters = $this->getRequest()->getParams();
      print_r($postParameters);
      $collection = mage::getModel('referandearn/referandearn')->getCollection();
      $collection->addFieldToFilter( 'referre_email_id', $postParameters['email'] );
      print_r($collection->getData());
      echo json_encode('submitFormAction');
    }
}