<?php
  class BaseView
  {
    public static function render($header, $body) {
      $output = '';
      $output .= '<table class="table table-striped table-hover">';
      $output .= '<thead>';
      $output .= '<tr>';
      $output .= $header;
      $output .= '</tr>';
      $output .= '</thead>';
      $output .= '<tbody>';
      $output .= $body;
      $output .= '</tbody>';
      $output .= '</table>';
      return $output;
    }
  }

  class BookView extends BaseView
  {
    public static function render($heads, $books) {
      $header = '';
      foreach ($heads as $head) {
        $header .= '<th>' . $head . '</th>';
      }

      $body = '';
      foreach ($books as $book) {
        $body .= '<tr>';
        $body .= '<td>' . $book->title . '</td>';
        $body .= '<td>' . $book->author . '</td>';
        $body .= '<td>' . $book->genre . '</td>';
        $body .= '<td>' . $book->pageCount . '</td>';
        if ($book->isBorrowed) {
          $body .= '<td><i class="icon icon-check"></i></td>';
        } else {
          $body .= '<td></td>';
        }
        $body .= '</tr>';
      }

      echo parent::render($header, $body);
    }
  }

  class CDView extends BaseView
  {
    public static function render($heads, $cds) {
      $header = '';
      foreach ($heads as $head) {
        $header .= '<th>' . $head . '</th>';
      }

      $body = '';
      foreach ($cds as $cd) {
        $body .= '<tr>';
        $body .= '<td>' . $cd->title . '</td>';
        $body .= '<td>' . $cd->artist . '</td>';
        $body .= '<td>' . $cd->genre . '</td>';
        $body .= '<td>' . $cd->length . '</td>';
        if ($cd->isBorrowed) {
          $body .= '<td><i class="icon icon-check"></i></td>';
        } else {
          $body .= '<td></td>';
        }
        $body .= '</tr>';
      }

      echo parent::render($header, $body);
    }
  }

  class MovieView extends BaseView
  {
    public static function render($heads, $movies) {
      $header = '';
      foreach ($heads as $head) {
        $header .= '<th>' . $head . '</th>';
      }

      $body = '';
      foreach ($movies as $movie) {
        $body .= '<tr>';
        $body .= '<td>' . $movie->title . '</td>';
        $body .= '<td>' . $movie->director . '</td>';
        $body .= '<td><ul>';
        foreach($movie->actors as $actor) {
          $body .= '<li>' . $actor . '</li>';
        }
        $body .= '</ul></td>';
        $body .= '<td>' . $movie->genre . '</td>';
        $body .= '<td>' . $movie->length . '</td>';
        if ($movie->isBorrowed) {
          $body .= '<td><i class="icon icon-check"></i></td>';
        } else {
          $body .= '<td></td>';
        }
        $body .= '</tr>';
      }

      echo parent::render($header, $body);
    }
  }

  class HomeView
  {
    public static function render() {
      echo '<p>Welcome to the library! Please look around for something to borrow!</p>';
    }
  }

  class PageNotFoundView
  {
    public static function render() {
      echo '<p>Page not found</p>';
    }
  }

?>