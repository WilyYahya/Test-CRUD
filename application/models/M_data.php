<?php

class M_data extends CI_Model{

      function show_orang(){

            $hasil=$this->db->query("SELECT * FROM orang");

            return $hasil;

      }

      function insert(){

      	$add = array(
      		'id' => $this->input->post('id') ,
      		'nama' => $this->input->post('nama') ,
      		'alamat' => $this->input->post('alamat') , );

      	$insert = $this->db->insert('orang',$add);
      	return $insert;
      }

      function delete($id)
      {
            $this->db->delete('orang', array
                  ('id' =>  $id));
      }

      function update($id){

            $q = $this->db->get_where('orang', array("id => $id"));
            if($q->num_rows() == 1)
            {

            }
 else      }

}