<?php

use App\Controllers\Article;
?>
<?= $this->extend('layout/default'); ?>
<?= $this->section('content'); ?>
<div class="row">
  <div class="col-12">
    <div class="card mb-4">
      <div class="card-header d-flex align-items-center justify-content-between">
        <strong>Article</strong>
      </div>
      <div class="card-body">
        <h5 class="card-title"><?= $articleBySlug['article_title']; ?></h5>
        <span class="badge bg-warning mb-2">Category here</span>
        <p class="text-medium-emphasis small"><?= $articleBySlug['article_content']; ?></p>
        <hr class="mt-3">
        <p class="text-secondary">status <span class="badge bg-primary"><?= $articleBySlug['article_status']; ?></span></p>
        <div class="d-flex justify-content-between">
          <div>
            <button class="btn btn-danger">Remove article</button>
            <button class="btn btn-primary">Edit article</button>
          </div>
          <a href="<?= base_url(); ?>articles" class="btn btn-outline-secondary">Back</a>
        </div>
      </div>
    </div>
  </div>
</div>
<?= $this->endSection(); ?>