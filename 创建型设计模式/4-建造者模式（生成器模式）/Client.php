<?php

require_once  'CaptchaBuilder.php';

class Client{
	
	public static function run($config){
		$builder = new CaptchaBuilder($config);
		
		$director = new Director($builder);

		$captcha = $builder->create();

		$captcha->outImg();
	}

}

$config = ['imgX'=>60,'imgY'=>30,'codeNum'=>4];

Client::run($config);
