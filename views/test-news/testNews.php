<?php
use app\components\NewsWidget;
?>

<div>Тут какой-то конетент</div>

<div>
    <?php echo NewsWidget::widget(['size' => 10]); ?>
</div>

<div>Тут еще что-то</div>