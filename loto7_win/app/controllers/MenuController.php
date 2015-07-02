<?php

class MenuController extends BaseController{
    
    /**
     * 初期画面表示
     */
    public function postIndex(){
        $detail = array(
            'id' => Input::get("user_id"),
            'pass' => Input::get("user_password"),
            'mail' => Input::get("user_mail"),
            'name1' => Input::get("user_name1"),
            'name2' => Input::get("user_name2")
            );
        
        return View::make('Menu', array('detail' => $detail));
    }
}