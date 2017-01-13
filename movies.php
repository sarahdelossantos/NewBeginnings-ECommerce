<?php 
	
	class Movie{
		public title;
		public genre;
		public duration;

		function __construct($title){
			$this->title = $title;
			$this->genre = $genre;
			$this->duration = $duration;
		}
	
		function showInfo($title,$genre,$duration){
			echo $title, $genre, $duration;
		}
	}

showInfo(sarah,sarah,sarah);



?>