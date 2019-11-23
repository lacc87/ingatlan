<?php  if ( ! defined('BASEPATH')) exit("No direct script access allowed");

class Migrate extends CI_Controller {

  public function __construct()
  {
    parent::__construct();

    $this->input->is_cli_request() 
      or exit("Execute via command line: php index.php migrate");

    $this->load->library('migration');
  }

  public function index()
  {
    if(!$this->migration->latest()) 
    {
      show_error($this->migration->error_string());
    }
  }

  public function generate($name = "") {
	  file_put_contents("application/models/".$name."_model.php", "<?php  if ( ! defined('BASEPATH')) exit(\"No direct script access allowed\");\n\nclass {$name}_model extends CI_Model {\n}");
	  echo "\e[0;32mapplication/models/".$name."_model.php\e[0m\n";
	  file_put_contents("application/migrations/".date("YmdHis")."_create_".strtolower($name).".php", "<?php  if ( ! defined('BASEPATH')) exit(\"No direct script access allowed\");\n\nclass Migration_Create_".strtolower($name)." extends CI_Migration {\n\tpublic function up() {\n\t}\n}");
	  echo "\e[0;32mapplication/migrations/".date("YmdHis")."_create_".strtolower($name).".php\e[0m\n";
  }

  public function modify($name = "") {
	  file_put_contents("application/migrations/".date("YmdHis")."_change_".strtolower($name).".php", "<?php  if ( ! defined('BASEPATH')) exit(\"No direct script access allowed\");\n\nclass Migration_Change_".strtolower($name)." extends CI_Migration {\n\tpublic function up() {\n\t}\n}");
	  echo "\e[0;32mapplication/migrations/".date("YmdHis")."_change_".strtolower($name).".php\e[0m\n";
  }

}
