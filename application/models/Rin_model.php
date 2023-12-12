<?php
class Rin_model extends CI_Model
{

    public function showcarousel()
    {
        $query = $this->db->get('carousel');
        return $query->result();
    }
    public function showcontent()
    {
        $query = $this->db->get('content');
        return $query->result();
    }
    public function showcategory()
    {
        $query = $this->db->get('category');
        return $query->result();
    }
    public function showcontentid($uid)
    {
        $query =  $this->db->get_where('content', array('content_id' => $uid));
        return $query->result_array();
    }
    public function showcategoryid($uid)
    {
        $query =  $this->db->get_where('content', array('category_id' => $uid));
        return $query->result();
    }
    public function showrecentcontent()
    {
        $this->db->order_by('date', 'asc');
        $this->db->limit(5);
        $query = $this->db->get('content');
        return $query->result();
    }
    public function showgallery()
    {
        $query = $this->db->get('gallery');
        return $query->result();
    }
    public function feedbackact()
    {
        $data = array(
            'name' => $this->input->post('name'),
            'feedback' => $this->input->post('feedback')
        );
        $this->db->insert('feedback', $data);
    }
}
