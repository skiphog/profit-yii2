<?php
/**
 * @var array $news
 * @var array $items
 * @var \app\models\Article[] $articles
 */

use yii\helpers\Html;

?>

<h1>Новости на этой неделе</h1>

<?php if (!empty($news)) : ?>
    <div class="container">
        <?php foreach ($news as $day => $items) : ?>
            <div>
                <h2>In <?php echo HTML::encode($day); ?></h2>
                <?php foreach ($items as $rubric => $articles) : ?>
                    <div>
                        <h3>Rubric: <?php echo HTML::encode($rubric); ?></h3>
                        <?php foreach ($articles as $article) : ?>
                            <article>
                                <h4><?php echo HTML::encode($article->title); ?></h4>
                                <div class="mar-b-sm"><?php echo HTML::encode($article->content); ?></div>
                                <p class="mar-b-0">Created: <?php echo HTML::encode($article->created_at); ?></p>
                                <p>Author: <?php echo HTML::encode($article->author->name); ?></p>

                                <?php if ($article->isRedacted()) : ?>
                                    <p>Обновлено</p>
                                <?php endif; ?>

                            </article>
                        <?php endforeach; ?>
                    </div>
                <?php endforeach; ?>
            </div>
        <?php endforeach; ?>
    </div>
<?php endif; ?>
