<?php

	class Contact extends CI_Controller
	{
		public function index()
		{
			/*Load the css and js data path*/
			$data = array(
						'title'=>'Bay watch',
						'res' =>'../res',
				) ;
			/*Now load the view*/
			$this->load->view('header',$data)	;
			$this->load->view('contact',$data)	;
			$this->load->view('footer',$data)	;

		}

	}