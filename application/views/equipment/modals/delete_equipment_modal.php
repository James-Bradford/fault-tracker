<?php foreach ($equipment as $r) { ?>

    <!-- Modal Start -->
    <div class="modal rounded-0" id="deleteEquipment<?php echo $r->equipment_id ?>">
        <div class="modal-dialog modal-lg rounded-0">
            <div class="modal-content rounded-0">

                <!-- Modal Header -->
                <div class="modal-header rounded-0">
                    <h2 class="font-weight-light"><i class="fa fa-close"></i>&nbsp;Delete Confirmation</h2>
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>
                <!-- Modal Header -->

                <!-- Modal Body -->
                <div class="modal-body rounded-0">
                    <h2 class="font-weight-light">Are you sure you want to delete this equipment?</h2>
                    <h2 class="font-weight-light">This will also remove any data including fault reports associated with it.</h2>
                </div>
                <!-- Modal Body -->

                <!-- Modal Footer -->
                <div class="modal-footer">
                    <a class="btn btn-dark rounded-0" href="/equipment/remove/<?php echo $r->equipment_id ?>">Confirm</a>
                    <button type="button" class="btn btn-light rounded-0 float-right" data-dismiss="modal">Cancel</button>
                </div>
                <!-- Modal Footer -->

            </div>
        </div>
    </div>
    <!-- Modal End -->

<?php } ?>