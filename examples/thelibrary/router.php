<?php
  require('views.php');
  require('models.php');

  switch($page) {
    case 'home':
      HomeView::render();
      break;

    case 'book':
      $heads = ['Title', 'Author', 'Genre', 'Page Count', 'Borrowed'];
      $data = [
        new BookModel('The Alchemist', 'Paulo Coelho', 'Adventure', 163, false),
        new BookModel('The Da Vinci Code', 'Dan Brown', 'Mystery', 689, false),
        new BookModel('Twilight', 'Stephenie Meyer', 'Romance', 498, true),
      ];
      BookView::render($heads, $data);
      break;

    case 'cd':
      $heads = ['Title', 'Artist', 'Genre', 'Length', 'Borrowed'];
      $data = [
        new CDModel('Thriller', 'Michael Jackson', 'Pop', 42, true),
        new CDModel('Hotel California', 'The Eagles', 'Rock', 43, false),
        new CDModel('The Wall', 'Pink Floyd', 'Progressive', 80, true)
      ];
      CDView::render($heads, $data);
      break;

    case 'movie':
      $heads = ['Title', 'Director', 'Actors', 'Genre', 'Length', 'Borrowed'];
      $data = [
        new MovieModel('Titanic', 'James Cameron', ['Leonardo DiCaprio', 'Kate Winslet'], 'Drama', 195, true)
      ];
      MovieView::render($heads, $data);
      break;

    default: 
      PageNotFoundView::render();
      break;
  }

?>