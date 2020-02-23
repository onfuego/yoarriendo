<?php

class User {

	var $rut;
	var $name;
	var $last_name;
	var $user_img_url;
	var $birthday;
	var $mail;
	var $nickname;
	var $phone;
	var $password;

	function __construct($rut, $name, $last_name, $user_img_url, $birthday, $mail, $nickname, $phone, $password) {
		$this -> rut = $rut;
		$this -> name = $name;
		$this -> last_name = $last_name;
		$this -> user_img_url = $user_img_url;
		$this -> birthday = $birthday;
		$this -> mail = $mail;
		$this -> nickname = $nickname;
		$this -> phone = $phone;
		$this -> password = $password;
	}
}

class Category {

	var $id_category;
	var $name;
	var $parent;

	function __construct($name, $parent) {
		$this -> name = $name;
		$this -> parent = $parent;
	}
}

class Publication {

	var $id_publication;
	var $title;
	var $publi_img_url;
	var $description;
	var $price;
	var $fk_rut;
	var $fk_category;

	function __construct($title, $publi_img_url, $description, $price, $fk_rut, $fk_category) {
		
		$this -> title = $title;
		$this -> publi_img_url = $publi_img_url;
		$this -> description = $description;
		$this -> price = $price;
		$this -> fk_rut = $fk_rut;
		$this -> fk_category = $fk_category;
	}
}

?>
