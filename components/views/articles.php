<?php
/** @var \app\models\Article[] $news */

use yii\helpers\Html;

?>

<div>
    <h1>Новости из БД</h1>
    <?php if (!empty($news)) : ?>
        <div class="container">
            <?php foreach ($news as $article) : ?>
                <article>
                    <h2><?php echo Html::encode($article->title); ?></h2>
                    <div><?php echo Html::encode($article->content); ?></div>
                    <p>Author: <?php echo Html::encode($article->author->name); ?></p>
                    <p>Created: <?php echo Yii::$app->formatter->asDate($article->created_at); ?></p>
                </article>
            <?php endforeach; ?>
        </div>
    <?php endif; ?>
</div>