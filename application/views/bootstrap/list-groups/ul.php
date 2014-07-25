<ul class="list-group">
    <?php for($li=0; $li<count($list_groups); $li++) : ?>            
    <li class="list-group-item"><?php echo $list_groups[$li]['text']; ?></li>
    <?php endfor; ?>
</ul>