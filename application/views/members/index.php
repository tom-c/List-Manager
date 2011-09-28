<?php foreach ($members as $member): ?>

    <h2><?php echo $member['name'] ?></h2>
    <div id="main">
        <?php echo $member['email'] ?>
    </div>
    <p><a href="members/<?php echo $member['id'] ?>">View member</a></p>

<?php endforeach ?>