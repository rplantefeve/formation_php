<?php

$finder = PhpCsFixer\Finder::create()
    ->exclude('tools')
    ->in(__DIR__)
;

$config = new PhpCsFixer\Config();

return $config->setRules(array(
        '@Symfony' => true,
        'echo_tag_syntax' => array('format' => 'short'),
        'strict_param' => false,
        'array_syntax' => array('syntax' => 'long'),
        'yoda_style' => false,
        'increment_style' => array('style' => 'post'),
        'explicit_string_variable' => true,
        'concat_space' => array('spacing' => 'one'),
    ))
    ->setFinder($finder)
;
