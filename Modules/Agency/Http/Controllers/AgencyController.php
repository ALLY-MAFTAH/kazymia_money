<?php

namespace Modules\Agency\Http\Controllers;

use Illuminate\Contracts\Support\Renderable;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

class AgencyController extends Controller
{
    public function index() {
        $this->data['app']['page'] = [
          'layout'  => 'vertical',
          'title'   => 'Agency',
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

      return view('agency::index', $this->data);
    }

      public function foo(){

          $this->data['app']['page'] = [
              'layout'  => 'vertical',
              'title'   => 'Agency',
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

          return view('agency::index', $this->data);
      }
}
