<?php

namespace Opencart\Catalog\Model\Extension\paywithiyzico\Total;

use Opencart\System\Engine\Model;

class PaywithiyzicoFee extends Model
{
    public function confirm($order_info, $order_total)
    {
        return true;
    }

}
