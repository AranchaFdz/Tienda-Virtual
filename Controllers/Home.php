<?php 

	class Tienda extends Controllers{
		public function __construct()
		{
			parent::__construct();
		}

		public function tienda()
		{
			$data['page_tag'] = "Tienda";
			$data['page_title'] = "Tienda";
			$data['page_name'] = "tienda";
			$this->views->getView($this,"tienda",$data);
		}

	}
?>