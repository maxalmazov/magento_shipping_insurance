<?php

class Itransition_ShippingInsurance_Model_Observer
{
    public function checkoutObserver(Varien_Event_Observer $observer)
    {
        $lol = Mage::helper('core')->isModuleEnabled('Itransition_ShippingInsurance');
        var_dump($lol); die;
    }
}