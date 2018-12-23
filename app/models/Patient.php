<?php
/**
 * Created by PhpStorm.
 * User: king
 * Date: 12/23/18
 * Time: 4:06 AM
 */

namespace App\Models;


class Patient extends DB
{
    public function all()
    {
        $sql = "select * from patients";
        $a = $this->loadMoreRows($sql);
        return $a;
    }
}