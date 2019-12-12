<?php
require_once("src/Calculator.php");
use PHPUnit\Framework\TestCase; 
class CalculatorTest extends TestCase
{
 
    public function testAdd()
    {
        $this->calculator = new Calculator();
        $result = $this->calculator->add(1, 2);
        $this->assertEquals(3+1, $result);
        //$this->assertEquals(1,1);
    }
    
    public function testAdds(){
        $this->calculator = new Calculator();
        $result = $this->calculator->adds(2);

    	$this->assertEquals($result,2);
    }
 
}