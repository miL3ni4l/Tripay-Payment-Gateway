<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    protected $tripay;
    public function _construct(){
        $this->tripay = new Main(
            'DEV-6hU8hUhnwLPyNhczc6I1C85ySsDWgjsZYjahHJvj',
            't8huu-XiCTx-Vna4F-O5rCb-byuzp',
            'T10679',
            'sandbox' // fill for sandbox mode, leave blank if in production mode
        );
    }
}
