<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Index_Model extends CI_Model {

    private $table;
    public $primary_key;
    public $data;

    function __construct() {
        parent::__construct();
        $this->table = substr(strtolower(get_class($this)), 0, -6);
        $this->primary_key = array();
        $this->data = array();
    }

    private function reset() {
        $this->primary_key = array();
        $this->data = array();
    }

    private function reset_pk() {
        $this->primary_key = array();
    }

    private function reset_data() {
        $this->data = array();
    }

    public function get_max_value($field, $lang_id = 1) {
        $this->db->select_max($field);
        $this->db->where('lang_id', $lang_id);
        $query = $this->db->get($this->table);
        $row = $query->row();
        return $row->$field;
    }

    public function get_row() {
        $this->db->where($this->primary_key);
        $query = $this->db->get($this->table);
        $row = $query->row();
        $this->reset_pk();
        return $row;
    }
    public function get_row_data($table) {
        $this->db->where($this->primary_key);
        $query = $this->db->get($table);
        $row = $query->row();
        $this->reset_pk();
        return $row;
    }
    public function view_data($table) {
        $this->db->where($this->primary_key);
        if($table == 'events'){
           $this->db->limit(6);
            $this->db->order_by('start_date_time','asc');
            $this->db->where('start_date_time >=',date('Y-m-d'));
        }
         if($table == 'banners'){
        $this->db->order_by('display_order','asc');
        }
         if($table == 'gallery'){
        $this->db->order_by('gallery_date','desc');
        }
        $query = $this->db->get($table);
        $row = $query->result();
        $this->reset_pk();
        return $row;
    }

    public function view($lang_id = 1) {
        $records = array();
        $this->db->where('lang_id', $lang_id);
        $query = $this->db->select('*')->from($this->table)->get();
        $tmp_records = $query->result(); //return $query->result();
        foreach ($tmp_records as $tmp_record) {
            $records[strtoupper($tmp_record->setting_key)] = $tmp_record->setting_value;
        }
        return (object) $records;
    }

    public function insert($table) {
        $this->db->insert($table, $this->data);
        $this->reset_data();
        return true;
    }

    public function update() {
        $this->db->update($this->table, $this->data, $this->primary_key);
        $this->reset();
        return true;
    }

    public function delete() {
        $this->db->delete($this->table, $this->primary_key);
        $this->reset_pk();
        return true;
    }
    public function gallery_data($table){
          
       $this->db->select('*');
       $this->db->limit(2);
       $this->db->order_by('created_date','asc');
       $this->db->or_where('category_name','Daily Darshan '); 
       $this->db->or_where('category_name','Festival Gallery'); 
       $this->db->where('status_ind',1);
        $query = $this->db->get($table);
        $row = $query->result();
        $this->reset_pk();
        return $row;
    }

    public function view_sevas($table) {
        $this->db->where($this->primary_key);
        $this->db->limit('3');
        $this->db->order_by('celebration_date','asc');
        //    $this->db->where('celebration_date >=',date('Y-m-d'));
           $this->db->where('status_ind',1);
           $this->db->where('featured_festival',1);
        $query = $this->db->get($table);
        $row = $query->result();
        $this->reset_pk();
        return $row;
    }
}