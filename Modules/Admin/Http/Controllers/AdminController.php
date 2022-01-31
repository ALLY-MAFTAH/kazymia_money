<?php

namespace Modules\Admin\Http\Controllers;

use Illuminate\Contracts\Support\Renderable;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

class AdminController extends Controller
{
    public function index() {
        //  echo 'Hello - I am the <strong>'. __CLASS__ . '</strong> Class';
        $this->data['app']['page'] = [
          'layout'  => 'vertical',
          'title'   => 'Admin',
      ];

      $this->data["app"]["template"] = array(
          "styles"                    => array(
              "vendor"                => array(
                  array("href"    => "app-assets/vendors/data-tables/css/jquery.dataTables.min.css"),
                  array(),
              ),
              "custom"                => array(),
              "page"                  => array(
                  array("href"    => "app-assets/css/pages/data-tables.css"),
                  array(),
              ),
          ),
          "scripts"                   => array(
              "vendor"                => array(
                  array("src"     => "app-assets/vendors/data-tables/js/jquery.dataTables.min.js"),
                  array(),
              ),
              "custom"               => array(),
              "page"                 => array(
                  array("src"     => "app-assets/js/scripts/ui-alerts.js"),
                  array(),
              ),
          ),
      );

      return view('admin::index', $this->data);
    }

      public function foo(){

          $this->data['app']['page'] = [
              'layout'  => 'vertical',
              'title'   => 'Admin',
          ];

          $this->data["app"]["template"] = array(
              "styles"                    => array(
                  "vendor"                => array(
                      array("href"    => "app-assets/vendors/data-tables/css/jquery.dataTables.min.css"),
                      array(),
                  ),
                  "custom"                => array(),
                  "page"                  => array(
                      array("href"    => "app-assets/css/pages/data-tables.css"),
                      array(),
                  ),
              ),
              "scripts"                   => array(
                  "vendor"                => array(
                      array("src"     => "app-assets/vendors/data-tables/js/jquery.dataTables.min.js"),
                      array(),
                  ),
                  "custom"               => array(),
                  "page"                 => array(
                      array("src"     => "app-assets/js/scripts/ui-alerts.js"),
                      array(),
                  ),
              ),
          );

          return view('admin::index', $this->data);
        }
}
