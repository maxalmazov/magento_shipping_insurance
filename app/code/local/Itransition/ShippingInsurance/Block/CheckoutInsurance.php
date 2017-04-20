<?php
class Itransition_ShippingInsurance_Block_CheckoutInsurance extends Mage_Checkout_Block_Onepage_Abstract
{
    public function getInsuranceValue()
    {
        $value = 10;//Mage::helper('core')->currency($quote->getShippingInsurance(), true, false);

        return $value;
    }
}