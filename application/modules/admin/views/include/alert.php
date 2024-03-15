<?php

$notification = $this->session->Flashdata('notification');
if (isset($notification)) { ?>
    <div class="alert alert-custom alert-<?= $notification['alert'] ?> fade show mb-5" role="alert">
        <div class="alert-text"><?= $notification['text'] ?></div>
        <div class="alert-close">
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true"><i class="ki ki-close"></i></span>
            </button>
        </div>
    </div>
<?php } ?>