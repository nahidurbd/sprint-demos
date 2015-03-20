<?php

class Posts {

    public function recent($params=[])
    {
        $ci =& get_instance();

        $limit = ! empty($params['show']) ? (int)$params['show'] : 0;

        $ci->load->model('post_model');

        $posts = $ci->post_model->limit($limit, 0)->order_by('created_on', 'desc')->find_all();

        if (empty($posts))
        {
            return '';
        }

        return $ci->load->view('blog/recent', ['posts' => $posts], true);
    }

    //--------------------------------------------------------------------




}