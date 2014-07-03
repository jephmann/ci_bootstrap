            <h2 class="sub-header"><?php echo $h2 ?></h2>
            <div class="table-responsive">
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <?php for($th=0;$th<count($thead);$th++) : ?>
                            <th><?php echo $thead[$th] ?></th>                
                            <?php endfor; ?>
                        </tr>
                    </thead>
                    <tbody>
                        <?php for($th=0;$th<count($thead);$th++) : ?>
                        <tr>
                            <td><?php echo $th ?></td>
                            <td><?php echo (2 * $th) ?></td>
                            <td><?php echo (3 * $th) ?></td>
                            <td><?php echo (5 * $th) ?></td>
                            <td><?php echo (9 * $th) ?></td>
                        </tr>                
                        <?php endfor; ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>