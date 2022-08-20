<?php 
namespace LibPackage;

class Obj {
	public function __construct() {

	}
	public function sayHello(): void {
		$s = __FILE__;
		print("say hello from {$s}\n");
	}
}