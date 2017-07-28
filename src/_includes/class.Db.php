<?php
 /**
  * class.Db.php : class for the manage all the activity with the underline dbms
  */

  class Db {

    private $DB_LANGUAGE        = "";
    private $DB_DBMS_TYPE       = "";
    private $DB_HOST_NAME       = "";
    private $DB_SCHEMA          = "";
    private $DB_PORT_CONN       = NULL;
    private $DB_USERNAME        = "";
    private $DB_PASSWORD        = "";

    private $connection_pool = NULL;

    // __construnct : create the Db class
    public function __construct(
                  $dblanguage,$dbms,$dbhost,
                  $dbschema,$dbport,$username,$password) {

    }

    private function createConnectionPool($dbms) {
          // choose the correct connection string
          switch( $dbms ) {
            case 'mysql':
              $this->connection_pool = NULL;
            break;
            case 'sqlite':
              $this->connection_pool = NULL;
            break;
            case 'postgres':
              $this->connection_pool = NULL;
            break;
            case 'mongodb':
              $this->connection_pool = NULL;
            break;
            case 'mariadb':
              $this->connection_pool = NULL;
            break;
            default:
              $this->connection_pool = NULL;
              // default case are mysql / mariadb
          }
         return $this->connection_pool;
    }

    // getConn : create the connection to dbms and return the connection pspell_add_to_personal
    public function getConn() {
      if(isset($this->connection_pool)) {
        return $this->connection_pool;
      }
    }

    // insert current data
    public function insert() {

    }

    // delete current data
    public function delete() {

    }

    // update current data
    public function update() {

    }

  }

?>
