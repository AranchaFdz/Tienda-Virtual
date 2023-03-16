<?php 

	class Home extends Controllers{
		public function __construct()
		{
			parent::__construct();
		}

		public function home()
		{
			$data['page_tag'] = "ZUZU";
			$data['page_title'] = "Página principal";
			$data['page_name'] = "tienda-virtual";
			$this->views->getView($this,"home",$data);
		}

	}
?>