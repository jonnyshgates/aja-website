<?php
function pageId(){
  switch($_SERVER["REQUEST_URI"]){
    case '/services.php':
      $page = 'Services';
      break;
    
    case '/about.php':
      $page = 'About';
      break;
    
    case '/contact.php':
      $page = 'Contact';
      break;
    
    default:
      $page = 'Home';
  }
  return $page;
}
?>