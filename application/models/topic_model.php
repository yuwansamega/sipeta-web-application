<?php 

class topic_model extends CI_model{

    public function getAllTopics()
    {
        return $this->db->get('topic_list')->result_array();
    }

    public function getTopics($limit, $start){
        return $this->db->get('topic_list', $limit, $start)->result_array();
    }

    public function countAllTopics(){
        return $this->db->get('topic_list')->num_rows();
    }

    public function searchTopics($keyword, $categories){
        if($keyword && $categories){
            
            $this->db->select('t.id, t.stud_name, t.nim, t.class, t.year, t.title, t.abstract, t.status, spv1.lect_name as spv1_name, spv2.lect_name as spv2_name');
            $this->db->from('topic_list t');
            $this->db->order_by('title', 'ASC');
        
            if($categories == "all"){
                $this->db->like('stud_name', $keyword);
                $this->db->or_like('nim', $keyword);
                $this->db->or_like('class', $keyword);
                $this->db->or_like('year', $keyword);
                $this->db->or_like('title', $keyword);
                $this->db->or_like('abstract', $keyword);
                $this->db->or_like('status', $keyword);
                $this->db->or_like('spv_1', $keyword);
                $this->db->or_like('spv_2', $keyword);
            }
            else if($categories == "supervisor"){
                $this->db->like('spv1.lect_name', $keyword);
                $this->db->or_like('spv2.lect_name', $keyword);
                $this->db->or_like('spv_1', $keyword);
                $this->db->or_like('spv_2', $keyword);
            }
            else{
                $this->db->like($categories, $keyword);
            }
             
        $this->db->join('lecturers_list as spv1', 'spv1.nip=t.spv_1', 'left');
        $this->db->join('lecturers_list as spv2', 'spv2.nip=t.spv_2', 'left');
        return $this->db->get()->result_array();
        }
    }

    public function topicsById($id){
        $this->db->select('t.id, t.stud_name, t.nim, t.class, t.year, t.title, t.abstract, t.status, spv1.lect_name as spv1_name, spv2.lect_name as spv2_name');
        $this->db->from('topic_list t');
        $this->db->join('lecturers_list as spv1', 'spv1.nip=t.spv_1', 'left');
        $this->db->join('lecturers_list as spv2', 'spv2.nip=t.spv_2', 'left');
        $this->db->where('t.id', $id);
        return $this->db->get()->row_array();
    }
}

?>