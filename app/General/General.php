<?php
/**
 * Created by PhpStorm.
 * User: user
 * Date: 1/6/2020
 * Time: 5:17 PM
 */

namespace App\General;


trait General
{
    public $data = [];

    public function data($key, $value = null)
    {
        return $this->data[$key] = $value;

    }
}