<?php
require "vendor/autoload.php";
header('Content-type: text/html; charset=utf-8');


use DiDom\Document;



class Parser
{

  public function __construct($url, $title, $body, $another = null)
  {
    $this->url = $url;
    $this->page = new Document($this->url, true, 'windows-1251');
    $this->title = $title;
    $this->body = $body;
    $this->another = $another;
  }

  private function queryBuilder($query)
  {
    return $this->page->find($query)[0]->html();
  }

  public function getTitle()
  {
    return $this->queryBuilder($this->title);
  }

  public function getBody()
  {
    return $this->queryBuilder($this->body);
  }

  public function getAnother()
  {
    return $this->queryBuilder($this->another);
  }
}


// $page = new Parser('url', 'title selector', 'body selector', 'if u want get another block then write selector');
?>


<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>test</title>
</head>

<body>
  <?php
  $page = new Parser($_GET['url'], $_GET['title'], $_GET['body'], isset($_GET['another']) ? $_GET['another'] : '');
  if (isset($page)) {
    echo $page->getTitle();
    echo $page->getBody();


    echo '<br><br><br><strong>Base URL - <a target="_blank" href="' . $_GET['url'] . '">BASE URL SOURCE</strong>';
    echo '</br></br><a href="/">Go to back</a>';
  }

  ?>
</body>

</html>