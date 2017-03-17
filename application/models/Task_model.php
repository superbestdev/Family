<?php
class Task_model extends CI_Model {

        public function __construct()
        {
                parent::__construct();
                $this->load->database();
        }

        public function insert_task( $title, $deadline, $user_id, $user_name){

        	$data = array(
                            'title'         => $title,
                            'deadline'      => $deadline, 
                            'created_date'  => date("Y-m-d"),
                            'user_id'       => $user_id,
                            'user_name'     => $user_name,
                            'hbn_id'        => $this->aauth->get_user()->id    
                        );
                $query = $this->db->get_where('tasks', array('title' => $title, 'user_id' => $user_id, 'hbn_id' => $this->aauth->get_user()->id));

                if($query->num_rows() < 1){
                        $this->db->insert('tasks', $data);
                        $insert_id = $this->db->insert_id();
                        return  $insert_id;
                }

        }

        public function update_task($step = 1, $task_id){

        	switch ($step) {
        		case 1:
        			$data = array(
                            'status' => 'complete'
                        );
        			break;
        		case 2:
                   
        			$data = array(
                           
                        );
        			break;
        		
        		default:
        			# code...
        			break;
        	}

        	$result = $this->db->update('tasks', $data, array('id' => $task_id));

            return $result;
        }

        public function get_task($user_id){
            $query = $this->db->get_where('tasks', array('user_id' => $user_id, 'hbn_id' => $this->aauth->get_user()->id));
            return $query->result_array();
        }

        public function get_tasks_by_hbn($hbn_id){
            $query = $this->db->get_where('tasks', array('hbn_id' => $hbn_id));
            return $query->result_array();
        }

        public function delete_task($task_id){
            // $task = $this->db->get_where('tasks', array('id' => $task_id))->row_array();
            // if($task['attachment']){
            //     unlink('files/'.$task['attachment']);
            // }            
            $result = $this->db->delete('tasks', array('id' => $task_id));
            return $result;
        }
    }