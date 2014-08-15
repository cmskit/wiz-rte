<?php
$config = <<<EOD
{
	"info":  {
		"name": "Rich-Text-Editor",
		"description": {
			"en": "Rich-Text-Editor",
			"de": "Rich-Text-Editor"
		},
		"io":  [
			"html-string",
			"html-string"
		],
		"authors":  ["Christoph Taubmann"],
		"homepage": "http://cms-kit.org",
		"mail": "info@cms-kit.org",
		"copyright": "GPL",
		"credits":  [
			"[]() LGPL license"
		]
	},
	"system":  {
		"version": 0.4,
		"inputs":  [
			"TEXT"
		],
		"include":  ["wizard:rte"],
		"translations":  [
			"en"
		]
	}
}
EOD;
?>
