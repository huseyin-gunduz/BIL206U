<?php

class User {
    public $name;
    public $email;

    public function __construct($name, $email) {
        $this->name = $name;
        $this->email = $email;
    }

    public function getInfo() {
        return "Adi Soyadi: $this->name, Email: $this->email";
    }
}
?>