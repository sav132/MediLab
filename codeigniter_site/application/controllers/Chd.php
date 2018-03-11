
<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Chd extends CI_Controller {

	public function register(){

		if($this->input->post()){


			$Age = $this->input->post("age");
			$Glucose = $this->input->post("glucose_lv");
			$BloodPressure = $this->input->post("blood_pressure");
			$SkinThickness = $this->input->post("skin_thickness");
			$Insulin = $this->input->post("insulin");
			$weight = $this->input->post("weight");
			$height = $this->input->post("height");
			$Pregnancies = $this->input->post("pregnancy");
			$DiabetesPedigreeFunction = $this->input->post("dpf");


			$arr = array(

				'AnnualPerCapitaIncome'=>$Age,
				'MaternalDeliveryAge'=>$Glucose,
				'FamilyHistory'=>$BloodPressure,
				'MaternalPreviousIllnessHistory'=>$SkinThickness,
				'NutritionAndFolicAcidSupplementation'=>$Insulin,
				'MaternalIllness'=>$weight,
				'MedicationUse'=>$height,
				'EnvironmentalExposuresOfRiskFactors'=>$Pregnancies,
				'UnhealthyLifestyle'=>$DiabetesPedigreeFunction,
				);

			$json = json_encode($arr);
			$file = "/root/Desktop/hack/CHD/New_Model/jsonfile.json";
			file_put_contents($file, $json);
			$pred = exec('python /root/Desktop/hack/CHD/New_Model/SVM.py');
			
			if($pred == 0) {
				$value = "not be";
			} else {
				$value = "be";
			}

			$data = array(
				'value'=>$value,
			);
			$this->load->view('output_chd', $data);
		}
	}
}
