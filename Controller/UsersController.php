<?php
class UsersController extends AppController {
    var $name = 'Users';
    // Csvヘルパーを読み込む
    var $helpers = array('Html', 'Form', 'Csv');

    function download_csv() {
        $this->layout = false;
        $filename = 'Csvダウンロード_'.date('YmdHis');
        $genders = array('1' => '男性', '2' => '女性');
        // 表の一行目を作成
        $th = array('id', 'username', 'gender', 'status');
        // 表の内容を取得
        $td = $this->User->find('all', array('fields' => $th));
        $this->set(compact('filename', 'genders', 'th', 'td'));
    }
}
