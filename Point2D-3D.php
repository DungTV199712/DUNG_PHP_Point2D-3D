<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<?php
class Point2D
{
    public $x;
    public $y;
    public function __construct($x,$y)
    {
        $this->x = $x;
        $this->y = $y;
    }
    public function getX()
    {
        return $this->x;
    }
    public function getY()
    {
        return $this->y;
    }
    public function getXY()
    {
       print_r([$this->x,$this->y]);
    }
}
class Point3D extends Point2D
{
    public $z;
    public function __construct($x,$y,$z)
    {
        parent::__construct($x,$y);
        $this->z = $z;
    }
    public function getZ(){
        return $this->z;
    }
    public function getXYZ()
    {
        print_r([$this->x,$this->y,$this->z]);
    }
}
$point2d = new Point2D(3,4);
$point2d->getXY();
$point3d = new Point3D(3,6,9);
$point3d->getXYZ();
?>
</body>
</html>