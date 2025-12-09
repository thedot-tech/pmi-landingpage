<?php if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Webmodel extends CI_Model
{
    // Save Enquiry Data
    public function saveEnquiryData($enquiryType, $fullName, $phoneNumber, $email, $city, $message, $IPaddress, $deviceName)
    {
        $data = array(
            'full_name'      =>   $fullName,
            'phone_number'   =>   $phoneNumber,
            'email'          =>   $email,
            'city'           =>   $city,
            'message'        =>   $message,
            'type'           =>   $enquiryType,
            'ip_address'     =>   $IPaddress,
            'device_name'    =>   $deviceName,
            'created_at'     =>   date('Y-m-d H:i:s')
        );
        $this->db->insert('enquiry_data', $data);
        $this->db->insert_id();
    }
}