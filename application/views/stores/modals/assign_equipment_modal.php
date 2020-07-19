<!-- Assign Equipment Modal Start -->
<div class="modal rounded-0" id="assignEquipment">
    <div class="modal-dialog modal-lg rounded-0">
        <div class="modal-content rounded-0">

            <div class="modal-header rounded-0">
                <h2 class="font-weight-light modal-title"><i class="fa fa-plus"></i>&nbsp;Assign Equipment</h2>
                <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>

            <?php echo form_open('/stores/assign/equipment/' . $id); ?>

            <div class="modal-body rounded-0">
                <table class="table table-hover" id="dataTable">
                    <thead>
                        <th>Type</th>
                        <th>Manufacturer</th>
                        <th>Model</th>
                        <th width="5px"></th>
                    </thead>
                    <tbody>
                        <?php foreach ($equipment as $s) { ?>
                            <tr>
                                <td><?php echo $s->equipment_type_name; ?></td>
                                <td><?php echo $s->manufacturer_name; ?></td>
                                <td><?php echo $s->equipment_model; ?></td>
                                <td>
                                    <?php echo form_radio(array('value' => $s->equipment_id, 'name' => 'equipment_id')) ?>
                                </td>
                            </tr>
                        <?php } ?>
                    </tbody>
                </table>

                <hr />

                <div class="form-group">
                    <label for="equipment_location">Equipment Location</label>
                    <?php echo form_input($data = array('name' => 'equipment_location', 'id' => 'equipment_location', 'class' => 'form-control w-50 rounded-0')); ?>
                </div>

                <div class="modal-footer">
                    <button class="btn btn-dark rounded-0" type="submit"><i class="fa fa-plus"></i>&nbsp;Assign</button>
                </div>

                <?php echo form_close(); ?>

            </div>
        </div>
    </div>
</div>
<!-- Assign Equipment Modal End -->
