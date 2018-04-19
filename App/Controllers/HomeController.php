<?php
/**
 * @package phpner
 **/

namespace App\Controllers;
use App\Models\TestModel;
/**
 * Class HomeController
 * @package Controller
 */

class HomeController extends AbstractController
{
 public function index()
 {
    echo $this->view('content');
 }
}