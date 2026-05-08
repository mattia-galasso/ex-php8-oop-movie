<?php

trait Rating
{
    private $rating = "0/5";

    public function setRating($addRating)
    {
        if (is_numeric($addRating) && $addRating >= 1 && $addRating <= 5) {
            $this->rating = $addRating;
        } else {
            echo "Il Rating deve essere un numero e deve essere un numero compresa tra 1 e 5";
        }
    }
}
