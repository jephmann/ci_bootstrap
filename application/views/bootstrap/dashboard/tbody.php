
<tbody>
    <?php for($th=0;$th<count($table_th);$th++) : ?>
    <tr>
        <td><?php echo $th; ?></td>
        <td><?php echo (2 * $th); ?></td>
        <td><?php echo (3 * $th); ?></td>
        <td><?php echo (5 * $th); ?></td>
        <td><?php echo (9 * $th); ?></td>
    </tr>                
    <?php endfor; ?>
</tbody>