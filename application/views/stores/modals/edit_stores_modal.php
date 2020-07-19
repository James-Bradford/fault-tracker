<?php
foreach ($stores as $s) { ?>

    <!-- Modal Start -->
    <div class="modal rounded-0" id="editStore<?php echo $s->store_number ?>">
        <div class="modal-dialog modal-lg rounded-0">
            <div class="modal-content rounded-0">

                <div class="modal-header rounded-0">
                    <h2 class="font-weight-light"><i class="fa fa-close"></i>&nbsp;Delete Confirmation</h2>
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>

                <div class="modal-body rounded-0">
                    <?php echo form_open("/stores/edit/" . $s->store_number); ?>

                    <div class="form-group">
                        <label for="store_number">Store Number</label>
                        <?php echo form_input($data = array('name' => 'store_number', 'id' => 'store_number', 'class' => 'form-control rounded-0', 'value' => $s->store_number)); ?>
                    </div>

                    <div class="form-group">
                        <label for="store_address1">Address Line 1</label>
                        <?php echo form_input($data = array('name' => 'store_address1', 'id' => 'store_address1', 'class' => 'form-control rounded-0', 'value' => $s->store_address1)); ?>
                    </div>

                    <div class="form-group">
                        <label for="store_town">Town</label>
                        <?php echo form_input($data = array('name' => 'store_town', 'id' => 'store_town', 'class' => 'form-control rounded-0', 'value' => $s->store_town)); ?>
                    </div>

                    <div class="form-group">
                        <label for="store_county">County</label>
                        <?php echo form_input($data = array('name' => 'store_county', 'id' => 'store_county', 'class' => 'form-control rounded-0', 'value' => $s->store_county)); ?>
                    </div>

                    <div class="form-group">
                        <label for="store_postcode">Postcode</label>
                        <?php echo form_input($data = array('name' => 'store_postcode', 'id' => 'store_postcode', 'class' => 'form-control rounded-0', 'value' => $s->store_postcode)); ?>
                    </div>

                    <div class="form-group">
                        <label for="store_franchisee">Franchisee</label>
                        <?php echo form_input($data = array('name' => 'store_franchisee', 'id' => 'store_franchisee', 'class' => 'form-control rounded-0', 'value' => $s->store_franchisee)); ?>
                    </div>

                    <div class="form-group">
                        <label for="store_email">Email Address</label>
                        <?php echo form_input($data = array('name' => 'store_email', 'id' => 'store_email', 'class' => 'form-control rounded-0', 'value' => $s->store_email)); ?>
                    </div>

                    <div class="form-group">
                        <label for="store_telephone">Telephone</label>
                        <?php echo form_input($data = array('name' => 'store_telephone', 'id' => 'store_telephone', 'class' => 'form-control rounded-0', 'value' => $s->store_telephone)); ?>
                    </div>

                    <div class="form-group">
                        <label for="store_company">Company</label>
                        <?php echo form_input($data = array('name' => 'store_company', 'id' => 'store_company', 'class' => 'form-control rounded-0', 'value' => $s->store_company)); ?>
                    </div>
                </div>

                <div class="modal-footer">
                    <p><?php echo form_submit($data = array('type' => 'submit', 'value' => 'Confirm Changes', 'class' => 'btn btn-dark rounded-0')); ?></p>
                    <?php echo form_close(); ?>
                    <button type="button" class="btn btn-light rounded-0 float-right" data-dismiss="modal">Cancel</button>
                </div>
            </div>
        </div>
    </div>
    <!-- Modal End -->

<?php } ?>