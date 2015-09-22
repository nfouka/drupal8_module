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

include '/var/www/html/drupal-8.0.0-beta15/modules/mymodules/vendor/apache/log4php/src/main/php/Logger.php';

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
    return [
        '#type' => 'markup',
        '#markup' => $this->t('Hello mist2 @name!'.drupal_get_path('module', 'acme'), ['@name' => $name])
    ];
  }

  public function salut() {
  	
  	
  	
  	$name = 'NADIR FOUKA CECI EST UN TEST '  ; 
  	/*
  	 * $markup = [
      '#markup' => $template->render([ 'name' => $name ]),
      '#attached' => [ 'css' => [
          drupal_get_path('module', 'acme') . '/assets/css/acme.css'
        ]
      ]
    ];
  	 */
  	
  	$twigFilePath = drupal_get_path('module', 'acme') . '/templates/hello.html.twig';
  	$template = $this->twig->loadTemplate($twigFilePath);
  	return $template->render(array('name' => $name));
  	
  	
  }
  
 
  public function twig($name) {
      
      
        \Logger::configure(array(
            'rootLogger' => array(
                'appenders' => array('default'),
            ),
            'appenders' => array(
                'default' => array(
                    'class' => 'LoggerAppenderFile',
                    'layout' => array(
                        'class' => 'LoggerLayoutSimple'
                    ),
                    'params' => array(
                        'file' => '/var/www/html/drupal-8.0.0-beta15/modules/mymodules/logs/logger.log',
                        'append' => true
                    )
                )
            )
        ));
      
       $logger  =  \Logger::getLogger('main') ; 
       $logger->info("Simple message de test  AT ".  date("F j, Y, g:i a") ) ; 
       $logger->error("Simple message de test  AT ".  date("F j, Y, g:i a") ) ; 
       
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
        
               
                $logger->info($record->location." date : ".date("F j, Y, g:i a") ) ;
            }
        }
       
 
    return [
      '#theme' => 'hello_page',
      '#name' => $name,
      '#all'  => $result  , 
    ];

  }
  
  
}
