<p>Much like you can include JavaScript between <script></script> tags, you can write PHP inside <?php ?> tags. Be careful, though! In the case of PHP, you write all the code inside one set of angle brackets, meaning you can't do:</p>

<pre><?php> echo "I won't work!"; <?></pre>

Correct:

<pre><?php echo "I'll work!"; ?></pre>

<?php echo 40 + 2; ?>
