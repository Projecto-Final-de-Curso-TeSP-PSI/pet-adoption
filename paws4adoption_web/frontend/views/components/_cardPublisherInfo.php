<?php
/* @var $publisherUsername */
/* @var $publisherContact */

/* @var $publisherEmail */

use yii\helpers\Html;

$loggedUserId = Yii::$app->user->id;
?>

<?php
if ($loggedUserId == null) {
    echo "Informação só disponiveis para utilizadores autenticados";
} else {
    echo "<div class=\"single-user-card hover-card mb-50\">
    <div class=\"p-30\"> " . Html::img('@web/images/user/contact.png', ['alt' => 'User Image', 'class' => 'rounded-circle'])
    . " <h4 class=\"mb-0 mt-4\">" . $publisherUsername . "</h4>
    </div>
    <ul class=\"user-card-foot\">
        <div class=\"row\">
            <div class=\"col-6\">

                <strong>Contato</strong>
                <p>" . $publisherContact . "</p>
            </div>
            <div class=\"col-6\">
                <strong>Email</strong>
                <p> " . $publisherEmail . "</p>
            </div>
        </div>
    </ul>
</div>";
} ?>

