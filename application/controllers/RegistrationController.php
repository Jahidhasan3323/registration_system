<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class RegistrationController extends CI_Controller {
	
	public function index()
	{	
		$data['divisions'] = $this->Common->get_data('divisions');
		$data['exams'] = $this->Common->get_data('exams');
		$data['institutes'] = $this->Common->get_data('institutes');
		$data['boards'] = $this->Common->get_data('boards');
		 $this->load->view('frontend/index', $data);
	}

	public function store()
	{
        $photo = $this->file_upload("photo", ["jpg", "jpeg", "gif", "png"], './assets/user');
        $cv = $this->file_upload("cv", ["pdf", "doc", "docx"], "./assets/user/cv");
		//store user basic info
		$user_info = ["name"=> $this->input->post('name'),"email"=> $this->input->post('email'),"division_id"=> $this->input->post('division'),"district_id"=> $this->input->post('district'),"upazila_id"=> $this->input->post('upazila'),"address"=> $this->input->post('address'),"photo"=>$photo, "cv"=>$cv];
		$user = $this->Common->set_data('users', $user_info);
		
		//store user language
		$laguages= $this->input->post('language');
		foreach ($laguages as $laguage) {
			$language_info = ["language"=> $laguage,"user_id"=> $user];
			$this->Common->set_data('user_languages', $language_info);
		}
		

		//store user education info
		$exam_name= $this->input->post('exam_name');
		$i=0;
		foreach ($exam_name as $exam) {

			$education_info = ["exam_name"=> $exam, "istitute"=> $this->input->post('institute_name')[$i],"board"=> $this->input->post('board')[$i],"result"=> $this->input->post('result')[$i], "user_id"=> $user];
			$this->Common->set_data('user_education_qualifications', $education_info);
			$i++;
		}

		//store user training info
		$training_name= $this->input->post('training_name');
		$i=0;
		foreach ($training_name as $exam) {

			$education_info = ["name"=> $exam, "details"=> $this->input->post('training_details')[$i], "user_id"=> $user];
			$this->Common->set_data('user_trainings', $education_info);
			$i++;
		}
        $this->set_confirmation_msg($user,"Data Store in System","Error Occure");
        redirect('/','location');
    }
	
	public function get_district()
	{	
		$table = "districts";
        $index = "division_id";
        $identifier = $this->input->get('id');
        $response = $this->Common->get_data_single_conditional($table, $index, $identifier);
		if ($response) {
			$response = $response->result();
		}
		$response = json_encode($response);
		print_r($response);
        
	}

	public function get_upazila()
	{	
		$table = "upazilas";
        $index = "district_id";
        $identifier = $this->input->get('id');
        $response = $this->Common->get_data_single_conditional($table, $index, $identifier);
		if ($response) {
			$response = $response->result();
		}
		$response = json_encode($response);
		print_r($response);
        
	}


    public function file_upload($name, $mime, $location)
    {

        $faulplay= rand(10000,99999);
        $filename=$faulplay;
        $type = explode('.', $_FILES[$name]["name"]);
        $type = strtolower($type[count($type)-1]);
        $url = $location.'/'.$filename.'.'.$type;
        $file_name=$filename.'.'.$type;
        if(in_array($type, $mime))
            if(is_uploaded_file($_FILES[$name]["tmp_name"]))
                if(move_uploaded_file($_FILES[$name]["tmp_name"],$url))
                    return $file_name;
        return "";
    }

    private function set_confirmation_msg($data,$true_msg,$false_msg){
        $confirm=0;
        if ($data==FALSE) {
            $this->session->set_flashdata('error',$false_msg);


        }
        else
        {
            $this->session->set_flashdata('success',$true_msg);
            $confirm=1;
        }
        return $confirm;
    }

}