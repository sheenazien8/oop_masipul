<?php
	/**
	 * summary
	 */
	class Laptop extends Komputer
	{
		// const harus di definisikan didalam method
		public const SHEENA = "sheena muhammad ali zien";

		public $alat = "alat-alat";

  	public function keyboard()
  	{
  		return 'helloword';
  	}

  	public function Komputer()
  	{
  		return $this->monitor();
  	}

  	protected function mouse()
  	{
  		return 'ini mouse';
  	}

  	public function getConst()
  	{
  		return self::SHEENA;
  	}

  	public function malu($malu)
  	{

  	}

	}
