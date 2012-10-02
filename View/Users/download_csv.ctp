<?php
$this->Csv->addRow($th);
foreach($td as $t) {
    $this->Csv->addField($t['User']);
    // .... 行を追加していく
    $this->Csv->endRow();
}
$this->Csv->setFilename($filename);
// 文字化けの場合は echo $this->Csv->render(true, 'sjis', 'utf-8');
echo $this->Csv->render();
