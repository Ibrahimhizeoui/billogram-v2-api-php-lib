<?php
declare(strict_types=1);

namespace tests\Api;


use Billogram\Api\Customer;
use Billogram\ApiClient;
use Billogram\Model\Customer\Customer as Model;
use Billogram\Model\Customer\CustomerContact;
use Billogram\Model\Customer\CustomerBillingAddress;
use Billogram\Model\Customer\CustomerDeliveryAddress;
use Http\Client\HttpClient;
use Http\Discovery\HttpClientDiscovery;
use PHPUnit\Framework\TestCase;

class CostumerTest extends TestCase
{

    public function testPost(){
        $contact = new CustomerContact('ib92','ib92','cvbn7');
        $addressCustomer = new CustomerBillingAddress('ibrahim',true,'12 t centralen','111 40','Stock','Swe');
        $addressDelivery = new CustomerDeliveryAddress('ibrahim','12 t centralen','ibrahim','111 40','Stock','Swe');
        $customer=new Model();
        $customer = $customer->withCustomerNo(1);
        $customer = $customer->withName('Ibrahim');
        $customer = $customer->withNotes('aa');
        $customer = $customer->withOrgNo('cvbn7');
        $customer = $customer->withVatNo('SE556677889901');
        $customer = $customer->withContact($contact);
        $customer = $customer->withAddress($addressCustomer);
        $customer = $customer->withDeliveryAddress($addressDelivery);
        $customer = $customer->withCompanyType('individual');
        $apiClient = ApiClient::create('20561-3vhGtAxH', '4eddc2ab063bdd53dc64836ff3a0c7bc');

        $apiClient->customers()->create($customer);


        self::assertEquals();

    }
    /*public function testUpdate(){}
    public function testFetch(){}
    public function testSearch(){}*/

}