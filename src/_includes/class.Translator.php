<?php

 /**
  * class.Translator.php : class for translate the label and text inside a UI
  * in particular here we load information from a txt with check of alng attribute
  */

  class Translator {

    private $language	= '_en';
    private $lang 		= array();

    public function __construct($language){
      $this->language = $language;
    }

    private function findString($str) {
        if (array_key_exists($str, $this->lang[$this->language])) {
          echo $this->lang[$this->language][$str];
          return;
        }
        echo $str;
    }

    private function splitStrings($str) {
        return explode('=',trim($str));
    }

    public function __($str) {
      if (!array_key_exists($this->language, $this->lang)) {
        // -----------------------------------------------------------------------//
        // TODO: forcing a simple way to read xlsx file saved as blob inside dmbs //
        // -----------------------------------------------------------------------//
        if (file_exists('/Applications/XAMPP/htdocs/project/stingray/src/_translations/translation_it.txt')) {
              $strings = array_map(array($this,'splitStrings'),file('/Applications/XAMPP/htdocs/project/stingray/src/_translations/translation_it.txt'));
              foreach ($strings as $k => $v) {
                $this->lang[$this->language][$v[0]] = $v[1];
              }
              return $this->findString($str);
          }
          else {
              echo $str;
          }
      }
      else {
          return $this->findString($str);
      }
  }

}
?>
