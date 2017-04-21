<?php
class Itransition_ShippingInsurance_Block_Add_ToOrder extends Mage_Sales_Block_Order_Totals
{
    protected $_code = 'shipping_insurance';

    protected function _initTotals()
    {
        parent::_initTotals();
        $order = $this->getOrder();
        $label = Mage::getStoreConfig('shippinginsurance_setting/shippinginsurance_group/shippinginsurance_label');

        if ($order->getInsuranceShippingMethod()) {
            $costInsurance = $order->getShippingInsurance();
            $this->addTotalBefore(
                new Varien_Object(
                    [
                        'code' => $this->getCode(),
                        'value' => $costInsurance,
                        'base_value' => $costInsurance,
                        'label' => $label
                    ],
                    'grand_total'
                )
            );
        }

        return $this;
    }
}