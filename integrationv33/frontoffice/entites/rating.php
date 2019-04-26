<?php
	
	class rating
	{
		private $rating;
		private $comnt;
	


		function __construct($rating,$comnt){
		$this->rating=$rating;
		$this->comnt=$comnt;
	}
		
public function get_rating()
		{
			return $this->rating;
		}

		public function set_rating($rating)
		{
			$this->rating = $rating;
		}

public function get_comnt()
		{
			return $this->comnt;
		}

		public function set_comnt($comnt)
		{
			$this->comnt = $comnt;
		}



	}
?>