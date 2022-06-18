<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CempregModel extends Model
{
    protected $table ='looshaqeeyahashirkadda';
    public $timestamps = false;
    /*public function save_ce_info()
	{
		$data=array();
    $data['c_name']=$this->input->post('c_name', true);
    $data['c_email']=$this->input->post('c_email', true);
    $data['c_address']=$this->input->post('c_address', true);
    $data['c_cs']=$this->input->post('c_cs', true);
    $data['c_ps']=$this->input->post('c_ps', true);
    $data['c_c']=$this->input->post('c_c', true);
    $data['c_mob']=$this->input->post('c_mob', true);
    $data['c_pass']=md5($this->input->post('c_pass', true));
    $this->db->insert('looshaqeeyahashirkadda',$data);
	}*/
}
