<section class="main-content-wrapper dashboard_content" style="background:#fbfbfa;padding:16px;">
    <div class="container-fluid">
        <div class="row">
            <div class="col-xl-12">
                <div class="ql-box" style="border:1px solid #E7DDCC;border-radius:12px;overflow:hidden;background:#FFFFFF;">
                    <div class="ql-header" style="padding:16px 24px;border-bottom:1px solid #E7DDCC;">
                        <h3 class="ql-title" style="margin:0;font-size:16px;font-weight:600;color:rgb(28,26,22);">Dashboard Design Preview</h3>
                    </div>
                    <div class="ql-body" style="padding:0;">
                        <?php if (!empty($design_image)) { ?>
                            <img src="<?php echo $design_image; ?>" alt="Dashboard Design" style="display:block;width:100%;height:auto;object-fit:contain;background:#F8F7F5;">
                        <?php } else { ?>
                            <div style="padding:24px;color:#6E665A;font-size:14px;">
                                Design image not found.
                            </div>
                        <?php } ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
