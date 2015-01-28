<?php
App::uses('Controller', 'Controller');
App::uses('View', 'View');
App::uses('MoneyHelper', 'Money.View/Helper');

class MoneyHelperTest extends CakeTestCase {
    public function setUp() {
    	parent::setUp();
	    $Controller = new Controller();
	    $View = new View($Controller);
	    $this->Money = new MoneyHelper($View);
    }

    public function testSmall() {
    	$result = $this->Money->small(90);
        $this->assertEquals('$90', $result);

        $result = $this->Money->small(90, false);
        $this->assertEquals('90', $result);

        $result = $this->Money->small(90.03, 'GBP');
        $this->assertEquals('&#163;90.03', $result);

        $result = $this->Money->small(1000);
        $this->assertEquals('$1,000', $result);

        $result = $this->Money->small(1);
        $this->assertEquals('$1', $result);

        $result = $this->Money->small(1.84);
        $this->assertEquals('$1.84', $result);

        $result = $this->Money->small(1.8);
        $this->assertEquals('$1.80', $result);

        $result = $this->Money->small('test');
        $this->assertEquals('test', $result);
    }
}