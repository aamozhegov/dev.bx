<?php

interface IFigure
{
	public function draw($shape = ""): void;
}

class Figure implements IFigure
{
	public $shape;
	public $color;

	public function __construct($shape = "")
	{
		if($shape)
			$this->shape = $shape;
	}

	public function setShape($shape)
	{
		$this->shape = "";
		$this->shape = "Shape " . $shape;
	}

	public function draw($shape = ""): void
	{
		echo "$this->shape\n";
	}
}

abstract class FigureDecorator implements IFigure
{
	/** @var IFigure  */
	protected $figure;
	public $shape;

	public function __construct(IFigure $figure)
	{
		$this->figure = $figure;
	}

	public function setShape($shape)
	{
		$this->shape = "";
		$this->shape = $shape;
	}

	public function draw($shape = ""): void
	{
		$this->figure->setShape($shape);
		$this->figure->draw();
	}
}

class Square extends FigureDecorator
{
	public $shape = "Square";

	public function draw($shape = ""): void
	{
		parent::draw($this->shape);
	}
}

class Circle extends FigureDecorator
{
	public $shape = "Circle";

	public function draw($shape = ""): void
	{
		parent::draw($this->shape);
	}
}

class coloredFigure
{
	/** @var IFigure  */
	protected $figure;
	public $shape;

	public function __construct(IFigure $figure)
	{
		$this->figure = $figure;
	}

	public function colorFigure(string $color): void
	{
		echo $color . " colored Shape " . $this->figure->shape;
	}
}


$figure = new Figure("Circle");
$figure = new Square($figure);
$figure = new Circle($figure);

$figure->draw();

$coloredFigure = new coloredFigure($figure);
$coloredFigure->colorFigure("Red");