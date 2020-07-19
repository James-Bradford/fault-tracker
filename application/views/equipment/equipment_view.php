<!-- Load Header -->
<?php
defined('BASEPATH') or exit('No direct script access allowed');
?>


<!-- Card Start -->
<div class="card rounded-0">
    <div class="card-body">
        <button class="btn btn-primary rounded-0 float-left" data-toggle="modal" data-target="#addEquipment"><i class="fa fa-plus"></i>&nbsp;Add Equipment</button>
    </div>
</div>
<!-- Card End -->

<!-- Card Start -->
<div class="card rounded-0 mt-4">
    <div class="card-header">
        <h2 class="font-weight-light"><i class="fa fa-truck"></i>&nbsp;<b>Equipment</b></h2>
    </div>
    <!-- Card Body Start -->
    <div class="card-body">
        <!-- Equipment Table-->
        <table class="table table-hover" id="dataTable">
            <thead>
                <th>Category</th>
                <th>Manufacturer</th>
                <th>Model</th>
                <th width="5px"></th>
                <th width="5px"></th>
                <th width="5px"></th>
            </thead>
            <tbody>
                <?php foreach ($equipment as $s) { ?>
                    <tr>
                        <td><?php echo $s->equipment_type_name; ?></td>
                        <td><?php echo $s->manufacturer_name; ?></td>
                        <td><?php echo $s->equipment_model; ?></td>

                        <!-- CRUD Buttons -->
                        <td>
                            <button class="btn float-right" data-toggle="modal" data-target="#knownFixes"><i class="fa fa-wrench"></i></button>
                        </td>
                        <td>
                            <button class="btn float-right" data-toggle="modal" data-target="#editEquipment<?php echo $s->equipment_id ?>"><i class="fa fa-pencil"></i></button>
                        </td>
                        <td>
                            <button class="btn float-right" data-toggle="modal" data-target="#deleteEquipment<?php echo $s->equipment_id ?>"><i class="fa fa-close"></i></button>
                        </td>
                    </tr>
                <?php } ?>
            </tbody>
        </table>
    </div>
    <!-- Card Body End -->

</div>
<!-- Card End -->