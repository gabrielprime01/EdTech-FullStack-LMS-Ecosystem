<?php  
/**
 * Template de Configuração do Moodle LMS
 * Este arquivo demonstra a estruturação de ambiente para um ecossistema EAD de alta disponibilidade.
 */

unset($CFG);
global $CFG;
$CFG = new stdClass();

// Configurações de Banco de Dados
$CFG->dbtype    = 'mysqli';
$CFG->dblibrary = 'native';
$CFG->dbhost    = 'localhost';
$CFG->dbname    = 'moodle_db_name';
$CFG->dbuser    = 'moodle_db_user';
$CFG->dbpass    = 'password_placeholder';
$CFG->prefix    = 'mdl_';
$CFG->dboptions = array (
  'dbpersist' => 0,
  'dbport' => '',
  'dbsocket' => '',
  'dbcollation' => 'utf8mb4_unicode_ci',
);

// Configurações de Caminhos (Paths)
$CFG->wwwroot   = 'https://ead.seudominio.com.br';
$CFG->dataroot  = '/home/caminho/fora/do/public_html/moodledata';
$CFG->admin     = 'admin';

$CFG->directorypermissions = 0775;

require_once(__DIR__ . '/lib/setup.php');