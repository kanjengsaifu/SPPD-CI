<?php
/**
* ================= doc ====================
* FILENAME     : MMak.php
* @package     : MMak
* scope        : PUBLIC
* @Created     : 2018-09-27
* @Modified    : 2018-09-27
* @Analysts    : Anggi Ayu Meidamara <meidamara@gmail.com>
* @Author      : Rochmad Widianto <widiantorochmad@gmail.com>
* @copyright   : Copyright (c) 2018
* ================= doc ====================
*/

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class MMak extends CI_Model
{

    public $table = 'ref_mak';
    public $id = 'makId';
    public $order = 'DESC';

    function __construct()
    {
        parent::__construct();
    }

    // get all
    // pake ini aja
    function get_all()
    {
        $this->db->order_by($this->id, $this->order);
        return $this->db->get($this->table)->result();
    }

    // gel all query
    // ini kemarin query tambahan krn ada custom, sekarang gak usah dipake
    // function get_all_query()
    // {
    //     $sql = "SELECT mak.`makId`, mak.`makKode`, mak.`makNama`, sbu.`biayaSbuKode`, sbu.`biayaSbuNama`
    //             FROM ref_mak AS mak, ref_biaya_sbu AS sbu
    //             WHERE mak.`makBiayaSbuId` = sbu.`biayaSbuId`";
    //     return $this->db->query($sql)->result();
    // }

    // get data by id
    function get_by_id($id)
    {
        $this->db->where($this->id, $id);
        return $this->db->get($this->table)->row();
    }
    
    // get total rows
    function total_rows($q = NULL) {
        $this->db->like('makId', $q);
	$this->db->or_like('makKode', $q);
	$this->db->or_like('makNama', $q);
	// $this->db->or_like('makBiayaSbuId', $q);
	$this->db->from($this->table);
        return $this->drb->count_all_results();
    }

    // get data with limit and search
    function get_limit_data($limit, $start = 0, $q = NULL) {
        $this->db->order_by($this->id, $this->order);
        $this->db->like('makId', $q);
	$this->db->or_like('makKode', $q);
	$this->db->or_like('makNama', $q);
	// $this->db->or_like('makBiayaSbuId', $q);
	$this->db->limit($limit, $start);
        return $this->db->get($this->table)->result();
    }

    // insert data
    function insert($data)
    {
        $this->db->insert($this->table, $data);
    }

    // update data
    function update($id, $data)
    {
        $this->db->where($this->id, $id);
        $this->db->update($this->table, $data);
    }

    // delete data
    function delete($id)
    {
        $this->db->where($this->id, $id);
        $this->db->delete($this->table);
    }

}

/* End of file MMak.php */
/* Location: ./application/models/MMak.php */
/* Please DO NOT modify this information : */
/* Generated by Harviacode Codeigniter CRUD Generator 2018-09-21 20:11:01 */
/* http://harviacode.com */