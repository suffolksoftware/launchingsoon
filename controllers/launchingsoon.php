<?php defined('SYSPATH') OR die('No direct access allowed.');
/**
 *
 * @package    
 * @author     
 * @copyright  
 * @license    
 */
class Launchingsoon_Controller extends Template_Controller {

	public $template = 'launchingsoon/template';

  public function index() {
		$this->session = Session::instance();
    $config = Kohana::config('launchingsoon');
    
    $user = ORM::factory('launchingsoon_user');
		$this->template->form = View::factory('launchingsoon/form')
		  ->bind('user', $user)
		  ->bind('post', $post)
		  ->bind('errors', $errors)
		;

    $this->template->title        = isset($config['title']) ? $config['title'] : '';
    $this->template->tagline      = isset($config['tagline']) ? $config['tagline'] : '';
    $this->template->intro        = isset($config['intro']) ? $config['intro'] : '';
    $this->template->email_only   = isset($config['email_only']) ? $config['intro'] : false;
    $this->template->form->email_only   = isset($config['email_only']) ? $config['intro'] : false;
    $this->template->success      = isset($config['success']) ? $config['success'] : 'Success';

    $post = $_POST;
    if ($post) {
      if ($user->validate($post, FALSE)) {
        
        // optional fields
        if (isset($post['first_name'])) $user->first_name = $post['first_name'];
        if (isset($post['last_name'])) $user->last_name = $post['last_name'];
        
        $user->updated_at = date("Y-m-d H:i:s");
        $user->created_at = date("Y-m-d H:i:s");
        
        $user->save();
        $user = ORM::factory('launchingsoon_user');
        $this->session->set_flash('flash', $this->template->success);
        url::redirect('/');
      } else {
        $errors = $post->errors();
        $user->email = $post['email'];
        
        if (isset($post['first_name'])) $user->first_name = $post['first_name'];
        if (isset($post['last_name'])) $user->last_name = $post['last_name'];
      }
    }

  }
}