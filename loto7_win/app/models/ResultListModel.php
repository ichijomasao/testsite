<?php

class ResultListModel extends BaseModel {

    /**
     * 抽選結果の取得
     */
    public function getList() {

        $result = DB::table('loto7_winning_num')
                ->select('loto7_ver', 'win_num_1', 'win_num_2', 'win_num_3', 'win_num_4', 'win_num_5', 'win_num_6', 'win_num_7', 'win_num_b1', 'win_num_b2')
                ->orderBy('loto7_ver', 'asc')
                ->get();

        return $result;
    }
    
    /**
     * 最大、最小値を取得
     */
    public function getMaxMin(){
        $resultMaxMin = DB::table('view_winning_num_1')
                ->select('win_num_1', 'num_count')
                ->get();

        return $resultMaxMin;
    }

}
