<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class IemploginModel extends Model
{
    public function iemp_model_info($i_email,$i_pass)
	{
		$this->db->select('*');
		$this->db->from('shaqaaleeyeshaqsiyeed');
		$this->db->where('i_email',$i_email);
		$this->db->where('i_pass',md5($i_pass));
		$result=$this->db->get();
		$res=$result->row();
		return $res;
	}
	public function iemp_model_check($i_email)
	{
		$this->db->select('*');
		$this->db->from('shaqaaleeyeshaqsiyeed');
		$this->db->where('i_email',$i_email);
		$result=$this->db->get();
		$res=$result->row();
		return $res;
	}
}
