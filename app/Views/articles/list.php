<?= $this->extend('layout/default'); ?>
<?= $this->section('content'); ?>
<div class="row">
  <div class="col-12">
    <div class="card mb-4">
      <div class="card-header d-flex align-items-center justify-content-between">
        <strong>Article</strong>
        <a href="<?= base_url(); ?>articles/new" class="btn btn-sm btn-outline-primary px-3">Create new article</a>
      </div>
      <div class="card-body">
        <p class="text-medium-emphasis small">List all article.</p>
        <div class="table-responsive">
          <table class="table border mb-0">
            <thead class="table-light fw-semibold">
              <tr class="align-middle">
                <th class="text-center">
                  <svg class="icon">
                    <use xlink:href="<?= base_url(); ?>coreUi/assets/@coreui/icons/sprites/free.svg#cil-people"></use>
                  </svg>
                </th>
                <th>Title</th>
                <th>Usage</th>
                <th class="text-center">Category</th>
                <th></th>
              </tr>
            </thead>
            <tbody>
              <?php foreach ($articlesData as $article) : ?>
                <tr class="align-middle">
                  <td class="text-center">
                    <div class="avatar avatar-md"><img class="avatar-img" src="<?= base_url(); ?>coreUi/assets/img/avatars/1.jpg" alt="user@email.com"><span class="avatar-status bg-success"></span></div>
                  </td>
                  <td>
                    <a href="<?= base_url(); ?>articles/<?= $article['article_slug']; ?>" class="text-decoration-none">
                      <div class="text-dark"><?= $article['article_title']; ?></div>
                      <div class="small text-medium-emphasis"><span><?= $article['article_status']; ?></span> | Created at: <?= date('Y-m-d', strtotime($article['created_at'])); ?></div>
                    </a>
                  </td>
                  <td>
                    <div class="clearfix">
                      <div class="float-start">
                        <div class="fw-semibold">50%</div>
                      </div>
                      <div class="float-end"><small class="text-medium-emphasis">Jun 11, 2020 - Jul 10, 2020</small></div>
                    </div>
                    <div class="progress progress-thin">
                      <div class="progress-bar bg-success" role="progressbar" style="width: 50%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                  </td>
                  <td class="text-center">
                    <svg class="icon icon-xl">
                      <use xlink:href="<?= base_url(); ?>coreUi/assets/@coreui/icons/sprites/brand.svg#cib-cc-mastercard"></use>
                    </svg>
                  </td>
                  <td class="text-end">
                    <a href="<?= base_url(); ?>articles/<?= $article['article_slug']; ?>" class="btn btn-outline-secondary btn-sm text-dark text-decoration-none px-3">Detail</a>
                  </td>
                </tr>
              <?php endforeach; ?>
            </tbody>
          </table>
        </div>
        <nav aria-label="Page navigation">
          <ul class="pagination pagination-sm mt-3">
            <li class="page-item"><a class="page-link" href="#">Previous</a></li>
            <li class="page-item"><a class="page-link" href="#">1</a></li>
            <li class="page-item"><a class="page-link" href="#">2</a></li>
            <li class="page-item"><a class="page-link" href="#">3</a></li>
            <li class="page-item"><a class="page-link" href="#">Next</a></li>
          </ul>
        </nav>
      </div>
    </div>
  </div>
</div>
<?= $this->endSection(); ?>