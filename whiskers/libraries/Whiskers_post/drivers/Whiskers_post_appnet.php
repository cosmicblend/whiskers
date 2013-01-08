<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Whiskers_post_appnet extends CI_Driver {

    protected   $CI,
                $connection,
                $screen_name;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->CI =& get_instance();
//JJ TODO
die('Whiskers_post_appnet object');

        // Load local config
        $appnet_settings = $this->CI->settings->get('appnet');
        print_r($appnet_settings);
        $consumer_key = $appnet_settings->consumer_key;
        $consumer_secret = $twitter_settings->consumer_secret;
        $token = $appnet_settings->token;

	// JJ
    }

    public function save_post($text)
    {
        if (empty($text))
        {
            $this->CI->session->setMessage('Text cannot be empty', 'error');
            return FALSE;
        }

        $id = $this->connection->post('statuses/update', array('status' => $text));

        $time = time();

        // Update has been posted, save to DB
        $key = sha1($time.':'.$text);

        $saved = $this->CI->posts->update($key, array(
            'type' => 'post',
            'text' => $text,
            'time' => $time,
            'source_urls' => array(
                'appnet' => 'https://alpha.app.net/'.$this->nickname.'/post/'.$id
            ) 
        ));

        return ( ! $saved) ? FALSE : $id;
    }

    public function remove_post($key)
    {
        $update = $this->CI->posts->get($key);
        $url_pieces = explode('/', $update->source_urls->appnet);
        $id = $url_pieces[count($url_pieces)-1];

        if (empty($id))
        {
            return $this->CI->posts->rm($key);
        }

        // remove from App.net
        try {
            $tweet = $this->connection->post('statuses/destroy', array('id' => $id));
        } catch (Exception $e) {
            $this->session->setMessage($e, 'error');
            return FALSE;
        }

        if ( ! $update)
        {
            $this->session->setMessage('Could not delete post from App.net', 'error');
            return FALSE;
        }

        if ( ! $this->CI->posts->rm($key))
        {
            $this->session->setMessage('Could not remove post from Database', 'error');
            return FALSE;
        }

        return $id;
    }
}
