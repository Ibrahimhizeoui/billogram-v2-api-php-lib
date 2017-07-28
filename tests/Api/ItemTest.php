<?php

declare(strict_types=1);

namespace tests\Api;

use Billogram\ApiClient;
use Billogram\Model\Item\Item as Model;
use Billogram\Model\Item\Bookkeeping;
use PHPUnit\Framework\TestCase;

class ItemTest extends TestCase
{
<<<<<<< HEAD
    /*public function testPost(){
=======
    public function testPost()
    {
>>>>>>> 5c30a1b... The StyleCI update
        //$bookkeeping = new Bookkeeping();
        //$bookkeeping = $bookkeeping->withVatAccount();
        //$bookkeeping = $bookkeeping->withIncomeAccount();
        $item = new Model();
        $item = $item->withTitle('cc');
        $item = $item->withDescription('cc');
        $item = $item->withPrice(12);
        $item = $item->withVat(12);
        $item = $item->withUnit('hour');
        //$item = $item->withBookkeeping($bookkeeping);
        $apiClient = ApiClient::create('20561-3vhGtAxH', '4eddc2ab063bdd53dc64836ff3a0c7bc');
        $apiClient->items()->create($item);
    }*/

<<<<<<< HEAD
    /*public function testUpdate(){
=======
    public function testUpdate()
    {
>>>>>>> 5c30a1b... The StyleCI update
        //$bookkeeping = new Bookkeeping();
        //$bookkeeping = $bookkeeping->withVatAccount();
        //$bookkeeping = $bookkeeping->withIncomeAccount();
        $item = new Model();
        $item = $item->withTitle('cc');
        $item = $item->withDescription('cc');
        $item = $item->withPrice(12);
        $item = $item->withVat(12);
        $item = $item->withUnit('hour');
        //$item = $item->withBookkeeping($bookkeeping);
        $apiClient = ApiClient::create('20561-3vhGtAxH', '4eddc2ab063bdd53dc64836ff3a0c7bc');
        $apiClient->items()->update(1, $item);
    }*/

<<<<<<< HEAD
    public function testFetch(){
        $apiClient = ApiClient::create('20561-3vhGtAxH', '4eddc2ab063bdd53dc64836ff3a0c7bc');
        $custumer=$apiClient->items()->fetch(1,['']);}
/*
    public function testSearch(){
        $apiClient = ApiClient::create('20561-3vhGtAxH', '4eddc2ab063bdd53dc64836ff3a0c7bc');
        $custumers = $apiClient->items()->search();
    }*/
}
=======
    public function testDelete(int $itemNo = 1)
    {
        $item = $this->testFetch(2);
        $apiClient = ApiClient::create('20561-3vhGtAxH', '4eddc2ab063bdd53dc64836ff3a0c7bc');
        $apiClient->items()->delete($itemNo, $item);
    }

    public function testFetch(int $itemNo = 1)
    {
        $apiClient = ApiClient::create('20561-3vhGtAxH', '4eddc2ab063bdd53dc64836ff3a0c7bc');

        return $apiClient->items()->fetch($itemNo, ['']);
    }

    public function testSearch()
    {
        $apiClient = ApiClient::create('20561-3vhGtAxH', '4eddc2ab063bdd53dc64836ff3a0c7bc');
        $items = $apiClient->items()->search(['page' => 1]);
    }
}
>>>>>>> 5c30a1b... The StyleCI update
