<!-- File: src/Template/Articles/edit.ctp -->
<link href="/webroot/css/bootstrap.css" rel="stylesheet">
<link href="/webroot/css/basic.css" rel="stylesheet">
<?php echo $this->element('topbar') ?>
<h1>Edit Article</h1>
<?php
echo $this->Form->create($article);
echo $this->Form->input('title');
echo $this->Form->input('body', ['rows' => '3']);
echo $this->Form->button(__('Save Article'));
echo $this->Form->end();
?>

  <!-- jQuery (Bootstrap 的 JavaScript 插件需要引入 jQuery) -->
  <script src="/webroot/js/jquery-3.1.1.min.js"></script>
  <!-- 包括所有已编译的插件 -->
  <script src="/webroot/js/bootstrap.min.js"></script>