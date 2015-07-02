<!DOCTYPE html>
<html>
    <head>
        <title>抽選結果一覧</title>
        <meta charset="UTF-8">
    </head>
    <body>
        <h1>過去の抽選結果</h1>
        <table border="1">
            <tr>
                <th>開催回数</th>
                <th>抽選番号１</th>
                <th>抽選番号２</th>
                <th>抽選番号３</th>
                <th>抽選番号４</th>
                <th>抽選番号５</th>
                <th>抽選番号６</th>
                <th>抽選番号７</th>
                <th>ボーナス番号１</th>
                <th>ボーナス番号２</th>
            </tr>
            @foreach($result as $row)
            <tr>
                <th>{{{ $row->loto7_ver }}}</th>
                <th>{{{ $row->win_num_1 }}}</th>
                <th>{{{ $row->win_num_2 }}}</th>
                <th>{{{ $row->win_num_3 }}}</th>
                <th>{{{ $row->win_num_4 }}}</th>
                <th>{{{ $row->win_num_5 }}}</th>
                <th>{{{ $row->win_num_6 }}}</th>
                <th>{{{ $row->win_num_7 }}}</th>
                <th>{{{ $row->win_num_b1 }}}</th>
                <th>{{{ $row->win_num_b2 }}}</th>
            </tr>
            @endforeach
        </table>
        <h1>抽選結果集計</h1>
        <table border="1">
            <tr>
                @for($i = 1; $i < 38; $i++)
                <th>{{{ $i }}}</th>
                @endfor
            </tr>
            <tr>
                @for($i = 1; $i < 38; $i++)
                <th>{{{ $resultData[$i] }}}回</th>
                @endfor
            </tr>
        </table>
        
        {{ var_dump($resultMaxMin) }}
    </body>
</html>
