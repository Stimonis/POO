<?php
  error_reporting(E_ALL);
  ini_set('display_errors', 1);

  class Form {
    private $data;
    public $type;
    public $surround = 'p';


    public function __construct($data = array()) {
      $this->data = $data;
    }

    public function surround($contenu) {
      return "<{$this->surround}>$contenu</{$this->surround}>";
    }

    private function getExist($index) {
      return isset($this->data[$index]) ? $this->data[$index] : null;
    }

    public function input($name, $type, $text='') {
      if ($type == 'radio') {
        return $this->surround('<input type="'.$type.'" name="'.$name.'" value="'.$this->getExist($name).'">'.$text);
      } elseif ($type == 'checkbox') {
        return $this->surround('<input type="'.$type.'" name="'.$name.'" value="'.$this->getExist($name).'">'.$text);
      } else {
          return $this->surround($text .' : <input type="'.$type.'" name="'.$name.'" value="'.$this->getExist($name).'">');
      }

    }

    public function submit() {
      return $this->surround('<input type="submit" value="Envoyer">');
    }

  }

?>
