<?php

	class Home extends CI_Controller
	{
		public function index()
		{	
			/*Load the css and js data path*/
			$data = array(
						'title'=>'Bay watch',
						'res' =>'../res',
				) ;

			/*this is gonna load the view of home*/
			
			$this->load->view('header',$data) ;
			$this->load->view('home')	;
			$this->load->view('footer',$data)	;

		}


	}