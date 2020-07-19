<!-- Card Start -->
<div class="card rounded-0">
    <div class="card-body">
        <a class="btn btn-primary rounded-0 float-left" href="/faults/new/<?php echo $store_number ?>"><i class="fa fa-plus"></i>&nbsp;New Fault</a>
    </div>
</div>
<!-- Card End -->

<!-- Card Start -->
<div class="card rounded-0 mt-4">
    <div class="card-header">
        <h2 class="font-weight-light"><i class="fa fa-envelope-open-o"></i>&nbsp;Open Faults for Store&nbsp;<?php echo $store_number ?></h2>
    </div>
    <!-- Card Body Start -->
    <div class="card-body">
        <table class="table table-hover" id="dataTable">
            <thead>
                <th>ID</th>
                <th>Description</th>
                <th>Report Date</th>
                <th width="5px"></th>
                <th width="5px"></th>
            </thead>
            <tbody>
                <?php foreach ($store_faults as $r) { ?>
                    <tr>
                        <td><?php echo $r->fault_id; ?></td>
                        <td><?php echo $r->fault_description; ?></td>
                        <td><?php echo $r->fault_date; ?></td>
                        <td>
                            <a class="btn float-right" href="/manufacturers/edit/<?php echo $r->fault_id ?>"><i class="fa fa-pencil"></i></a>
                        </td>
                        <td>
                            <a class="btn float-right" href="/manufacturers/remove/<?php echo $r->fault_id ?>"><i class="fa fa-close"></i></a>
                        </td>
                    </tr>
                <?php } ?>
            </tbody>
        </table>
    </div>
    <!-- Card Body End -->

</div>
<!-- Card End -->