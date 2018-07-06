<?php
class Cf extends CI_Controller
{
	function __construct(){
		parent::__construct();

	}

	public function index(){
		$data['rule1'] = array(
					'Apakah anda ngebet iPhone?', 
					'Apakah budget anda 3-4 juta?', 
					'Apakah anda butuh penyimpanan 16-32 GB?' 
				);
		$data['rule2'] = array(
					'Apakah garansinya resmi/original?', 
					'Apakah garansi belum habis/belum lama habis?', 
					'Apakah belum lama digunakan?'
				);
		$data['rule3'] = array(
					'Apakah jaringannya lancar?', 
					'Apakah tombol home empuk dan normal?', 
					'Apakah tombol power normal?', 
					'Apakah earphone asli?', 
					'Apakah audio normal?', 
					'Apakah charger berfungsi?'
				);
		$data['content'] = 'main';
		// print_r($data);
		// $data['']
		$this->load->view('main', $data);
	}

	public function proses(){
		$cf_rule1 = 0.7;
		$cf_rule2 = 0.8;
		$cf_rule3 = 1;

		$rule1 = array(
				$this->input->post('rule1_1'),
				$this->input->post('rule1_2'),
				$this->input->post('rule1_3')
		);
		$rule2 = array(
				$this->input->post('rule2_1'),
				$this->input->post('rule2_2'),
				$this->input->post('rule2_3')
		);
		$rule3 = array(
				$this->input->post('rule3_1'),
				$this->input->post('rule3_2'),
				$this->input->post('rule3_3'),
				$this->input->post('rule3_4'),
				$this->input->post('rule3_5'),
				$this->input->post('rule3_6')
		);

		$R1 = min($rule1)*$cf_rule1;
		$R2 = min($rule2)*$cf_rule2;
		$R3 = min($rule3)*$cf_rule3;

		// echo min($rule1);
		// echo $rule1[0];

		$R23 = ($R2+$R3)/(1-min($R2,$R3));

		$data['r1'] = $this->katakata_r1($R1);
		$data['r23'] = $this->katakata_r23($R23);
		$data['r23a'] = $R23;

		$this->load->view('hasil', $data);
	}

	public function katakata_r1($range){
		if($range==1){
			return "iPhone 6 adalah pilihan yang sangat tepat.";
		}elseif ($range < 1 && $range >= 0.7) {
			return "Mestinya iPhone 6 adalah pilihan yang tepat.";
			# code...
		}elseif ($range < 0.7 && $range >= 0.1) {
			return "Mungkin iPhone 6 adalah pilihan yang tepat.";
			# code...
		}elseif ($range == 0) {
			return "iPhone 6 bisa untuk pertimbangan juga.";
			# code...
		}elseif ($range < 0 && $range >= -0.7) {
			return "Mungkin iPhone 6 bukan pilihan yang tepat.";
			# code...
		}elseif ($range < -0.7 && $range >= -0.9) {
			return "Mestinya iPhone 6 bukan pilihan yang tepat.";
			# code...
		}elseif ($range == -1) {
			return "iPhone 6 jelas bukan pilihan yang tepat.";
			# code...
		}
	}

	public function katakata_r23($range){
		if($range==1){
			return "Langsung beli saja, nggak pakai lama.";
		}elseif ($range < 1 && $range >= 0.7) {
			return "Mestinya beli.";
			# code...
		}elseif ($range < 0.7 && $range >= 0.1) {
			return "Mungkin beli.";
			# code...
		}elseif ($range == 0) {
			return "Bisa beli, bisa enggak.";
			# code...
		}elseif ($range < 0 && $range >= -0.7) {
			return "Hati-hati.";
			# code...
		}elseif ($range < -0.7 && $range >= -0.9) {
			return "Mestinya tidak beli.";
			# code...
		}elseif ($range == -1) {
			return "Jangan dibeli.";
			# code...
		}
	}
}