<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

class Ford_model extends CI_Model {
    /*
     * Select row from tabel and retun number of deleted rows
     * para 1 - Table name
     * para 2 - Select array
     * para 3 - Where Condition array
     * para 4 - join => array(
     *          [
     *              "table"=>value,
     *              "on" => value
     *          ],
     *          [
     *              "table"=>value,
     *              "on" => value
     *          ]
     * )
     * para 5 - order by
     * para 6 - order => asc , desc
     * para 7 - Limit
     * para 8 - Offset
     * para 9 - or_like => array(
     *              columnname => search,
     *              columnname => search,
     *              columnname => search
     * )
     * 
     * This return the array of result data if no data found return blank array.
     */

    function set_table($table) {
        $this->table = $table;
    }

    public function getData($tablename, $select = '*', $where = false, $join = false, $order_by = false, $order = 'DESC', $limit = false, $offset = false, $or_like = false, $group_by = false) {

        $this->db->select($select)
                ->from($tablename);

        if ($where != FALSE) {
            $this->db->where($where);
        }

        if ($join != false && is_array($join)) {

            foreach ($join as $value) {

                if (array_key_exists("join", $value)) {
                    $this->db->join($value['table'], $value['on'], $value['join']);
                } else {
                    $this->db->join($value['table'], $value['on'], 'left');
                }
            }
        }

        if ($order_by != false) {
            $this->db->order_by($order_by, $order);
        }

        if ($limit != FALSE && $offset == FALSE) {
            $this->db->limit($limit);
        } elseif ($limit != FALSE && $offset != FALSE) {
            $this->db->limit($limit, $offset);
        }
        // 

        if ($or_like != FALSE) {
            $str = "";
            foreach ($or_like as $key => $val) {
                if (strlen($str) == 0)
                    $str .= "(`" . $key . "` LIKE '%" . $val . "%'";
                else
                    $str .= " OR `" . $key . "` LIKE '%" . $val . "%'";
            }
            $str .=')';

            $this->db->where($str);
        }

        if ($group_by != FALSE) {
            $this->db->group_by($group_by);
        }

        $res = $this->db->get();
//        echo $this->db->last_query();

        if ($res->num_rows() > 0) {
            return $res->result_array();
        } else {
            return array();
        }
    }

    /*
     * Count row from tabel and retun number of deleted rows
     * para 1 - Table name
     * para 2 - Select array
     * para 3 - Where Condition array
     * para 4 - join => array(
     *          [
     *              "table"=>value,
     *              "on" => value
     *          ],
     *          [
     *              "table"=>value,
     *              "on" => value
     *          ]
     * )
     * para 5 - order by
     * para 6 - order => asc , desc
     * para 7 - or_like => array(
     *              columnname => search,
     *              columnname => search,
     *              columnname => search
     * )
     * 
     * This return the array of result data if no data found return blank array.
     */

    public function getRowCount($tablename, $select = '*', $where = false, $join = false, $order_by = false, $order = 'desc', $or_like = false) {

        $this->db->select($select)
                ->from($tablename);

        if ($where != FALSE) {
            $this->db->where($where);
        }

        if ($join != false && is_array($join)) {

            foreach ($join as $value) {

                if (array_key_exists("join", $value)) {
                    $this->db->join($value['table'], $value['on'], $value['join']);
                } else {
                    $this->db->join($value['table'], $value['on'], 'left');
                }
            }
        }

        if ($order_by != false) {
            $this->db->order_by($order_by, $order);
        }

        if ($or_like != FALSE) {
            $str = "";
            foreach ($or_like as $key => $val) {
                if (strlen($str) == 0)
                    $str .= "(`" . $key . "` LIKE '%" . $val . "%'";
                else
                    $str .= " OR `" . $key . "` LIKE '%" . $val . "%'";
            }
            $str .=')';

            $this->db->where($str);
        }

        return $this->db->count_all_results();
        ;
    }

    /*
     * Insert row from tabel and retun number of deleted rows
     * para 1 - Table name
     * para 2 - Data to insert
     */

