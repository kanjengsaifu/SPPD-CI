<?php
/**
* ================= doc ====================
* FILENAME     : MPegawai.php
* @package     : MPegawai
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

class MPegawai extends CI_Model
{

    public $table = 'ref_pegawai';
    public $id = 'pegawaiId';
    public $order = 'DESC';

    function __construct()
    {
        parent::__construct();
    }

    // get all
    function get_all()
    {
        $this->db->order_by($this->id, $this->order);
        return $this->db->get($this->table)->result();
    }

    // gel all query
    function get_all_query()
    {
        $sql = "SELECT peg.`pegawaiId`, peg.`pegawaiNip`, peg.`pegawaiNama`, peg.`pegawaiPangkat`, jab.`jabatanKode`, jab.`jabatanNama`,gol.`golonganKode`,gol.`golonganNama`
            FROM
              ref_pegawai AS peg, 
              ref_golongan AS gol, 
              ref_jabatan AS jab 
            WHERE
              peg.`pegawaiGolonganId` = gol.`golonganId` 
              AND peg.`pegawaiJabatanId` =  jab.`jabatanId`";
        return $this->db->query($sql)->result();

    }

    // get data by id
    function get_by_id($id)
    {
        $this->db->where($this->id, $id);
        return $this->db->get($this->table)->row();
    }
    
    // get total rows
    function total_rows($q = NULL) {
        $this->db->like('pegawaiId', $q);
	$this->db->or_like('pegawaiNip', $q);
	$this->db->or_like('pegawaiNama', $q);
	$this->db->or_like('pegawaiPangkat', $q);
	$this->db->or_like('pegawaiJabatanId', $q);
	$this->db->or_like('pegawaiGolonganId', $q);
	$this->db->from($this->table);
        return $this->db->count_all_results();
    }

    // get data with limit and search
    function get_limit_data($limit, $start = 0, $q = NULL) {
        $this->db->order_by($this->id, $this->order);
        $this->db->like('pegawaiId', $q);
	$this->db->or_like('pegawaiNip', $q);
	$this->db->or_like('pegawaiNama', $q);
	$this->db->or_like('pegawaiPangkat', $q);
	$this->db->or_like('pegawaiJabatanId', $q);
	$this->db->or_like('pegawaiGolonganId', $q);
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

/* End of file MPegawai.php */
/* Location: ./application/models/MPegawai.php */
/* Please DO NOT modify this information : */
/* Generated by Harviacode Codeigniter CRUD Generator 2018-09-21 19:18:13 */
/* http://harviacode.com */