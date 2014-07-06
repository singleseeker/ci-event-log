<?php

defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * CodeIgniter Event log example
 *
 * @author     Single Seeker <fusiweb@gmail.com>
 * @license    BSD License
 * @link       http://letcodefly.com
 * @since      Version 1.0
 */

class Example extends BASE_Controller
{
    /**
     * constructor
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
        $this->load->library('lib_event_log');
    }

    /**
     * index method
     *
     * @return void
     */
    public function index()
    {
        $event = array(
                'event_log_name'    => 'user_first_log_in',
                'event_log_des'     => '用户首次注册',
                'user_event_type'   => 'user_score',
                'event_log_time'    => date('Y-m-d H:i:s')
            );
        $this->lib_event_log->add_user_event($event,1);

    }

    public function del_event($id)
    {
        $this->lib_event_log->del_user_event(1);
    }

}
/* End of file example.php */
/* Location: ./application/controllers/example.php */
