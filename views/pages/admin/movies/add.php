<?php

/**
 * @var \App\Kernel\View\View $view
 * @var \App\Kernel\Session\Session $session
 */

?>

<?php $view->component('start');?>
    <h1>Add movie page</h1>

    <form action="/admin/movies/add" method="POST">
        <p>Name</p>
        <div>
            <input name="name" type="text">
            <button type="submit">add</button>
        </div>
    </form>
<?php $view->component('end');?>