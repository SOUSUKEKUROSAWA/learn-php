<?php
    class Movie {
        public $title;
        private $rating;
        private $rating_list = array("G","PG","PG-13","R","NR");

        function __construct($cTitle, $cRating) {
            $this->title = $cTitle;
            $this->setRating($cRating);
        }

        // getter
        function getRating () {
            return $this->rating;
        }

        // setter
        function setRating ($sRating) {
            if (in_array($sRating, $this->rating_list)) {
                $this->rating = $sRating;
            } else {
                $this->rating = "NR";
            }
        }
    }

    $avengers = new Movie("Avengers", "Dog");
    // $avengers->setRating("Cat");
    echo $avengers->getRating();
?>