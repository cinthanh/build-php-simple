<?php
namespace App\Controller;

class PagesController
{
    public function home()
    {
        $data = [
            'isTs' => 'this is TypeScript',
            'isJs' => 'this is JavaScript'
        ];

        return view('home', $data);
    }

    public function addName()
    {
        echo "<pre>";print_r($_SERVER);echo "</pre>";
    }

    public function about()
    {

        echo "<h2>I am about controller</h2>";

        // call to view
        redirect('service');
        return view('about');
    }

    public function service()
    {
        echo '1';
    }
}