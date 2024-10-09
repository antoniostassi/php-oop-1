<?php

class Movie {

    // tutte le variabili definite come private non saranno accessibili se non dalla classe stessa, dunque tramite il costruttore o i metodi.
    private $title;
    private $author;
    private $year; 
    private $language;
    private $duration;
    private $genre = [];

    public function __construct(string $varTitle, string $varAuthor, int $varYear, string $varLanguage, float $varDuration) {
        $this->title = $varTitle;
        $this->author = $varAuthor;
        $this->year = $varYear;
        $this->language = $varLanguage;
        $this->duration = $varDuration;
    }

    public function setGenre(string $varGenre) {
        $this->genre[] = $varGenre;
    }

    public function getGenre() {
        return $this->genre;
    }

}

$piratesOfCaribbean = new Movie("Pirati dei Caraibi", "Autore", 2004, "Italiano", 2.04);
$piratesOfCaribbean->setGenre('Fantasy');
$piratesOfCaribbean->setGenre('Action');

$inception = new Movie("Inception", "Autore", 2004, "Italiano", 2.04);
$inception->setGenre('Fantasy');
$inception->setGenre('Action');

