<?php
namespace app\controller;
class PageController{
    public function about(){
        $articles=[
            [
                'title'=>'About',
                'description'=>'About',
                'uri'=>'about'
            ],
            [
                'title'=>'About2',
                'description'=>'About2',
                'uri'=>'about2'
            ]
            ];
            //return view('about'.compact('articles'));

            return require '/app/views/about.view.php';
    }
}