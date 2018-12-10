<ul>
    <li><a href="">Link 1</a></li>
    <li><a href="">Link 2</a></li>
    <li><a href="">Link 3</a></li>
</ul>
<div>
    <span>
        <?php if ( $user === 'arzt' ): ?>

        angemeldet als arzt

        <?php elseif( $user === 'patient' ): ?>

        angemeldet als patient

        <?php else: ?>

        nicht angemeldet

        <?php endif; ?>
    </span>
</div>
