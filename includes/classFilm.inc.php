<?php
class Film {
	private $id;
	private $title;
	private $director;
	private $category;
	private $duration;
	private $price;
	private $image;
	private $preview;

	function __construct($id, $title, $director, $category, $duration, $price, $image) {
		$this->setId($id);
		$this->setTitle($title);
		$this->setDirector($director);
		$this->setCategory($category);
		$this->setDuration($duration);
		$this->setPrice($price);
		$this->setImage($image);
	}

	function __destruct() {}

	function getId() {
		return $this->id;
	}

	function setId($id) {
		$this->id = $id;
	}

	function getTitle() {
		return $this->title;
	}

	function setTitle($title) {
		$this->title = $title;
	}

	function getDirector() {
		return $this->director;
	}

	function setDirector($director) {
		$this->director = $director;
	}

	function getCategory() {
		return $this->category;
	}

	function setCategory($category) {
		$this->category = $category;
	}

	function getPrice() {
		return $this->price;
	}

	function setPrice($price) {
		$this->price = $price;
	}

	function getDuration() {
		return $this->duration;
	}

	function setDuration($duration) {
		$this->duration = $duration;
	}

	function getImage() {
		return $this->image;
	}

	function setImage($image) {
		$this->image = $image;
	}

	function getPreview() {
		return $this->preview;
	}

	function setPreview($preview) {
		$this->preview = $preview;
	}
}
?>
