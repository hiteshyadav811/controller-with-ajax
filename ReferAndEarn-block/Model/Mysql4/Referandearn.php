<?php
class I_ReferAndEarn_Model_Mysql4_Referandearn extends Mage_Core_Model_Mysql4_Abstract
{
    protected function _construct()
    {
        $this->_init("referandearn/referandearn", "refer_earn_id");
    }
}