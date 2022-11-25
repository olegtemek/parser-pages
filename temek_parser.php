<?php
require "vendor/autoload.php";

use DiDom\Document;

class Parser
{

  public function __construct($url, $title, $body, $codec = 'windows-1251')
  {
    $this->url = $url;
    $this->page = new Document($this->url, true, $codec);
    $this->title = $title;
    $this->body = $body;
  }

  private function queryBuilder($query)
  {
    return $this->page->find($query)[0]->html();
  }

  private function replaceAttr($query)
  {
  }

  public function getTitle()
  {
    return $this->queryBuilder($this->title);
  }

  public function getBody()
  {
    return $this->queryBuilder($this->body);
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
  $page = new Parser($_GET['url'], $_GET['title'], $_GET['body'], 'utf-8');
  if (isset($page)) {
    echo $page->getTitle();
    echo $page->getBody();
    echo '<br><br><br><strong>Base URL - <a target="_blank" href="' . $_GET['url'] . '">BASE URL SOURCE</strong>';
    echo '</br></br><a href="/">Go to back</a>';
  }
  ?>
</body>

</html>