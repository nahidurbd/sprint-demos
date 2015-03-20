<?php

use Myth\Controllers\ThemedController;

/**
 * Blog Controller
 *
 * Auto-generated by Sprint on 2015-03-20 14:35pm
 */
class Blog extends ThemedController {

	/**
     * The type of caching to use. The default values are
     * set globally in the environment's start file, but
     * these will override if they are set.
     */
    protected $cache_type      = null;
    protected $backup_cache    = null;

    // If set, this language file will automatically be loaded.
    protected $language_file   = null;

    // If set, this model file will automatically be loaded.
    protected $model_file      = 'post_model';

    
	/**
     * Allows per-controller override of theme.
     * @var null
     */
    protected $theme = null;

    /**
     * Per-controller override of the current layout file.
     * @var null
     */
    protected $layout = 'two_right';

	/**
     * The UIKit to make available to the template views.
     * @var string
     */
    protected $uikit = '';

    /**
     * The number of rows to show when paginating results.
     * @var int
     */
	protected $limit = 25;


    //--------------------------------------------------------------------

    /**
     * The default method called. Typically displays an overview of this
     * controller's domain.
     *
     * @return mixed
     */
	public function index()
	{
		$this->load->library('table');
        $this->load->helper('typography');

		$offset = $this->uri->segment( $this->uri->total_segments() );

        $rows = $this->post_model->limit($this->limit, $offset)
	                 ->as_array()
	                 ->find_all();
        $this->setVar('rows', $rows);

		$this->render();
	}

	//--------------------------------------------------------------------

    /**
     * Displays a single item.
     *
     * @param  int $id  The primary_key of the object.
     * @return mixed
     */
	public function post($id)
	{
		$item = $this->post_model->find($id);
        $this->load->helper('typography');

		if (! $item)
		{
			$this->setMessage('Unable to find that item.', 'warning');
			redirect( site_url('blog') );
		}

		$this->setVar('item', $item);

		$this->render();
	}

	//--------------------------------------------------------------------

}