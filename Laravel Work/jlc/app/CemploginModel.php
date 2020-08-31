<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CemploginModel extends Model
{
    public function cemp_model_info($c_email,$c_pass)
	{
		$this->db->select('*');
		$this->db->from('looshaqeeyahashirkadda');
		$this->db->where('c_email',$c_email);
		$this->db->where('c_pass',md5($c_pass));
		$result=$this->db->get();
		$res=$result->row();
		return $res;
	}
	public function cemp_model_check($c_email)
	{
		$this->db->select('*');
		$this->db->from('looshaqeeyahashirkadda');
		$this->db->where('c_email',$c_email);
		$result=$this->db->get();
		$res=$result->row();
		return $res;
	}
}
