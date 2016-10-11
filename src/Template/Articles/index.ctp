<!-- File: src/Template/Articles/index.ctp -->
<html>
<head>
<?php echo $this->Html->charset(); ?>
<link href="/webroot/css/bootstrap.css" rel="stylesheet">
<link href="/webroot/css/basic.css" rel="stylesheet">
<title><?php echo $title?></title>
</head>
<body>
<?php echo $this->element('topbar') ?>
<h1>Blog articles</h1>
<?= $this->Html->link('Add Article', ['action' => 'add']) ?>
<table>
    <tr>
        <th>Id</th>
        <th>Category</th>
        <th>Title</th>
        <th>Created</th>
    </tr>

<?php foreach ($articles as $article): ?>
    <tr>
        <td><?= $article->id ?></td>
        <td><?php foreach ($categories as $category){
                if ($category->id == $article->category_id)
                    echo $category->name;
            } ?>
        </td>
        <td>
            <?= $this->Html->link($article->title, ['action' => 'view',$article->id]) ?>
        </td>

        <td>
            <?= $article->created->format(DATE_RFC850) ?>
        </td>
        <td>
            <?= $this->Form->postLink(
                'Delete',
                ['action' => 'delete', $article->id],
                ['confirm' => 'Are you sure?'])
            ?>
            <?= $this->Html->link('Edit', ['action' => 'edit', $article->id])?>
        </td>
    </tr>
<?php endforeach; ?>
</table>
      <!-- jQuery (Bootstrap 的 JavaScript 插件需要引入 jQuery) -->
      <script src="/webroot/js/jquery-3.1.1.min.js"></script>
      <!-- 包括所有已编译的插件 -->
      <script src="/webroot/js/bootstrap.min.js"></script>
</body>
</html>