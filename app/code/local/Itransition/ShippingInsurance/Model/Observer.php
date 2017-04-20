<?php

class Itransition_ShippingInsurance_Model_Observer
{
    public function checkoutObserver(Varien_Event_Observer $observer)
    {
        $quote = $observer->getQuote();
        $address = $quote->getShippingAddress();
        $accepted = Mage::app()->getRequest()->getParam('shippinginsurance_enabled', false);

        if ($accepted) {

        }
    }
}