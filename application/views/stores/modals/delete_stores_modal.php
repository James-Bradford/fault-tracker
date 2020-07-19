<?php foreach ($stores as $s) { ?>

    <!-- Modal Start -->
<div class="modal rounded-0" id="deleteStore<?php echo $s->store_number ?>">
    <div class="modal-dialog modal-lg rounded-0">
        <div class="modal-content rounded-0">

            <div class="modal-header rounded-0">
                <h2 class="font-weight-light"><i class="fa fa-close"></i>&nbsp;Delete Confirmation</h2>
                <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>

            <div class="modal-body rounded-0">
                <h2 class="font-weight-light">Are you sure you want to delete this store?</h2>
                <h2 class="font-weight-light">This will also remove any data associated with it.</h2>
            </div>

            <div class="modal-footer">
                <a class="btn btn-dark rounded-0" href="/stores/remove/<?php echo $s->store_number ?>">Confirm</a>
                <button type="button" class="btn btn-light rounded-0 float-right" data-dismiss="modal">Cancel</button>
            </div>
        </div>
    </div>
</div>
<!-- Modal End -->

<?php } ?>