<?php
namespace MyApp\Controller;
use Wax\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;
use Doctrine\ORM\EntityManager;


class PageController extends Controller {
  
  
  public function testing() {
    echo "Test1";
    echo "Test2";
    echo "Test3";
    echo "Test4";
  }
  
  
  public function render() {
    return new Response('<h1>Hello world!</h1>');
  }
  
  
}

