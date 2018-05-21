<?php
	// class yang nggak di new
	abstract class Komputer
	{
		abstract public function malu($params);

		public function monitor()
		{
			return 'ini monitor';
		}
	}
?>
