<?php

class LoginController extends BaseController {

    /**
     * バリデーションルール
     */
    //ログイン認証用
    public $rulesLogin = [
        'user_id' => 'required|alpha_num',
        'user_password' => 'required|alpha_num'
    ];

    /**
     * コンストラクタ
     */
    public function __construct(LoginModel $model) {
        $this->model = $model;
    }

    /**
     * ログイン認証
     */
    public function login() {

        //入力項目を取得
        $input = Input::all();

        //バリデーションエラーの場合は遷移元へエラーメッセージを返却
        $validator = $this->makeValidation($input, $this->rulesLogin);
        if ($validator->fails()) {
            return Redirect::back()->withErrors($validator)->withInput();
        }

        //ログイン認証エラーの場合は遷移元へエラーメッセージを返却
        if ($this->model->loginCheck($input)) {
            return View::make('Menu', ['detail' => $password]);
        }
        
        return Redirect::back()->withErrors($validator)->withInput();
    }

}
