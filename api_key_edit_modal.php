<div class="modal" id="editApiKeyModal<?php echo $api_key_id; ?>" tabindex="-1">
  <div class="modal-dialog">
    <div class="modal-content bg-dark">
      <div class="modal-header">
        <h5 class="modal-title"><i class="fa fa-fw fa-key"></i> <?php echo $api_key_name; ?></h5>
        <button type="button" class="close text-white" data-dismiss="modal">
          <span>&times;</span>
        </button>
      </div>
      <form action="post.php" method="post" autocomplete="off">
        <input type="hidden" name="api_key_id" value="<?php echo $api_key_id; ?>">

        <div class="modal-body bg-white">

          <div class="form-group">
            <label>Name <strong class="text-danger">*</strong></label>
            <div class="input-group">
              <div class="input-group-prepend">
                <span class="input-group-text"><i class="fa fa-fw fa-key"></i></span>
              </div>
              <input type="text" class="form-control" name="name" placeholder="Key Name" value="<?php echo $api_key_name; ?>" required autofocus>
            </div>
          </div>

          <div class="form-group">
            <label>Expiration Date</label>
            <div class="input-group">
              <div class="input-group-prepend">
                <span class="input-group-text"><i class="fa fa-fw fa-calendar"></i></span>
              </div>
              <input type="date" class="form-control" name="expire" value="<?php echo $api_key_expire; ?>">
            </div>
          </div>

        </div>
        <div class="modal-footer bg-white">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
          <button type="submit" name="edit_api_key" class="btn btn-primary">Save</button>
        </div>
      </form>
    </div>
  </div>
</div>