    public function rowInsert($tablename, $data) {

        $query = $this->db->insert($tablename, $data);

        if ($query) {
            $insert_id = $this->db->insert_id();
            return $insert_id;
//            echo $this->db->last_query();
        } else {
            return false;
        }
    }

    /*
     * Insert row from tabel and retun number of deleted rows
     * para 1 - Table name
     * para 2 - Data to insert
     */

    public function rowUpdate($tablename, $data, $where) {

        $query = $this->db->where($where)
                ->update($tablename, $data);
        if ($query) {
            $affected_rows = $this->db->affected_rows();
            return true;
        } else {
            return false;
        }
    }

    /*
     * Delete rows from tabel and retun number of deleted rows
     * para 1 - Table name
     * para 2 - where condition
     */

    public function rowsDelete($tablename, $where) {

        if ($this->db->delete($tablename, $where)) {

            return true;
        } else {
            return false;
        }
    }

    /*
     * Delete rows from tabel and retun number of deleted rows
     * para 1 - Table name
     * para 2 - where condition
     * para 3 - Column name
     */

    public function rowsDeleteWhereIn($tablename, $where, $column_name) {

        $this->db->where_in($column_name, $where);
        if ($this->db->delete($tablename)) {
            return true;
        } else {
            return false;
        }
    }

    public function getWhereInData($tablename, $select, $where, $column_name, $join = false, $condition = False) {

        $this->db->select($select);
        $this->db->from($tablename);

        if ($join != false && is_array($join)) {

            foreach ($join as $value) {
                $this->db->join($value['table'], $value['on'], 'left');
            }
        }
        $this->db->where_in($column_name, $where);
        if ($condition != FALSE && is_array($condition)) {
            $this->db->where($condition);
        }
        $res = $this->db->get();

        if ($res->num_rows() > 0) {
            return $res->result_array();
        } else {
            return array();
        }
    }

    public function admin_data() {
        $this->load->helper('url');
        $uname = $this->input->post('email');
        $password = md5($this->input->post('password'));
        $array = array('username' => $uname, 'password' => $password);
        $this->db->where($array);
        $this->db->select('*');
        $query = $this->db->get('user');

        $row = $query->result();
        return $row;
    }

    function get_all_common_list($count = FALSE, $search_data = array(), $limit = 10, $offset = 0, $order = "", $order_str = 'desc', $is_refrence = false, $or_where = '') {
        if (count($search_data['column']) > 0)
            $this->db->select(join(',', $search_data['column']));
        
           if (!empty($search_data['where'])) {
            $this->db->where($search_data['where']);
        } else {
            //return false;
        }

        if (!empty($search_data['keyword'])) {
            $search_keword = $this->db->escape("%" . $search_data["keyword"] . "%");

            if (!empty($search_data['columns']) && is_array($search_data['columns'])) {
                $sub_str = '';
                foreach ($search_data['columns'] as $key => $value) {
                    $sub_str .= "OR (" . $value . " LIKE " . $search_keword . ") ";
                }
                $sub_str = substr($sub_str, 2);
                $search_str = " ( "
                        . $sub_str
                        . " )";

                $this->db->where($search_str, null, false);
            }
        }

        if (count($search_data['join']) > 0) {
            foreach ($search_data['join'] as $join):
                if (isset($join['join_type']))
                    $new3 = $join['join_type'];
                else if ($search_data['join_type'] != '')
                    $new3 = $search_data['join_type'];
                else
                    $new3 = '';

                $new1 = $join['join_table'];
                $new2 = $join['on_condition'];
                $this->db->join($new1, $new2, $new3);
            endforeach;
        }


        if ($order != '' && $order_str != '') {
            $this->db->order_by($order, $order_str);
        }

        if ($count == true) {
            $this->db->from($this->table);
            $query = $this->db->get();
            return $query->num_rows();
        }

        if ($limit == 'all') {
            
        } else if (!empty($offset) or $offset == 0) {
            $this->db->limit($limit, $offset);
        } else
            $this->db->limit($this->config->item('number_of_rows'), $limit);

        $query = $this->db->get($this->table);
        if ($is_refrence == true)
            return $query;

        return $query->result_array();
    }

}
