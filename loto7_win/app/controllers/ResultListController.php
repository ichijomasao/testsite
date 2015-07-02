<?php

class ResultListController extends BaseController {

    /**
     * コンストラクタ
     */
    public function __construct(ResultListModel $model) {
        $this->model = $model;
    }

    /**
     * ユーザー登録
     */
    public function resultList() {

        //抽選結果一覧を取得
        $result = $this->model->getList();
        
        //抽選結果一覧を取得
        $resultMaxMin = $this->model->getMaxMin();
        
        //集計値
        $resultData = $this->resultData($result);

        return View::make('ResultList', array('result' => $result, 'resultData' => $resultData, 'resultMaxMin' => $resultMaxMin));
        
    }
    
    /**
     * 抽選結果の集計
     */
    public function resultData($result) {

        //集計結果格納用の配列を準備
        for($i = 1; $i < 38; $i++) {
            $resultData[$i] = 0;
        }

        foreach ($result as $row) {
            $flg = false;
            foreach ($row as $column) {
                if(!$flg){
                    $flg = true;
                }else{
                    $resultData[$column]++;
                }
            }
        }
        return $resultData;
    }

}
