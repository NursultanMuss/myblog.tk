<?php
/**
 * Created by PhpStorm.
 * User: HomeO
 * Date: 31.10.2016
 * Time: 22:54
 */
use yii\helpers\Html;
use yii\widgets\ActiveForm;

$this->title="Общение";
$this->registerMetaTag([
    'name' => 'description',
    'content' => 'Мой личный сайт'
]);
$this->registerMetaTag([
    'name' => 'keywords',
    'content' => 'Нурсултан Мусабаев, личный сайт'
])
?>
<div class="contact-page main grid-wrap">

    <header class="grid col-full">
        <hr>
        <p class="fleft">Contact</p>
    </header>



    <aside class="grid col-one-quarter mq2-col-one-third mq3-col-full">

        <p class="mbottom">We would love to talk to you and answer all of your questions</p>

        <address class="mbottom">
            <h5>DESIGNA studio </h5>
            3615 Fake Street <br >
            Level 5, Door 123 <br >
            1010 WHATEVER<br >
            <a href="http://maps.google.com">Get directions</a>
        </address>

        <p class="mbottom">
            00 77 66 55 33<br >
            00 77 66 55 33</p>
        <p class="mbottom">
            <a href="#">address@email.com</a><br >
            <a href="#">Designa Studio on Facebook</a><br >
            <a href="#">@designstudio on Twitter</a><br >
            <a href="#">Designa Studio on Google+</a>
        </p>
        <p>
        <h6>Openning hours: </h6>
        Monday to Friday <br >
        09h00 to 17h00
        </p>

    </aside>

    <section class="grid col-three-quarters mq2-col-two-thirds mq3-col-full">
        <?php $f=ActiveForm::begin()?>
        <h2>Drop us a message</h2>
        <p class="warning">Don't forget to put your own email address in the php file!</p>

        <form id="contact_form" class="contact_form" action="contact.php" method="post" name="contact_form">
            <ul>
                <li>
                    <label for="name">Your name:</label>
                    <input type="text" name="name" id="name" required class="required" >
                </li>
                <li>
                    <label for="email">Email:</label>
                    <input type="email" name="email" id="email" required placeholder="JohnDoe@gmail.com" class="required email">
                </li>
                <li>
                    <label for="message">Message:</label>
                    <textarea name="message" id="message" cols="100" rows="6" required  class="required" ></textarea>
                </li>
                <li>
                    <button type="submit" id="submit" name="submit" class="button fright">Send it</button>
                </li>
            </ul>
        </form>
        <?php ActiveForm::end();?>
    </section>

</div> <!--main-->
