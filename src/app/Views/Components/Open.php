<?php

namespace Dragan\FormComponents\app\Views\Components;


class Open extends BaseComponent
{
	public const VIEW = 'form::components.open';

	public function __construct(
		public string      $action = '',
		public string      $method = 'POST',
	)
	{
		$this->attributesData = [
			'method' => match (strtoupper($this->method)) {
				'PUT', 'PATCH', 'DELETE' => 'POST',
				default => $this->method,
			},
			'action' => $this->action,
		];
	}
}
