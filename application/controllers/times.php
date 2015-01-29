<?php
class Times extends CI_controller
{
	
	public function __construct()
	{
		parent::__construct();
		$this->output->enable_profiler(TRUE);
	}

	public function main()
	{
		// echo "hello";
		
		$this->session->set_userdata('day_time', date('F j, Y g:i:a', time()));
		$day_time = $this->session->userdata('day_time');

		$this->load->view('index', array('day_time' => $this->session->userdata('day_time')));
	}


}
?>