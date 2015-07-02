<?php

class RegistController extends BaseController{
    
    /**
     * バリデーションルール
     */
    //ユーザー登録用
    public $rulesRegUser = [
        'user_id' => 'required|alpha_num',
        'user_password' => 'required|alpha_num',
        'user_mail' => 'required|email',
        'user_name1' => 'required',
        'user_name2' => ''
    ];
    
    //抽選結果登録用
    public $rulesRegResult = [
        'loto7_ver' => 'required',
        'win_num_1' => 'required',
        'win_num_2' => 'required',
        'win_num_3' => 'required',
        'win_num_4' => 'required',
        'win_num_5' => 'required',
        'win_num_6' => 'required',
        'win_num_7' => 'required',
        'win_num_b1' => 'required',
        'win_num_b2' => 'required',
    ];
    
    /**
     * コンストラクタ
     */
    public function __construct(RegistModel $model) {
        $this->model = $model;
    }
    
    /**
     * ユーザー登録
     */
    public function registUser(){
        
        //入力項目を取得
        $input = Input::All();
        
        //バリデーションエラーの場合は遷移元へエラーメッセージを返却
        $validator = $this->makeValidation($input, $this->rulesRegUser);
        if ($validator->fails()) {
            return Redirect::back()->withErrors($validator)->withInput();
        }
        
        //ユーザー登録
        $flg = $this->model->registUser($input);
        
        if($flg){
            return View::make('Menu', array('detail' => '成功しました'));
        }else{
            return View::make('Menu', array('detail' => '失敗しました'));
        }
    }
    
    /**
     * 抽選結果登録
     */
    public function registResult(){
        
        //入力項目を取得
        $input = Input::All();
                
        //抽選結果登録
        $flg = $this->model->regitstResult($input);
        
        if($flg){
            return View::make('Menu', array('detail' => '成功しました'));
        }else{
            return View::make('Menu', array('detail' => '失敗しました'));
        }
    }
}
