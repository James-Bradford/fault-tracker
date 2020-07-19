<!-- Assign Users Modal Start -->
<div class="modal rounded-0" id="assignUsers">
    <div class="modal-dialog modal-lg rounded-0">
        <div class="modal-content rounded-0">

            <div class="modal-header rounded-0">
                <h2 class="font-weight-light modal-title"><i class="fa fa-plus"></i>&nbsp;Assign Users</h2>
                <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>

            <?php echo form_open('/stores/assign/users/' . $id); ?>

            <div class="modal-body rounded-0">
                <table class="table table-hover" id="dataTable4">
                    <thead>
                        <th>ID</th>
                        <th>Full Name</th>
                        <th width="5px"></th>
                    </thead>
                    <tbody>
                        <?php foreach ($users as $r) { ?>
                            <tr>
                                <td><?php echo $r->id; ?></td>
                                <td><?php echo $r->first_name . ' ' . $r->last_name; ?></td>
                                <td>
                                    <?php echo form_checkbox(array('value' => $r->id, 'name' => 'user_id[]', 'id' => 'user_id')) ?>
                                </td>
                            </tr>
                        <?php } ?>
                    </tbody>
                </table>

                <hr />

                <div class="modal-footer">
                    <button class="btn btn-dark rounded-0" type="submit"><i class="fa fa-plus"></i>&nbsp;Assign</button>
                </div>

                <?php echo form_close(); ?>

            </div>
        </div>
    </div>
</div>
<!-- Assign Users Modal End -->