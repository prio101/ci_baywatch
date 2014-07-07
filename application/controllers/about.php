<?php

	class About extends CI_Controller
	{
		public function index()
		{
			/*Load the css and js data path*/
			$data = array(
						'title'=>'Bay watch',
						'res' =>'../res',
				) ;

			/*Here is view*/
			$this->load->view('header',$data)	;
			$this->load->view('about',$data) ;
			$this->load->view('footer',$data)	;

		}


	}

