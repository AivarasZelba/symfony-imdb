<?php

namespace App\Service;

class IMDBService
{
    /**
     * @var OMDbAPI
     */
    private $api;

    /**
     * IMDBService constructor.
     * @param OMDbAPI $api
     */
    public function __construct(OMDbAPI $api) {
        $this->api = $api;
    }

    /**
     * @param $keyword
     * @return array
     */
    public function findShow($keyword):array {
        $search = $this->api->search($keyword);

        dump($search);
        die;

        return $search;
    }
}