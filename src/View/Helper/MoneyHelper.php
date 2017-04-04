<?php

namespace App\View\Helper;

use Cake\View\Helper;

/**
 * Description of MoneyHelper
 *
 * @author alex.matos
 */
class MoneyHelper extends Helper {

    public function format($numero) {
        return "R$ " . number_format($numero, 2, ",", ".");
    }

}
