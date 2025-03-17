<div class="container latest-information">
  <div class="section-heading">
    <img src="<?php print path_to_theme(); ?>/images/latest-info-icon.png" alt="Icon">
    <h2 class="fw-bold">Latest Information</h2>
  </div>

  <div class="row g-4 ms-5 me-5">
    <?php foreach ($rows as $row): ?>
      <div class="col-md-4">
        <div class="info-card">
          <?php print $row; ?>
        </div>
      </div>
    <?php endforeach; ?>
  </div>
</div>
