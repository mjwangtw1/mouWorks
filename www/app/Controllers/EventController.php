<?php

namespace App\Controllers;

use Psr\Http\Message\ServerRequestInterface as Request;
use Psr\Http\Message\ResponseInterface as Response;


class EventController extends BaseController
{
    public $pageTitle;

    private $container  = null;

    public function __construct($container)
    {
        // TODO: Implement __construct() method.
        $this->container = $container;
    }

    public function getList()
    {
        echo 'Getting List';
    }

    public function getEvent()
    {
        echo 'Getting Event';
    }

    public function getCoverPage(Request $request, Response $response){


    }

    /**
     * Build the NavBar DOM
     *
     * @param $data
     */
    public static function buildNavBar($data){

        $result = '';

        foreach($data as $navName => $navSetup){

            $textStyle = $navSetup['clickable'] ? 'text' : 'text-muted';
            $navLink = $navSetup['clickable'] ? $navSetup['link'] : '#';
            $externalLink = $navSetup['external'] ? 'target="_blank"' : '';
            $navLink =

            $result .= '<a class="p-2 ' . $textStyle . '" href="' . $navLink . '" ' . $externalLink . '>' . $navName . '</a>';

        }

        return $result;
    }



}