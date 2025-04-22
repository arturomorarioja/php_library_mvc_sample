<?php

namespace App\Controllers;

use \Core\View;
use App\Models\Book;
use App\Models\Author;

class Books extends \Core\Controller
{
    /**
     * Show the index page
     */
    public function indexAction(): void
    {
        $books = Book::getAll();

        View::render('Books/index.php', [
            'pageTitle' => 'Books',
            'books'     => $books
        ]);
    }

    /**
     * Show the add new page
     */
    public function newAction(): void
    {
        $authors = Author::getAll();

        View::render('Books/new.php', [
            'pageTitle' => 'Add book',
            'authors'   => $authors
        ]);
    }
}