<?php

KLGSlackIntegration
{
	private static $instance;
	private $slackUrl;
	private $token;
	
	protected $message;
	
	private function __construct($slackUrl,$token)
	{
		$this->slackUrl = $slackUrl;
		$this->token    = $token;
	}
	
	public function init($slackUrl,$token)
	{
		if (self::$instance == null) {
			self::$instance = new KLGSlackIntegration($slackUrl,$token);
		}
		
	}
	
	public function getInstance()
	{
		if (self::$instance == null) {
			throw new Exception('No Instance available, use KLGSlackIntegration::init($url,$token) to initialize ...');
		}
		return self::$instance;
	}
	
	public function sendMessage($message)
	{
		$this->setMessage($message)
		$this->send();
	}
	
	public function setMessage($message)
	{
		$this->message = $message;
	}
	
	public function send()
	{
		$this->_sendMessageToSlack();	
	}
	
	private function _sendMessageToSlack()
	{
	
	}

}
