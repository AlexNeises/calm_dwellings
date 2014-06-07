<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Estimate_Model extends CI_Model
{
	var $id;
    var $firstname;
    var $lastname;
    var $email;
    var $address;
    var $city;
    var $state;
    var $zip;
    var $phone;
    var $description;
    var $time;

    function __construct($id = NULL)
    {
        if(!is_null($id))
        {
            $this->initialize($id);
        }
    }

	function initialize($id)
    {
        $ci = & get_instance();
    	$query = $ci->db->query('SELECT id, firstname, lastname, email, address, city, state, zip, phone, description, time FROM estimates WHERE id = '.$id);

        if ($query->num_rows() != 1)
        {
            throw new Exception('Unexpected error occured');
        }

        $row = $query->row();
        $this->_set_id($id);
        $this->set_firstname($firstname);
        $this->set_lastname($lastname);
        $this->set_email($email);
        $this->set_address($address);
        $this->set_city($city);
        $this->set_state($state);
        $this->set_zip($zip);
        $this->set_phone($phone);
        $this->set_description($description);
        $this->set_time($time);
    }

    static function create($firstname, $lastname, $email, $address, $city, $state, $zip, $phone, $description, $time)
    {
        $est = new Estimate_Model();
        $est->set_firstname($firstname);
        $est->set_lastname($lastname);
        $est->set_email($email);
        $est->set_address($address);
        $est->set_city($city);
        $est->set_state($state);
        $est->set_zip($zip);
        $est->set_phone($phone);
        $est->set_description($description);
        $set->set_time($time);

    	return $set;
    }

    function get_id()
    {
    	return $this->id;
    }

    protected function _set_id($id)
    {
    	$this->id = $id;
    }

    function set_firstname($firstname)
    {
        $this->firstname = $firstname;
    }

    function get_firstname()
    {
        return $this->firstname;
    }

    function set_lastname($lastname)
    {
        $this->lastname = $lastname;
    }

    function get_lastname()
    {
        return $this->lastname;
    }

    function set_email($email)
    {
        $this->email = $email;
    }

    function get_email()
    {
        return $this->email;
    }

    function get_address()
    {
        return $this->address;
    }

    function set_address($address)
    {
        $this->address = $address;
    }

    function get_city()
    {
        return $this->city;
    }

    function set_city($city)
    {
        $this->city = $city;
    }

    function get_state()
    {
        return $this->state;
    }

    function set_state($state)
    {
        $this->state = $state;
    }

    function get_zip()
    {
        return $this->zip;
    }

    function set_zip($zip)
    {
        $this->zip = $zip;
    }

    function get_phone()
    {
        return $this->phone;
    }

    function set_phone($phone)
    {
        $this->phone = $phone;
    }

    function get_description()
    {
        return $this->description;
    }

    function set_description($description)
    {
        $this->description = $description;
    }

    function get_time()
    {
        return $this->time;
    }

    function set_time($time)
    {
        $this->time = $time;
    }

    function save()
    {
    	$data = array(
            'firstname' => $this->get_firstname(),
            'lastname' => $this->get_lastname(),
            'email' => $this->get_email(),
            'address' => $this->get_address(),
            'city' => $this->get_city(),
            'state' => $this->get_state(),
            'zip' => $this->get_zip(),
            'phone' => $this->get_phone(),
            'description' => $this->get_description(),
            'time' => $this->get_time()
    		);

        $ci = & get_instance();

    	if (is_null($this->get_id()))
        {
            $ci->db->insert('estimates', $data); 
            $this->_set_id($ci->db->insert_id());
        }
        else
        {
            $ci->db->where('id', $this->get_id());
            $ci->db->update('estimates', $data);
        }

        return true;
    }
}
?>