<?php
	class userinfo {
		protected $name;
		private $age;

		public function __construct($name, $age) {
			$this->name = $name;
			$this->age = $age;
		}
	}

	class customer extends userinfo {
		
	}