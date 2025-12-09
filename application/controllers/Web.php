<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class Web extends CI_Controller {
    public function __construct()
    {
        parent::__construct();
    
        $this->output->set_header('Last-Modified:'.gmdate('D, d M Y H:i:s').'GMT');
        $this->output->set_header('Cache-Control: no-store, no-cache, must-revalidate');
        $this->output->set_header('Cache-Control: post-check=0, pre-check=0',false);
        $this->output->set_header('Pragma: no-cache');
        $this->load->library('email');
        $this->load->library('common');
        $this->load->library('user_agent');
        
        error_reporting(E_ALL ^ (E_NOTICE | E_WARNING | E_DEPRECATED));
    }


    public function index()
    {
        $data['metaTitle']      =   "Porosity and Permeability Material Testing Services | PMI";
        $data['metaDesc']       =   "Porosity and Permeability Material Testing Services | PMI";
        $data['metaKeyword']    =   "Porosity and Permeability Material Testing Services | PMI";

        $this->load->view('header', $data);
        $this->load->view('index');
        $this->load->view('footer');
    }

    public function thankyou()
    {
        $data['metaTitle']      =   "Porosity and Permeability Material Testing Services | PMI";
        $data['metaDesc']       =   "Porosity and Permeability Material Testing Services | PMI";
        $data['metaKeyword']    =   "Porosity and Permeability Material Testing Services | PMI";

        $this->load->view('header', $data);
        $this->load->view('thankyou');
        $this->load->view('footer');
    }


    //Enquiry Save Form //
    public function enquiryFormSave()
    {
        $enquiryType     =   $this->input->post('enquiry_type');
        $fullName        =   $this->input->post('full_name');
        $phoneNumber     =   $this->input->post('phone_number');
        $email           =   $this->input->post('email');
        $city            =   $this->input->post('city');
        $message         =   $this->input->post('message');

        if (!empty($_SERVER['HTTP_X_FORWARDED_FOR'])) {
            $ipAddress  =   $_SERVER['HTTP_X_FORWARDED_FOR'];
        } else {
            $ipAddress  =   $_SERVER['REMOTE_ADDR'];
        }

        // $ipAddress       =   "183.82.251.1";
        $apiUrl             =   "http://ip-api.com/php/" . $ipAddress . "?field=";

        $response = file_get_contents($apiUrl);

        if ($response !== false) {
            $ipInfo = unserialize($response);

            if ($ipInfo !== false) {
                if (isset($ipInfo['query'])) {
                    $IPaddress      =   $ipInfo['query'];
                    $deviceName     =   $this->agent->platform();

                    $this->sendEmail($enquiryType, $fullName, $phoneNumber, $email, $city, $message, $IPaddress, $deviceName);
                    $this->webmodel->saveEnquiryData($enquiryType, $fullName, $phoneNumber, $email, $city, $message, $IPaddress, $deviceName);

                    $data["isError"] = FALSE;
                } else {
                    echo "Error: 'query' key is missing in the API response.";
                }
            }
        }

        echo json_encode($data);
        return;
    }
    
    public function sendEmail($enquiryType, $fullName, $phoneNumber, $email, $city, $message, $IPaddress, $deviceName)
    {
        $adminEmail             =   $this->config->item('admin_email');
        $data['enquiryType']    =   $enquiryType;
        $data['fullName']       =   $fullName;
        $data['phoneNumber']    =   $phoneNumber;
        $data['email']          =   $email;
        $data['city']           =   $city;
        $data['message']        =   $message;
        $data['IPaddress']      =   $IPaddress;
        $data['deviceName']     =   $deviceName;

        $subject    = "PMI Enquiry";
        $msg        = $this->load->view('enquiry_email_template',$data, TRUE);
        $this->common->email_data($adminEmail, $subject, $msg);
    }
}