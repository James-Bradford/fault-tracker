<!-- Load Header -->
<?php
defined('BASEPATH') or exit('No direct script access allowed');
?>


<table class="table table-hover" id="dataTable">
    <thead>
        <th>ID</th>
        <th>Name</th>
        <th>Email</th>
        <th></th>
    </thead>
    <tbody>
        <?php foreach ($users as $u) { ?>
        <tr>
            <td><?php echo $u->id; ?></td>
            <td><?php echo $u->first_name . ' ' . $u->last_name; ?></td>
            <td><?php echo $u->email; ?></td>
            <td>Test</td>
        </tr>
        <?php } ?>
    </tbody>
</table>