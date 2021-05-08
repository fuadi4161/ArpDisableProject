<?php

namespace App\Http\Controllers\ARP;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\CompOS\Talker\Talker;
use compOS\Util\SentenceUtil;

class ArpController extends Controller
{
    private $talker;

    function __construct(Talker $talker) {
        $this->talker = $talker;
    }


    public function getAll() {
        $sentence = new SentenceUtil();
        $sentence->fromCommand("/ip/arp/getall");
        $this->talker->send($sentence);
        $rs = $this->talker->getResult();
        $i = 0;
        if ($i < $rs->size()) {
            return $rs->getResultArray();
        } else {
            return "No Ip ARP To Set, Please Your Add Ip ARP";
        }
    }

}
