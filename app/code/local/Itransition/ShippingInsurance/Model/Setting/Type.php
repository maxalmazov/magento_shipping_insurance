<?php
class Itransition_ShippingInsurance_Model_Setting_Type
{
    const  PERCENT = 0;
    const FIXED = 1;

    public function setting()
    {
        return [
            ['value' => self::PERCENT, 'label' => 'Percentage of order'],
            ['value' => self::FIXED, 'label' => 'Fixed']
        ];
    }
}