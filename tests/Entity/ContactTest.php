<?php

namespace App\Tests\Entity;

use App\Entity\Contact;
use PHPUnit\Framework\TestCase;

class ContactTest extends TestCase
{
    public function testSetFirstName1()
    {
        $contact = new Contact();
        $contact->setFirstName("firstName");
        $this->assertTrue($contact->getFirstName() == "firstName");
    }
    public function testSetLastName1()
    {
        $contact = new Contact();
        $contact->setFirstName("lastName");
        $this->assertTrue($contact->getFirstName() == "lastName");
    }
    
}
