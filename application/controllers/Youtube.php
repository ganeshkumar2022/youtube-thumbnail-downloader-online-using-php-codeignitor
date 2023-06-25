<?php
class Youtube extends CI_Controller
{
	
	public function index()
	{
		$img_loc=null;
		if($this->input->post("get_thumbnail"))
		{
		$url=$this->input->post('url');
		if(strstr($url,"https://youtu.be/") || strstr($url,"https://www.youtube.com/watch?v="))
		{
		$a=$url;

		//get video id
		$a=str_replace("https://youtu.be/","",$a);
		$a=str_replace("https://www.youtube.com/watch?v=","",$a);
		$img_loc='https://img.youtube.com/vi/'.$a.'/sddefault.jpg';

		$filename=basename($img_loc);
		if(file_put_contents($filename,file_get_contents($img_loc)))
		{

		}
		
		$this->load->view('youtube_thumb_downloader',array('image_loc'=>$img_loc));
	    }
		else
		{
			$this->load->view('youtube_thumb_downloader',array('error'=>'Please enter an valid url'));
		}
	}
	}
}
?>
