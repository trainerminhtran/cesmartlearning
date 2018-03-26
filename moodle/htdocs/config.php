<?php  // Moodle configuration file

unset($CFG);
global $CFG;
$CFG = new stdClass();

$CFG->dbtype    = 'mariadb';
$CFG->dblibrary = 'native';
$CFG->dbhost    = '127.0.0.1';
$CFG->dbname    = 'moodle';
$CFG->dbuser    = 'bn_moodle';
$CFG->dbpass    = 'a852534496';
$CFG->prefix    = 'mdl_';
$CFG->dboptions = array (
  'dbpersist' => 0,
  'dbport' => 3306,
  'dbsocket' => '',
  'dbcollation' => 'utf8_general_ci',
);

if (empty($_SERVER['HTTP_HOST'])) {
    //$_SERVER['HTTP_HOST'] = '127.0.0.1:81';
    $_SERVER['HTTP_HOST'] = '127.0.0.1:80';
};

if (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] == 'on') {
    $CFG->wwwroot   = 'https://' . $_SERVER['HTTP_HOST'];// . '/moodle';
} else {
    $CFG->wwwroot   = 'http://' . $_SERVER['HTTP_HOST'];//. '/moodle';
};
$CFG->dataroot  = 'C:/Bitnami/moodle/apps/moodle/moodledata';
$CFG->admin     = 'admin';

$CFG->directorypermissions = 02775;

$CFG->passwordsaltmain = '2e774a2f31e78e4e1653b51a622cfd3c0a9ae7afcb025dd2d033c00fa9d47b12';
require_once(__DIR__ . '/lib/setup.php');

// There is no php closing tag in this file,
// it is intentional because it prevents trailing whitespace problems!
