public function index()
	{
		$data['data_menuweb'] 			   = $this->web_model->get_data_menuweb();
		$this->load->view('web/web_view',$data);
	}
