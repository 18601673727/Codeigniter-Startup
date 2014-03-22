<?php
/**
 * --------------------------------------------------------------------
 *  Controller with Pjax Routing.
 * --------------------------------------------------------------------
 *
 *  @author s1m0n (www.xiangmin.net)
 *
 */
class MY_Controller extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->_before_render();
    }

    protected function _before_render()
    {
        // Check if is pjax request
        if (array_key_exists('HTTP_X_PJAX', $_SERVER) && $_SERVER['HTTP_X_PJAX'])
        {
            $this->layout->disable_layout = TRUE;
        }

        return $this->layout->set_layout('main');
    }

}
