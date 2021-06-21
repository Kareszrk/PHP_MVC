<?php

class model {
  public static $templateFolder = "template/";
  public static $loggedIn = "sc.php";
  public static $header = "menu.php";
  public static $footer = "footer.php";
}

class view extends model {
  public $sites;
  private $siteLinks;
  private $page;
  function __construct(string $S_page){
    $this->page = $S_page;
    $this->sites = ["Home"];
    $this->siteLinks = ["homepage.php"];
    include_once model::$templateFolder.model::$header;
    include_once model::$templateFolder.model::$loggedIn;
    if(in_array($this->page, $this->sites)){
      include_once model::$templateFolder.$this->siteLinks[array_search($this->page, $this->sites)];
    } else {
      include_once model::$templateFolder."404.php";
    }
    include_once model::$templateFolder.model::$footer;
  }
}

class control {
  
}

if(empty($_GET['p'])){
  header('location: ?p=Home');
} else {

}

$mvc = new view($_GET['p']);
print($mvc);

?>
