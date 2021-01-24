<?php
	// Core App Class
	class Core {
		protected $currentController = 'Pages';
		protected $currentMethod = 'index';
		protected $params = [];

		public function __construct() {
			print_r($this->getUrl());
		}

		public function getUrl() {
			if (isset($_GET['url'])) {
				$url = rtrim($_GET['url'], '/');
				// Filter string/number
				$url = filter_var($url, FILTER_SANITIZE_URL);
				// Breaking into an array
				$url = explode('/', $url);
				return $url;
			}
		}
	}