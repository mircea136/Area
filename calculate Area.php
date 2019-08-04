<?php

class Rectangle {

    public $lenght;
    public $width;

    public function getLength(): float {
        return $this->lenght;
    }

    public function setLength(float $lenght): self {
        $this->lenght = $lenght;
        return $this;
    }

    public function getWidth(): float {
        return $this->width;
    }

    public function setWidth(float $width): self {

        $this->width = $width;
        return $this;
    }

    public function __construct(float $length, float $width) {
        $this->setLength($length);
        $this->setWidth($width);
    }

    public function Area(): float {

        return $this->getLength() * $this->getWidth();
    }

    public function Perimeter(): float {
        return $this->getLength() * 2 + $this->getWidth() * 2;
    }

}

class Parallelepiped extends Rectangle {

    public $height;

    public function getHeight(): float {
        return $this->height;
    }

    public function setHeight(float $height): self {
        $this->height = $height;
        return $this;
    }

    public function __construct(float $length, float $width, float $height) {
       $this->setLength($length);
       $this->setWidth($width);
       $this->setHeight($height);
    }

    public function Volume(): float {
        return $this->getHeight() * $this->getLength() * $this->getWidth();
    }

}

$rectangle = new Rectangle(5, 7);
echo $rectangle->Area();
echo "<br/>";
echo $rectangle->Perimeter();

echo "<br/>";

$para = new Parallelepiped(5, 6, 7);
echo $para->Volume();

