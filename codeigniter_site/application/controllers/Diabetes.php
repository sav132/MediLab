
<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Diabetes extends CI_Controller {

	public function register(){

		if($this->input->post()){


			$Age = $this->input->post("age");
			$sex = $this->input->post("sex");
			if($sex == "female")
			{
				$Pregnancies = $this->input->post("pregnancy");
			}
			else
			{
				$Pregnancies = 0;
			}
			$Glucose = $this->input->post("glucose_lv");
			$BloodPressure = $this->input->post("blood_pressure");
			$SkinThickness = $this->input->post("skin_thickness");
			$Insulin = $this->input->post("insulin");
			$weight = $this->input->post("weight");


			$height = $this->input->post("height");
			$height = $height/100;

			$BMI = ($weight/$height);
			$BMI = $BMI/$height;
			$DiabetesPedigreeFunction = $this->input->post("dpf");

			$arr = array(

				'Pregnancies'=>$Pregnancies,
				'Glucose'=>$Glucose,
				'BloodPressure'=>$BloodPressure,
				'SkinThickness'=>$SkinThickness,
				'Insulin'=>$Insulin,
				'BMI'=>$BMI,
				'DiabetesPedigreeFunction'=>$DiabetesPedigreeFunction,
				'Age'=>$Age,
				);
			$json = json_encode($arr);
			$file = "/root/Desktop/hack/Diabetes/jsonfile.json";
			file_put_contents($file, $json);
			$pred = exec('python /root/Desktop/hack/Diabetes/Test.py');
			$value = 100*$pred;
			$data = array(
				'value'=>$value,
			);
			$this->load->view('output', $data);
		}
	}
}
