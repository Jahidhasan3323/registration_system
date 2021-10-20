<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Registration extends CI_Model
{

    public function get_register_users($table, $request_data)
    {
        if (isset($request_data['division']) && !empty($request_data['division'])){
            $this->db->where('users.division_id',$request_data['division']);
        }
        if (isset($request_data['district']) && !empty($request_data['district'])){
            $this->db->where('users.district_id',$request_data['district']);
        }
        if (isset($request_data['upazila']) && !empty($request_data['upazila'])){
            $this->db->where('users.upazila_id',$request_data['upazila']);
        }
        $this->db->join('divisions', $table.'.division_id = divisions.id');
        $this->db->join('districts', $table.'.district_id = districts.id');
        $this->db->join('upazilas', $table.'.upazila_id = upazilas.id');
        $this->db->select(['users.*', 'divisions.name as division_name','districts.name as district_name','upazilas.name as upazila_name', ]);
        $this->db->order_by('users.id','DESC');
        $query = $this->db->get($table);
        if ($this->db->affected_rows() > 0) {
            return $query;
        } else {
            return FALSE;
        }
    }
}
