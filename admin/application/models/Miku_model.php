<?php
class Miku_model extends CI_Model
{

    public function showuser()
    {
        $query = $this->db->get('user');
        return $query->result();
    }
    public function showuserid($uid)
    {
        $query =  $this->db->get_where('user', array('id_user' => $uid));
        return $query->result_array();
    }
    public function adduseract()
    {
        $data = array(
            'username' => $this->input->post('username'),
            'password' => md5($this->input->post('password')),
            'nama' => $this->input->post('nama'),
            'level' => $this->input->post('level')
        );
        $this->db->insert('user', $data);
    }
    public function edituseract()
    {
        $uid = $this->input->post('uid');
        $data = array(
            'nama' => $this->input->post('nama'),
            'level' => $this->input->post('level')
        );
        $this->db->where('id_user', $uid);
        $this->db->update('user', $data);
    }
    public function deleteuseract()
    {
        $sid = $this->input->post('sid');
        $this->db->where('id_user', $sid);
        $this->db->delete('user');
    }
    public function showcategory()
    {
        $query = $this->db->get('category');
        return $query->result();
    }
    public function showcategoryid($uid)
    {
        $query =  $this->db->get_where('category', array('category_id' => $uid));
        return $query->result_array();
    }
    public function addcategoryact()
    {
        $data = array(
            'category' => $this->input->post('category'),
        );
        $this->db->insert('category', $data);
    }
    public function editcategoryact()
    {
        $uid = $this->input->post('uid');
        $data = array(
            'category' => $this->input->post('category'),
        );
        $this->db->where('category_id', $uid);
        $this->db->update('category', $data);
    }
    public function deletecategoryact()
    {
        $sid = $this->input->post('sid');
        $this->db->where('category_id', $sid);
        $this->db->delete('category');
    }
    public function showcontent()
    {
        $this->db->from('content');
        $this->db->join('category', 'content.category_id=category.category_id', 'left');
        return $this->db->get()->result_array();
    }
    public function showcontentid($uid)
    {
        $query =  $this->db->get_where('content', array('content_id' => $uid));
        return $query->result_array();
    }
    public function addcontentact()
    {
        $imgname = date('YmdHis') . '.jpg';
        $config['upload_path'] = "assets/files/content/";
        $config['max_size'] = 500 * 1024;
        $config['overwrite'] = TRUE;
        $config['file_name'] = $imgname;
        $config['allowed_types'] = '*';
        $this->load->library('upload', $config);
        if ($_FILES['photo']['size'] >= 500 * 1024) {
            $this->session->set_flashdata('alert', "<div class='row'><div class='col mt-2'><div class='alert alert-danger' role='alert'>
		Image too big. Should be <500KB.
	  </div></div></div>");
            redirect('content');
        } elseif (!$this->upload->do_upload('photo')) {
            $err = array('error' => $this->upload->display_errors());
        } else {
            $data = array('upload' => $this->upload->data());
        }
        $data = array(
            'category_id' => $this->input->post('category_id'),
            'date' => date("Y-m-d"),
            'title' => $this->input->post('title'),
            'content_details' => $this->input->post('content_details'),
            'image' => $imgname,
            'username' => $this->session->userdata('username')
        );
        $this->db->insert('content', $data);
    }

    public function deletecontentact()
    {
        $sid = $this->input->post('sid');
        $imgdata = $this->db->get_where('content', array('content_id' => $sid))->result_array();
        $imgloc = './assets/files/content/' . $imgdata['0']['image'];
        if (file_exists($imgloc)) {
            unlink($imgloc);
        }
        $this->db->where('content_id', $sid);
        $this->db->delete('content');
    }
    public function editcontentact()
    {
        $uid = $this->input->post('uid');
        $imgname = date('YmdHis') . '.jpg';
        $config['upload_path'] = "assets/files/content/";
        $config['max_size'] = 500 * 1024;
        $config['overwrite'] = TRUE;
        $config['file_name'] = $imgname;
        $config['allowed_types'] = '*';
        $this->load->library('upload', $config);
        if ($_FILES['photo']['size'] != 0) {
            if ($_FILES['photo']['size'] >= 500 * 1024) {
                $this->session->set_flashdata('alert', "<div class='row'><div class='col mt-2'><div class='alert alert-danger' role='alert'>
        Image too big. Should be <500KB.
      </div></div></div>");
                redirect('content');
            } elseif (!$this->upload->do_upload('photo')) {
                $err = array('error' => $this->upload->display_errors());
            } else {
                $data = array('upload' => $this->upload->data());
            }
            $data = array(
                'category_id' => $this->input->post('category_id'),
                'date' => date("Y-m-d"),
                'title' => $this->input->post('title'),
                'content_details' => $this->input->post('content_details'),
                'image' => $imgname,
                'username' => $this->session->userdata('username')
            );
        } else {
            $data = array(
                'category_id' => $this->input->post('category_id'),
                'date' => date("Y-m-d"),
                'title' => $this->input->post('title'),
                'content_details' => $this->input->post('content_details'),
                'username' => $this->session->userdata('username')
            );
        }
        $this->db->where('content_id', $uid);
        $this->db->update('content', $data);
    }

    public function showcarousel()
    {
        $query = $this->db->get('carousel');
        return $query->result();
    }

    public function addcarouselact()
    {
        $imgname = date('YmdHis') . '.jpg';
        $config['upload_path'] = "assets/files/carousel/";
        $config['max_size'] = 500 * 1024;
        $config['overwrite'] = TRUE;
        $config['file_name'] = $imgname;
        $config['allowed_types'] = '*';
        $this->load->library('upload', $config);
        if ($_FILES['photo']['size'] >= 500 * 1024) {
            $this->session->set_flashdata('alert', "<div class='row'><div class='col mt-2'><div class='alert alert-danger' role='alert'>
		Image too big. Should be <500KB.
	  </div></div></div>");
            redirect('carousel');
        } elseif (!$this->upload->do_upload('photo')) {
            $err = array('error' => $this->upload->display_errors());
        } else {
            $data = array('upload' => $this->upload->data());
        }
        $data = array(
            'title' => $this->input->post('title'),
            'image' => $imgname,
        );
        $this->db->insert('carousel', $data);
    }
    public function deletecarouselact()
    {
        $sid = $this->input->post('sid');
        $imgdata = $this->db->get_where('carousel', array('carousel_id' => $sid))->result_array();
        $imgloc = './assets/files/carousel/' . $imgdata['0']['image'];
        if (file_exists($imgloc)) {
            unlink($imgloc);
        }
        $this->db->where('carousel_id', $sid);
        $this->db->delete('carousel');
    }
    public function showconfigid()
    {
        $query =  $this->db->get_where('configtab', array('id' => '1'));
        return $query->result_array();
    }
    public function editconfigact()
    {
        $data = array(
            'website_title' => $this->input->post('website_title'),
            'website_profile' => $this->input->post('website_profile'),
            'instagram' => $this->input->post('instagram'),
            'facebook' => $this->input->post('facebook'),
            'tiktok' => $this->input->post('tiktok'),
            'address' => $this->input->post('address'),
            'email' => $this->input->post('email'),
        );
        $this->db->where('id', '1');
        $this->db->update('configtab', $data);
    }
    public function showgallery()
    {
        $query = $this->db->get('gallery');
        return $query->result();
    }
    public function addgalleryact()
    {
        $imgname = date('YmdHis') . '.jpg';
        $config['upload_path'] = "assets/files/gallery/";
        $config['max_size'] = 500 * 1024;
        $config['overwrite'] = TRUE;
        $config['file_name'] = $imgname;
        $config['allowed_types'] = '*';
        $this->load->library('upload', $config);
        if ($_FILES['photo']['size'] >= 500 * 1024) {
            $this->session->set_flashdata('alert', "<div class='row'><div class='col mt-2'><div class='alert alert-danger' role='alert'>
		Image too big. Should be <500KB.
	  </div></div></div>");
            redirect('gallery');
        } elseif (!$this->upload->do_upload('photo')) {
            $err = array('error' => $this->upload->display_errors());
        } else {
            $data = array('upload' => $this->upload->data());
        }
        $data = array(
            'gallery_name' => $this->input->post('title'),
            'image' => $imgname,
        );
        $this->db->insert('gallery', $data);
    }
    public function deletegalleryact()
    {
        $sid = $this->input->post('sid');
        $imgdata = $this->db->get_where('gallery', array('id' => $sid))->result_array();
        $imgloc = './assets/files/gallery/' . $imgdata['0']['image'];
        if (file_exists($imgloc)) {
            unlink($imgloc);
        }
        $this->db->where('id', $sid);
        $this->db->delete('gallery');
    }
}
