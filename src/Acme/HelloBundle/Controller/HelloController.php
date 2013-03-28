<?php namespace Acme\HelloBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;

class HelloController extends Controller
{
	public function indexAction($name, $foo='bar'){
		$session = $this->getRequest()->getSession();
		$session->set('foo','bar');
	//	throw new \Exception('something went wrong');
		$foo = $session->get('foo');
		return $this->render('AcmeHelloBundle:Hello:index.html.twig',array('name'=>$name));
	//	return $this->redirect($this->generateUrl('homepage'));
		
	}




}

?>

