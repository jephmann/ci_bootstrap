
<table class="table table-bordered">
    <thead>
        <tr>
            <?php for($th=0;$th<count($table_th);$th++) : ?>
            <th><?php echo $table_th[$th]; ?></th>                    
            <?php endfor; ?>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td rowspan="2">1</td>
            <td>Mark</td>
            <td>Otto</td>
            <td>@mdo</td>
        </tr>
        <tr>
            <td>Mark</td>
            <td>Otto</td>
            <td>@TwBootstrap</td>
        </tr>
        <tr>
            <td>2</td>
            <td>Jacob</td>
            <td>Thornton</td>
            <td>@fat</td>
        </tr>
        <tr>
            <td>3</td>
            <td colspan="2">Larry the Bird</td>
            <td>@twitter</td>
        </tr>
    </tbody>
</table>