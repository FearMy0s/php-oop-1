<?php
    class Movie {
        public $title;
        public $genre;
        public $stars;
        private $QuoteStars;
        public $director;

        public function __construct($title, $director, $genre, $stars) {
            $this->title = $title;
            $this->stars = $stars;
            $this->director = $director;
            $this->genre = $genre;
        }

        public function getQuote($stars) {
            for ($i=0; $i < $stars; $i++) {
                $this->QuoteStars .= "<span><i class='fa-solid fa-star'></i></span>";
            }
            return $this->QuoteStars;
        }
    }
?>