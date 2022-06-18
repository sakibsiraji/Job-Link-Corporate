<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class GempregModel extends Model
{
    protected $table ='shaqaalahaguud';
    public $timestamps = false;
    /*public function save_ge_info()
	{
		$data=array();
    $data['ge_name']=$this->input->post('ge_name', true);
    $data['ge_dob']=$this->input->post('ge_dob', true);
    $data['ge_email']=$this->input->post('ge_email', true);
    $data['ge_address']=$this->input->post('ge_address', true);
    $data['ge_cs']=$this->input->post('ge_cs', true);
    $data['ge_ps']=$this->input->post('ge_ps', true);
    $data['ge_c']=$this->input->post('ge_c', true);
    $data['ge_mob']=$this->input->post('ge_mob', true);
    $data['ge_pass']=md5($this->input->post('ge_pass', true));
    $data['geskill_id']=$this->input->post('geskill_id', true);
    $this->db->insert('shaqaalahaguud',$data);
	}*/
}
