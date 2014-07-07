<?php

	class Error_404 extends CI_Controller
	{

		public function index()
		{	
			/*Load the css and js data path*/
			$data = array(
						'title'=>'Bay watch',
						'res' =>'../res',
				) ;

			
			$this->load->view('404',$data)	;
			
		}

	}