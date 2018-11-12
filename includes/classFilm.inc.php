<?php
class Film {
	private $title;
	private $director;
	private $category;
	private $duration;
	private $price;

	function __construct($title, $director, $category, $price) {
		$this->setTitle($title);
		$this->setDirector($director);
		$this->setCategory($category);
		$this->setPrice($price);
	}

	function __destruct() {}

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

	function display() {
		$content = '<div class="col-12 col-sm-6 col-md-4 col-lg-3 col-xl-3">';
		$content .= '<div class="card-film card text-center">';
	  	$content .= '<img class="img-film card-img-top" src="library/perfume.jpg" alt="Card image cap">';
		  $content .= '<div class="card-body">';
		    $content .= '<h5 class="card-title">'.$this->getTitle().'</h5>';
		    $content .= '<h6 class="card-subtitle mb-2 text-muted">'.$this->getDirector().'</h6>';
		    $content .= '<h6 class="card-subtitle mb-2 text-muted">'.$this->getCategory().'</h6>';
		    $content .= '<h6 class="card-subtitle mb-2 text-muted" style="font-style: italic;">$ '.$this->getPrice().'</h6>';
		    $content .= '<input type="number" class="number-picker" name="quantity" min="1" max="5" value="1"/><br/>';
		    $content .= '<button type="button" class="button-add" data-toggle="modal" data-target="#previewModal"><i class="fas fa-shopping-cart"></i> Ajouter</button>';
		  $content .= '</div>';
		$content .= '</div>';
		$content .= '</div>';

		echo $content;
	}
}
?>
