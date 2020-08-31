<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class IempregModel extends Model
{
    protected $table ='shaqaaleeyeshaqsiyeed';
    public $timestamps = false;
    /*public function save_ie_info()
	{
		$data=array();
    $data['i_name']=$this->input->post('i_name', true);
    $data['i_email']=$this->input->post('i_email', true);
    $data['i_dob']=$this->input->post('i_dob', true);
    $data['i_address']=$this->input->post('i_address', true);
    $data['i_cs']=$this->input->post('i_cs', true);
    $data['i_ps']=$this->input->post('i_ps', true);
    $data['i_c']=$this->input->post('i_c', true);
    $data['i_mob']=$this->input->post('i_mob', true);
    $data['i_pass']=md5($this->input->post('i_pass', true));
    $this->db->insert('shaqaaleeyeshaqsiyeed',$data);
	}*/
}
