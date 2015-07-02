<?php

class RegistModel extends BaseModel {

    /**
     * ユーザー登録
     */
    public function registUser($input) {

        $date = new \DateTime();

        DB::table('loto_user')->insert(array(
            'user_id' => $input["user_id"],
            'user_password' => sha1($input["user_password"]),
            'user_mail' => $input["user_mail"],
            'user_name1' => $input["user_name1"],
            'user_name2' => $input["user_name2"],
            'regist_user' => $input["user_id"],
            'regist_date' => $date
        ));

        return true;
    }

    /**
     * 抽選結果登録
     */
    public function regitstResult($input) {

        $date = new \DateTime();

        DB::table('loto7_winning_num')->insert(array(
            'loto7_ver' => $input["loto7_ver"],
            'win_num_1' => $input["win_num_1"],
            'win_num_2' => $input["win_num_2"],
            'win_num_3' => $input["win_num_3"],
            'win_num_4' => $input["win_num_4"],
            'win_num_5' => $input["win_num_5"],
            'win_num_6' => $input["win_num_6"],
            'win_num_7' => $input["win_num_7"],
            'win_num_b1' => $input["win_num_b1"],
            'win_num_b2' => $input["win_num_b2"],
            'regist_user' => "ichijo",
            'regist_date' => $date,
        ));
        
        DB::table('loto7_winning_detail')->insert(array(
            'loto7_ver' => $input["loto7_ver"],
            '1st_unit' => $input["1st_unit"],
            '1st_prize' => $input["1st_prize"],
            '2nd_unit' => $input["2nd_unit"],
            '2nd_prize' => $input["2nd_prize"],
            '3rd_unit' => $input["3rd_unit"],
            '3rd_prize' => $input["3rd_prize"],
            '4th_unit' => $input["4th_unit"],
            '4th_prize' => $input["4th_prize"],
            '5th_unit' => $input["5th_unit"],
            '5th_prize' => $input["5th_prize"],
            '6th_unit' => $input["6th_unit"],
            '6th_prize' => $input["6th_prize"],
            'regist_user' => "ichijo",
            'regist_date' => $date,
        ));
        
        return true;
    }

}
