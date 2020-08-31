<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SemploginModel extends Model
{
    public function semp_model_info($se_email,$se_pass)
	{
		$this->db->select('*');
		$this->db->from('shaqaalexirfadleh');
		$this->db->where('se_email',$se_email);
		$this->db->where('se_pass',md5($se_pass));
		$result=$this->db->get();
		$res=$result->row();
		return $res;
	}
	public function semp_model_check($se_email)
	{
		$this->db->select('*');
		$this->db->from('shaqaalexirfadleh');
		$this->db->where('se_email',$se_email);
		$result=$this->db->get();
		$res=$result->row();
		return $res;
	}
}
