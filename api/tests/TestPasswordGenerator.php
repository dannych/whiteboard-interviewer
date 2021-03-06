<?php
require_once 'simpletest/autorun.php';
require_once '../Utils/PasswordGenerator.php';

/**
 * 
 * @author ynamara
 */
class TestPasswordGenerator extends UnitTestCase {
	function testPasswordDefaultLength() {
		for ($i = 0; $i < 100; $i++) {
			$pwd = PasswordGenerator::generatePassword();
			$this->assertEqual(50, strlen($pwd));
		}
		
	}
	
	function testUniqueness() {
		$pwd1 = PasswordGenerator::generatePassword();
		$pwd2 = PasswordGenerator::generatePassword();
		$this->assertNotEqual($pwd1, $pwd2);
	}
}
?>