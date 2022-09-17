<?php

class Director{

	public function __construct($builder){
		$builder->createBg();
        $builder->getCode();
        $builder->setCode();
        $builder->setDot();
        $builder->setCurve();
	}

}

