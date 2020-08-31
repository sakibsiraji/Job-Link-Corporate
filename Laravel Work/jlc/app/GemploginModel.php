<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class GemploginModel extends Model
{
    public function gemp_model_info($ge_email,$ge_pass)
	{
		$this->db->select('*');
		$this->db->from('shaqaalahaguud');
		$this->db->where('ge_email',$ge_email);
		$this->db->where('ge_pass',md5($ge_pass));
		$result=$this->db->get();
		$res=$result->row();
		return $res;
	}
	public function gemp_model_check($ge_email)
	{
		$this->db->select('*');
		$this->db->from('shaqaalahaguud');
		$this->db->where('ge_email',$ge_email);
		$result=$this->db->get();
		$res=$result->row();
		return $res;
	}
}
