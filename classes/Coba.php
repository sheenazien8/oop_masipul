<?php
	/**
	 * summary
	 */
	class Coba
	{
	  public function qodr(Qodr $sheena)
	  {
	  	return $sheena->santri();
	  }

	  public function execRobi()
	  {
	  	return $this->qodr(new Robi);
	  }

	  public function execSheena()
	  {
	  	return $this->qodr(new Sheena);
	  }
	}

?>
