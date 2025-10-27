<?php

/**
 * @var \App\Kernel\View\View $view
 * @var \App\Kernel\Session\SessionInterface $session
 */

?>

<?php $view->component('start');?>
<form action="/register" method="post">
    <p>Email</p>
    <input type="text" name="email">
    <?php if ($session->has('email')) { ?>
        <ul>
            <?php foreach ($session->getFlash('email') as $error) { ?>
                <li style="color: red"><?php echo $error ?></li>
            <?php } ?>
        </ul>
    <?php } ?>
    <p>Password</p>
    <input type="password" name="password">
    <?php if ($session->has('password')) { ?>
        <ul>
            <?php foreach ($session->getFlash('password') as $error) { ?>
                <li style="color: red"><?php echo $error ?></li>
            <?php } ?>
        </ul>
    <?php } ?>
    <button type="submit">Save</button>
</form>
<?php $view->component('end');?>

