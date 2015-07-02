<!DOCTYPE html>
<html>
    <head>
        <title>ログイン</title>
        <meta charset="UTF-8">
    </head>
    <body>
        @if($errors->has())
            @foreach($errors->all() as $row)
                <li>{{{ $row }}}</li>
            @endforeach
        @endif
    <h1>ログインフォーム</h1>
    {{ Form::open(array('url' => 'login', 'method' => 'post')) }}
    <table>
        <tr>
            <th>ログインID</th>
            <td>{{ Form::text('user_id', '', array('maxlength'=>'30')) }}</td>
        </tr>
        <tr>
            <th>パスワード</th>
            <td>{{ Form::password('user_password', array('maxlength'=>'20')) }}</td>
        </tr>
        <tr><th colspan="2">{{ Form::submit(); }}</th></tr>               
    </table>
    {{ Form::close() }}
    <h1>ユーザー登録フォーム</h1>
    {{ Form::open(array('url' => 'registUser', 'method' => 'post')) }}
    <table>
        <tr>
            <th>ログインID</th>
            <td>{{ Form::text('user_id', '', array('maxlength'=>'30')) }}</td>
        </tr>
        <tr>
            <th>パスワード</th>
            <td>{{ Form::password('user_password', array('maxlength'=>'20')) }}</td>
        </tr>
        <tr>
            <th>メールアドレス</th>
            <td>{{ Form::text('user_mail', '', array('maxlength'=>'150')) }}</td>
        </tr>
        <tr>
            <th>名前（姓）</th>
            <td>{{ Form::text('user_name1', '', array('maxlength'=>'30')) }}</td>
        </tr>
        <tr>
            <th>名前（名）</th>
            <td>{{ Form::text('user_name2', '', array('maxlength'=>'30')) }}</td>
        </tr>
        <tr><th colspan="2">{{ Form::submit(); }}</th></tr>               
    </table>
    {{ Form::close() }}
    <h1>結果登録フォーム</h1>
    {{ Form::open(array('url' => 'registResult', 'method' => 'post')) }}
    <table>
        <tr>
            <th>開催回</th>
            <td>{{ Form::text('loto7_ver', '', array('maxlength'=>'4')) }}</td>
        </tr>
        <tr>
            <th>当選番号１</th>
            <td>{{ Form::text('win_num_1', '', array('maxlength'=>'2')) }}</td>
        </tr>
        <tr>
            <th>当選番号２</th>
            <td>{{ Form::text('win_num_2', '', array('maxlength'=>'2')) }}</td>
        </tr>
        <tr>
            <th>当選番号３</th>
            <td>{{ Form::text('win_num_3', '', array('maxlength'=>'2')) }}</td>
        </tr>
        <tr>
            <th>当選番号４</th>
            <td>{{ Form::text('win_num_4', '', array('maxlength'=>'2')) }}</td>
        </tr>
        <tr>
            <th>当選番号５</th>
            <td>{{ Form::text('win_num_5', '', array('maxlength'=>'2')) }}</td>
        </tr>
        <tr>
            <th>当選番号６</th>
            <td>{{ Form::text('win_num_6', '', array('maxlength'=>'2')) }}</td>
        </tr>
        <tr>
            <th>当選番号７</th>
            <td>{{ Form::text('win_num_7', '', array('maxlength'=>'2')) }}</td>
        </tr>
        <tr>
            <th>ボーナス番号１</th>
            <td>{{ Form::text('win_num_b1', '', array('maxlength'=>'2')) }}</td>
        </tr>
        <tr>
            <th>ボーナス番号２</th>
            <td>{{ Form::text('win_num_b2', '', array('maxlength'=>'2')) }}</td>
        </tr>
        <tr>
            <th>一等</th>
            <td>{{ Form::text('1st_unit', '') }}口{{ Form::text('1st_prize', '') }}円</td>
        </tr>
        <tr>
            <th>二等</th>
            <td>{{ Form::text('2nd_unit', '') }}口{{ Form::text('2nd_prize', '') }}円</td>
        </tr>
        <tr>
            <th>三等</th>
            <td>{{ Form::text('3rd_unit', '') }}口{{ Form::text('3rd_prize', '') }}円</td>
        </tr>
        <tr>
            <th>四等</th>
            <td>{{ Form::text('4th_unit', '') }}口{{ Form::text('4th_prize', '') }}円</td>
        </tr>
        <tr>
            <th>五等</th>
            <td>{{ Form::text('5th_unit', '') }}口{{ Form::text('5th_prize', '') }}円</td>
        </tr>
        <tr>
            <th>六等</th>
            <td>{{ Form::text('6th_unit', '') }}口{{ Form::text('6th_prize', '') }}円</td>
        </tr>
        <tr><th colspan="2">{{ Form::submit(); }}</th></tr>               
    </table>
    {{ Form::close() }}
    <h1>抽選結果一覧表示</h1>
    {{ Form::open(array('url' => 'resultList', 'method' => 'post')) }}
        {{ Form::submit(); }}
    {{ Form::close() }}
</body>
</html>
