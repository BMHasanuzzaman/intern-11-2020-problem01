<?php
	/**
	*
	*/
	class Sample extends CI_Model
	{
		function __construct()
		{
			parent::__construct();
		}

		function checkModel() {
      return "This is working";
		}
	}
