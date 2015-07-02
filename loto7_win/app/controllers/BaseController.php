<?php

class BaseController extends Controller {

    /**
     * Setup the layout used by the controller.
     *
     * @return void
     */
    protected function setupLayout() {
        if (!is_null($this->layout)) {
            $this->layout = View::make($this->layout);
        }
    }

    /**
     * バリデーション
     */
    public function makeValidation($input, $rules) {

        //バリデーションを実行
        $validator = Validator::make($input, $rules);

        //エラーの場合はメッセージを遷移元へ返却
        return $validator;
    }

}
