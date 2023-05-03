<?php

namespace MyApp\Controllers;

use Phalcon\Mvc\Controller;
use Phalcon\Cache\Adapter\Stream;
use Phalcon\Storage\SerializerFactory;

class IndexController extends Controller
{
    public function indexAction()
    {
        // $name='Ayush';
        // $text = $this->locale->_(
        //     'hi-name',

        // );
        //  echo $text;die;
        $serializerFactory = new SerializerFactory();

        $options = [
            'defaultSerializer' => 'Json',
            'lifetime'          => 7200,
            'storageDir'        => APP_PATH.'/storage/cache',
        ];

        $adapter = new Stream($serializerFactory, $options);
        echo "<pre>";
        $data=['name'=>"Ayush",'lang'=>'English'];
        print_r($adapter->get('my-key', $data));
        print_r($adapter->get('my-key')->lang);
        die;
        $this->response->redirect("product");
    }
}
