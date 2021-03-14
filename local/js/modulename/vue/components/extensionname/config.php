<?
if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true)
{
    die();
}

return [
    'js' =>[
        '/local/js/modulename/vue/components/extensionname/dist/script.bundle.js',
    ],
    'css' => [
        '/local/js/modulename/vue/components/extensionname/dist/style.bundle.css',
    ],
    'rel' => [
		'main.polyfill.core',
		'ui.vue',
	],
    'skip_core' => true,
];