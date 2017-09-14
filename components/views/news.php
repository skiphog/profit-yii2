<?php
/** @var array $news */

use yii\helpers\Html;

?>

<div>
    <h1>Самые крутые новости</h1>
    <?php if (!empty($news)) : ?>
        <div>
            <?php foreach ($news as $article) : ?>
                <article>
                    <h2><?php echo Html::encode($article['title']); ?></h2>
                    <p><?php echo Html::encode($article['content']); ?></p>
                </article>
            <?php endforeach; ?>
        </div>
    <?php endif; ?>
</div>