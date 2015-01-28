<?php
App::uses('AppHelper', 'View/Helper');

class MoneyHelper extends AppHelper {

    public $helpers = array('Number');

/**
 * Displays the currency in the smallest format possible
 * e.g. 10.00 becomes $10
 *      9.90 becomes $9.90
 *      100 becomes $100
 *      100.04 becomes $100.04
 * @param  integer $number
 * @param  string  $currency
 * @param  array   $options
 * @return string
 */
    public function small($number = 0, $currency = 'USD', $options = array()) {
        if (!is_numeric($number)) {
            return $number;
        }

        $options['places'] = 0;

        $split = explode('.', $number);

        if (!empty($split[1])) {
            $options['places'] = 2;
        }

        return $this->Number->currency($number, $currency, $options);
    }
}