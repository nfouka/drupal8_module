<?php

/**
 * @file
 * Contains Drupal\mymodules\Controller\DefaultController.
 */

namespace Drupal\mymodules\Controller;
use Drupal\Core\Controller\ControllerBase;
use Drupal\Core\Template\TwigEnvironment;
use Drupal\Core\DependencyInjection\ContainerInjectionInterface;
use Symfony\Component\DependencyInjection\ContainerInterface;

class DefaultController extends ControllerBase implements ContainerInjectionInterface {
	/**
	 * @var TwigEnvironment
	 */
	public $twig;
	
	/**
	 * Constructor
	 *
	 * @param TwigEnvironment $twig
	 */
	public function __construct(TwigEnvironment $twig) {
		$this->twig = $twig;
	}
	
	/**
	 * {@inheritdoc}
	 */
	public static function create(ContainerInterface $container) {
		return new static($container->get('twig'));
	}
	

  /**
   * Hello.
   *
   * @return string
   *   Return Hello string.
   */
  public function hello($name) {

$content =  array(
        '#type' => 'markup',
        '#markup' => $this->t('Hello mist2 @name!'.drupal_get_path('module', 'acme'), ['@name' => $name])
    ) ;

     $content['#attached']['library']['js'] = 'mymodules/name_of_the_key';
     $content['#attached']['library']['css'] = 'mymodules/name_of_the_key';


/*
$form['#attached']['js'] = array(
  array(
    'data' => 'jQuery(function() { jQuery("#my-element").show(); });',
    'type' => 'inline',
    ),
);
*/


    return $content ; 
  }

  public function salut() {
  	
  	
  	
  	$name = 'NADIR FOUKA CECI EST UN TEST '  ; 
  	
  	  $markup = [
      '#markup' => $template->render([ 'name' => $name ]),
      '#attached' => [ 'css' => [
          drupal_get_path('module', 'acme') . '/assets/css/acme.css'
        ]
      ]
    ];
  	 
  	
  	$twigFilePath = drupal_get_path('module', 'acme') . '/templates/hello.html.twig';
  	$template = $this->twig->loadTemplate($twigFilePath);
  	return $template->render(array('name' => $name));
  	
  	
  }
  
 
  public function twig($name) {
      

       $all = array(
           
           'info'=> 'Ubuntu amd64 Linux for developer' , 
           'os'  => 'Debian ' , 
           'name'=> 'nadir fouka' , 
           'adress' => 'rue du vercors grenoble'
       ) ; 

       $sql ='select * from watchdog' ; 

       
       $connection = \Drupal\Core\Database\Database::getConnection();
       $result = $connection->query($sql)->fetchAll();

        if ($result) {    
        foreach ($result as $record) {
        
               
                
            }
        }
       
    $form = \Drupal::formBuilder()->getForm('Drupal\mymodules\Form\ContributeForm');

    // $form['#attached']['library'][] = 'mymodules/angular.angularjs';
        
    return [
      '#theme' => 'hello_page',
      '#name' => $name,
      '#all'  => $result  , 
      '#form' => $form , 
    ];

  }
  
  
}
