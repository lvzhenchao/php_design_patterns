<?php

class Captcha{
	
	private $img;  //存储图片资源
	private $imgX;//验证码的宽
	private $imgY; //验证码的高
	private $codeNum;  //验证码的个数
	private $code;     //存验证码
	//验证码的字符串
	private $str='abcdefghjkmnpqrstuvwxyz123456789ABCDEFGHJKMNPQRSTUVWXYZ';

	public function __construct($config){
        $this->imgX=$config['imgX'];
        $this->imgY=$config['imgY'];
        $this->codeNum=$config['codeNum'];

    }

	public function printImg(){
		$this->createBg();
		$this->getCode();
		$this->setCode();
		$this->setDot();
		$this->setCurve();
		$this->outImg();
	
	}
	//画背景图片
	public function createBg(){
		$this->img = imagecreate($this->imgX,$this->imgY);
		//给背景图片加颜色  rgb  0-255的数字就是颜色。rand()；
		imagecolorallocate($this->img,243,251,254);
	}

	//获取验证码字符串
	public function  getCode(){
		for($i=0;$i<$this->codeNum;$i++){
			$key = rand(0,(strlen($this->str)-1));
			$this->code.=$this->str[$key];
		}
		$this->setSession();
	} 
	//把验证码写到背景图片上
	public  function setCode(){
		for($i=0;$i<$this->codeNum;$i++){
			$code_color = imagecolorallocate($this->img,rand(0,255),rand(0,255),rand(0,255));
			//随机获取字体的大小 系统支持的是1-5的字体
			$font_size = rand(3,5);
			//获取字体的高度
			$font_height = imagefontheight($font_size);
			$x = ($this->imgX/$this->codeNum)*$i+5;
			$y =  rand(1,40-$font_height-3);
			//把字符写到图片上去
			imagechar ($this->img,$font_size,$x,$y,$this->code[$i],$code_color);
		}
	}

	//给验证按添加点的干扰元素

	public function setDot(){
		for($i=0;$i<=30;$i++){
			$dot_color = imagecolorallocate($this->img,rand(0,255),rand(0,255),rand(0,255));
			imagesetpixel($this->img,rand(1,$this->imgX),rand(1,$this->imgY),$dot_color);
		}
	}
	////给背景图片生成线干扰元素
	public function setCurve(){
		
		for($i=0;$i<=3;$i++){
			$arc_color = imagecolorallocate($this->img,rand(0,255),rand(0,255),rand(0,255));
			//imagearc() 以 cx，cy（图像左上角为 0, 0）为中心在 image 所代表的图像中画一个椭圆弧。w 和 h 分别指定了椭圆的宽度和高度，起始和结束点以 s 和 e 参数以角度指定。0°位于三点钟位置，以顺时针方向绘画。
			imagearc($this->img,rand(1,$this->imgX),rand(1,$this->imgY),100,80,$this->imgX,$this->imgY,$arc_color);
		}
	}
	//输出验证码图片
	public function outImg(){
		ob_clean();
		//要给他一个输出的标识
		header('Content-type:image/jpeg');
		//把资源图片输出
		imagejpeg($this->img);
	}
	//把验证按存到session
	private  function setSession(){
		session_start();
		$_SESSION['code'] = strtolower($this->code);
	}
}

$captcha = new Captcha(['imgX'=>60,'imgY'=>30,'codeNum'=>4]);
$captcha->printImg();
