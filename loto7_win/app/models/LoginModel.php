<?php

class LoginModel extends BaseModel {

    /**
     * ユーザー認証
     */
    public function loginCheck($input) {

        $password = DB::table('loto_user')->where('user_id', $input['user_id'])->select('user_password')->get();

        if (sha1($input['user_password']) === $password) {
            return true;
        }

        $messages = new Illuminate\Support\MessageBag();
        $messages->add('badInput', 'ユーザーID、又はパスワードが正しくありません');
        $this->errors()->merge($messages);
        return false;
    }

}
