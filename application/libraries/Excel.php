<?php
/**
 * Created by PhpStorm.
 * User: ITMart-6
 * Date: 6/13/2019
 * Time: 11:17 AM
 */
?>
<?php
if (!defined('BASEPATH')) exit('No direct script access allowed');
/*
 *  =======================================
 *  Author     : Team Tech Arise
 *  License    : Protected
 *  Email      : info@techarise.com
 *
 *  =======================================
 */
require_once APPPATH . "/third_party/PHPExcel.php";

class Excel extends PHPExcel {
    public function __construct() {
        parent::__construct();
    }
}
?>