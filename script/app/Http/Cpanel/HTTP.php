<?php


namespace App\Http\Cpanel;


class HTTP
{
	function __construct($host, $username, $password, $port = 2082, $ssl = '', $theme = 'x')
	{
		$this->ssl = $ssl ? 'ssl://' : '';
		$this->username = $username;
		$this->password = $password;
		$this->theme = $theme;
		$this->auth = base64_encode($username . ':' . $password);
		$this->port = $port;
		$this->host = $host;
		$this->path = '/frontend/' . $theme . '/';
	}

	function getData($url, $data = '', $addPath = true)
	{
		$addPath ? $url = $this->path . $url : $url = $url;
		if (is_array($data)) {
			$url = $url . '?';
			foreach ($data as $key => $value) {
				$url .= urlencode($key) . '=' . urlencode($value) . '&';
			}
			$url = substr($url, 0, -1);
		}
		$response = [];
		$fp = fsockopen($this->ssl . $this->host, $this->port);
		if (!$fp) {
			return false;
		}
		$out = 'GET ' . $url . ' HTTP/1.0' . "\r\n";
		$out .= 'Authorization: Basic ' . $this->auth . "\r\n";
		$out .= 'Connection: Close' . "\r\n\r\n";
		fwrite($fp, $out);
		while (!feof($fp)) {
			array_push($response ,@fgets($fp));
		}
		fclose($fp);
		return $response;
	}
}