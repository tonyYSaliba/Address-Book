<?php

namespace App\Tests\Entity;

use App\Entity\Contact;
use PHPUnit\Framework\TestCase;
class ContactTest extends TestCase
{
    public function testSetFirstName()
    {
        $contact = new Contact();
        $contact->setFirstName("firstName");
        $contact->setLastName("lastName");
        $contact->setPhoneNumber("+ 961 71 075 191");
        $contact->setPictureUrl("picture/url");
        $contact->setStreetAddress("street address");
        $contact->setZipCode("1234 5678");
        $contact->setCity("city");
        $contact->setCountry("country");
        $contact->setEmailAddress("tony.y.saliba00@gmail.com");
        $contact->setBirthDate(new \DateTime('@'.strtotime('now')));


        $this->assertTrue(  
            $contact->getFirstName()        == "firstName" &&
            $contact->getLastName()         == "lastName" &&
            $contact->getPhoneNumber()      == "+ 961 71 075 191" &&
            $contact->getPictureUrl()       == "picture/url" &&
            $contact->getStreetAddress()    == "street address" &&
            $contact->getZipCode()          == "1234 5678" &&
            $contact->getCity()             == "city" &&
            $contact->getCountry()          == "country" &&
            $contact->getEmailAddress()     == "tony.y.saliba00@gmail.com" &&
            $contact->getBirthDate()        == new \DateTime('@'.strtotime('now'))
            );
    }
    
}
