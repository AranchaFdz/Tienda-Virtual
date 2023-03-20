<?php 

	class Contacto extends Controllers{
		public function __construct()
		{
			parent::__construct();
		}

		public function contacto()
		{
			$data['page_tag'] = "Contacto";
			$data['page_title'] = "Contacto";
			$data['page_name'] = "tienda-virtual";
			$this->views->getView($this,"contacto",$data);
		}  

	}
?> 