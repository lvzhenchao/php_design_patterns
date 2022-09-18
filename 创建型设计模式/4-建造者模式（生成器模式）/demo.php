<?php

//产品类，定义产品各部件
class Product {
    //名称
    public $name;

    //尺寸
    public $size;

    //颜色
    public $color;

    //产品展示
    public function show()
    {
        echo "产品名称：{$this->name} 产品尺寸：{$this->size} 产品颜色：{$this->color}".PHP_EOL;
    }

}

//抽象建造者类，定义产品各部件的抽象方法
abstract class Builder {
    abstract public function name();
    abstract public function size();
    abstract public function color();
    abstract public function getProduct();
}

//具体建造者类A
class ProductBuilderA extends Builder {

    public $product;

    public function __construct()
    {
        $this->product = new Product();
    }

     public function name(){
         $this->product->name = "产品A";
     }

     public function size(){
         $this->product->size = "20";
     }

     public function color(){
         $this->product->color = "白色";
     }

     public function getProduct(){
         return $this->product;
     }
}

//具体建造者产品B
class ProductBuilderB extends Builder {

    public $product;

    public function __construct()
    {
        $this->product = new Product();
    }

    public function name(){
        $this->product->name = "产品B";
    }

    public function size(){
        $this->product->size = "30";
    }

    public function color(){
        $this->product->color = "蓝色";
    }

    public function getProduct(){
        return $this->product;
    }
}

//指挥者
class Director {

    //指挥构造过程
    public function construct(Builder $builder)
    {
        $builder->name();
        $builder->size();
        $builder->color();
        return $builder->getProduct();
    }
}

//客户端调用
$director = new Director();

$prductA = new ProductBuilderA();
$directorA = $director->construct($prductA);
$directorA->show();

$prductB = new ProductBuilderB();
$directorB = $director->construct($prductB);
$directorB->show();
























