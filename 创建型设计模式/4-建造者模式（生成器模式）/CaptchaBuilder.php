<?php
require_once 'Captcha.php';

class CaptchaBuilder extends Builder {

    private $captcha;

    public function __construct()
    {
        $this->captcha = new Captcha();
    }

    public function createBg() {
        $this->captcha->createBg();
    }

    public  function getCode() {
        $this->captcha->getCode();
    }
    public  function setCode() {
        $this->captcha->setCode();
    }
    public  function setDot(){
        $this->captcha->setDot();
    }
    public  function setCurve(){
        $this->captcha->setCurve();
    }

    public function create()
    {
        return $this->captcha;
    }


}