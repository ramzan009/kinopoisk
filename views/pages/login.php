<?php

/**
 * @var \App\Kernel\View\View $view
 * @var \App\Kernel\Session\SessionInterface $session
 */

?>

<?php $view->component('start'); ?>
<form action="/login" method="post">
    <?php if ($session->has('error')) { ?>
        <p style="color: red">
            <?php echo $session->getFlash('error'); ?>
        </p>
    <?php } ?>
    <p>Email</p>
    <input type="text" name="email">
    <p>Password</p>
    <input type="password" name="password">
    <button type="submit">Save</button>
</form>
<?php $view->component('end'); ?>

