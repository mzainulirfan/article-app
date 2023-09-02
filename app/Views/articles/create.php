<?= $this->extend('layout/default'); ?>
<?= $this->section('content'); ?>
<div class="col-12">
  <div class="card mb-4">
    <div class="card-header"><strong>Forms layout</strong><span class="small ms-1">Horizontal form</span></div>
    <div class="card-body">
      <p class="text-medium-emphasis small">Create horizontal forms with the grid by adding the <code>.row</code> class to form groups and using the <code>.col-*-*</code> classes to specify the width of your labels and controls. Be sure to add <code>.col-form-label</code> to your <code> &lt;label&gt;</code>s as well so they’re vertically centered with their associated form controls.</p>
      <p class="text-medium-emphasis small">At times, you maybe need to use margin or padding utilities to create that perfect alignment you need. For example, we’ve removed the <code>padding-top</code> on our stacked radio inputs label to better align the text baseline.</p>
      <div class="tab-content rounded-bottom">
        <div class="tab-pane p-3 active preview" role="tabpanel" id="preview-1004">
          <form method="post" action="<?= base_url(); ?>articles/save">
            <?= csrf_field(); ?>
            <div class="row mb-3">
              <label class="col-sm-2 col-form-label" for="title">Title</label>
              <div class="col-sm-10">
                <input class="form-control form-control-sm" id="title" type="text" name="title" autofocus>
              </div>
            </div>
            <div class="row mb-3">
              <label class="col-sm-2 col-form-label" for="content">Content</label>
              <div class="col-sm-10">
                <textarea class="form-control" name="content" id="content" cols="30" rows="10"></textarea>
              </div>
            </div>
            <div class="row mb-3">
              <div class="col-sm-10 offset-sm-2">
                <div class="form-check">
                  <input class="form-check-input" id="saveAsDraft" type="checkbox" name="saveasdraft" checked>
                  <label class="form-check-label" for="saveAsDraft">Save as draft</label>
                </div>
              </div>
            </div>
            <button class="btn btn-sm btn-primary px-3" type="submit">Submit a article</button>
          </form>
        </div>
      </div>
    </div>
  </div>
</div>
<?= $this->endSection(); ?>