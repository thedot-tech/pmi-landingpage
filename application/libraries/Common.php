<?php
class Common {

    public function __construct() {
        $this->CI =& get_instance();
        $this->CI->load->library('email');
    }
    
    public function email_data($email, $subject, $msg){
        if ($email) {
            $this->CI->email->from('info@ggcc.org.in', 'GGCC');
            $this->CI->email->to($email);
            $this->CI->email->subject($subject);
            $this->CI->email->message($msg);
            if ($this->CI->email->send()) {
                // echo 'Email Send Successfully';
            } else {
              $data["isError"] = TRUE;
              $data["message"] = "Failed to send !!. Try again!";
            }
        } else {
            $data["isError"] = TRUE;
            $data["message"] = "Please provide a valid email address!";
        }
    }
}
