<?php

/**
 * @var \App\Kernel\View\View $view
 * @var \App\Kernel\Session\Session $session
 */

?>

<?php $view->component('start'); ?>
    <h1>Add movie page</h1>

    <form action="/admin/movies/add" method="POST">
        <p>Name</p>
        <div>
            <input name="name" type="text">
            <?php if ($session->has('name')) { ?>
                <ul>
                    <?php foreach ($session->get('name') as $error) { ?>
                    <li style="color: red"><?php echo $error ?></li>
                    <?php } ?>
                </ul>
            <?php } ?>
            <button type="submit">add</button>
        </div>
    </form>
<?php $view->component('end'); ?>