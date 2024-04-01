<?php

namespace Test\IssuingBalance;
use \Exception;
use StarkInfra\IssuingBalance;


class TestIssuingBalance
{
    public function get()
    {

        print_r("--debug dessa poar--");
        print_r("foi !!");
        print_r("--end debug dessa poar--");

        $balance = IssuingBalance::get();

        if (is_null($balance->id)) {
            throw new Exception("failed");
        }
    }
}

echo "\n\nIssuingBalance:";

$test = new TestIssuingBalance();

echo "\n\t- get";
$test->get();
echo " - OK";
