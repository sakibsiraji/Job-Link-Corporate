<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SempregModel extends Model
{
    protected $table ='shaqaalexirfadleh';
    public $timestamps = false;
    /*public function save_se_info()
	{
		$data=array();
    $data['se_name']=$this->input->post('se_name', true);
    $data['se_dob']=$this->input->post('se_dob', true);
    $data['se_email']=$this->input->post('se_email', true);
    $data['se_address']=$this->input->post('se_address', true);
    $data['se_cs']=$this->input->post('se_cs', true);
    $data['se_ps']=$this->input->post('se_ps', true);
    $data['se_c']=$this->input->post('se_c', true);
    $data['se_mob']=$this->input->post('se_mob', true);
    $data['se_pass']=md5($this->input->post('se_pass', true));
    $data['seskill_id']=$this->input->post('seskill_id', true);
    $this->db->insert('shaqaalexirfadleh',$data);
	}*/
}
