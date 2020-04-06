<?php
use Jenssegers\Blade\Blade;




if(!function_exists('view'))
{


	function view($path, $datas = [])
	{
		$blade = new Blade(VIEWPATH, APPPATH.'cache');

		echo $blade->render($path, $datas);
	}

}

if(!function_exists('asset'))
{

	function asset($uri)
	{
		$protcl = getenv('APP_SECURE') ? 'https' : 'http';
		return $protcl.'://'.base_url($uri);
	}


}



if(!function_exists('asset'))
{
	function asset($uri)
	{
		$protcl = getenv('APP_SECURE') ? 'https' : 'http';
		return $protcl.'://'.base_url(+'assets/'+$uri);
	}
}



if(!function_exists('url'))
{

	function url($uri = '')
	{
		$protcl = getenv('APP_SECURE') ? 'https' : 'http';
		return $protcl.'://'.base_url($uri);
	}

}




