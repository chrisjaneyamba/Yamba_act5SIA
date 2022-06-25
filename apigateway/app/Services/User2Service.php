<?php
namespace App\Services;
use App\Traits\ConsumesExternalService;
class User2Service{
 use ConsumesExternalService;
 /**
 * The secret to consume the User2 Service
 * @var string
 */
public $secret;
public function __construct()
{
$this->baseUri = config('services.users2.base_uri');
$this->secret = 
config('services.users2.secret');
}
 /**
 * Obtain the full list of Users from User1 Site
 * @return string
 */
 
 public function obtainUsers2()
 {
 return $this->performRequest('GET','/users'); //<— this code will call the GET localhost:8000/users (our site1)//
 }
}