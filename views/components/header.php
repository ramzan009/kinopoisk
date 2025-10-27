<?php

/**
 * @var \App\Kernel\Auth\AuthInterface $auth
 */

$user = $auth->user();

?>

<header>
    <?php if ($auth->check()) { ?>
        <h2>User: <?php echo $user->email() ?></h2>
        <form action="/logout" method="post">
            <button>logout</button>
        </form>

        <hr>
    <?php } ?>
</header>