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
			/*Load the library*/
			$this->load->library('form_validation') ;

			/*check data*/
			$this->form_validation->set_rules('humanName',' Name ','required') ;
			$this->form_validation->set_rules('question',' Question ','required') ;
			
			$this->form_validation->set_rules('email',' E-mail ','required') ;
			


			/*check bool */
			if( $this->form_validation->run() == FALSE )
			{
		
			/*Now load the view*/
			$this->load->view('header',$data)	;
			$this->load->view('contact',$data)	;
			$this->load->view('footer',$data)	;
				
			}
			else
			{
				echo 'Okay' ;
			}

			
			

		}

	}