<div class="col-12 col-sm-9 col-md-6 col-lg-4">
    <div class="sidebar-area">

        <!-- Newsletter Widget -->
        <div class="sidebar-area">

            <!-- Newsletter Widget -->
            <div class="single-widget-area newsletter-widget mb-30">
                  <a href="https://www.youtube.com/@truongcaoangcongnghebachkh9439" title="Nguồn ảnh GIF: https://www.pinterest.com/pin/672514156854731562/"><img src="img/core-img/ezgif.com-loop-count.gif" alt=""></a>
            </div>
        </div>

        <!-- Latest News Widget -->
        <div class="single-widget-area news-widget mb-30">
            <h4>Tin mới nhất</h4>

            <?php

            $baiDangDao = new BaiDangDao();
            $listMoiNhat = $baiDangDao->topMoiNhat();
            $index = 0;
            $totalShow = count($listMoiNhat);
            $smallPost = $totalShow / 2;

            for ($index = 0; $index < $smallPost; $index++) {
            ?>
                <!-- Single News Area -->
                <div class="single-blog-post d-flex style-4 mb-30">
                    <!-- Blog Thumbnail -->
                    <div class="blog-thumbnail">
                        <a href="../Controller/BaiDangController.php?single-post=<?php echo ($listMoiNhat[$index]->MaBaiDang); ?>&phong-tro=<?php echo ($listMoiNhat[$index]->MaPhong); ?>">
                            <img src="<?php echo ($listMoiNhat[$index]->HinhAnh); ?>" alt="<?php echo ($listMoiNhat[$index]->TieuDe); ?>">
                        </a>
                    </div>

                    <!-- Blog Content -->
                    <div class="blog-content">
                        <span class="post-date">
                            <?php echo ($listMoiNhat[$index]->ThoiGiagDang); ?>
                        </span>
                        <a href="../Controller/BaiDangController.php?single-post=<?php echo ($listMoiNhat[$index]->MaBaiDang); ?>&phong-tro=<?php echo ($listMoiNhat[$index]->MaPhong); ?>" class="post-title">
                            <?php echo ($listMoiNhat[$index]->TieuDe); ?>
                        </a>
                        <span class="post-date">
                            <b><?php echo number_format($listMoiNhat[$index]->GiaPhong); ?></b>
                            / tháng
                        </span>
                        <br>
                        <span class="post-author">Đăng bởi:
                            <?php echo ($listMoiNhat[$index]->HoTen); ?>
                        </span>
                        <span class="post-view-rate" style="float: none">
                            <?php echo ($listMoiNhat[$index]->LuotXem); ?> lượt xem
                        </span>
                    </div>
                </div>

            <?php } ?>
        </div>
        <?php
        /* @var $baiDang BaiDang */
        for (; $index < $totalShow; $index++) {
        ?>
            <!-- Single Widget Area -->
            <div class="single-widget-area">

                <!-- Single News Area -->
                <div class="single-blog-post style-2 mb-5">
                    <!-- Blog Thumbnail -->
                    <div class="blog-thumbnail">
                        <a href="../Controller/BaiDangController.php?single-post=<?php echo ($listMoiNhat[$index]->MaBaiDang); ?>&phong-tro=<?php echo ($listMoiNhat[$index]->MaPhong); ?>">
                            <img src="<?php echo ($listMoiNhat[$index]->HinhAnh); ?>" alt="<?php echo ($listMoiNhat[$index]->TieuDe); ?>">
                        </a>
                    </div>

                    <!-- Blog Content -->
                    <div class="blog-content">
                        <span class="post-date">
                            <?php echo ($listMoiNhat[$index]->ThoiGiagDang); ?>
                        </span>
                        <span class="post-view-rate">
                            <?php echo ($listMoiNhat[$index]->LuotXem); ?> lượt xem
                        </span>
                        <a href="../Controller/BaiDangController.php?single-post=<?php echo ($listMoiNhat[$index]->MaBaiDang); ?>&phong-tro=<?php echo ($listMoiNhat[$index]->MaPhong); ?>" class="post-title">
                            <?php echo ($listMoiNhat[$index]->TieuDe); ?>
                        </a>
                        <span class="post-date">
                            <b><?php echo number_format($listMoiNhat[$index]->GiaPhong); ?></b>
                            / tháng
                        </span>
                        <br>
                        <span class="post-author">Đăng bởi:
                            <?php echo ($listMoiNhat[$index]->HoTen); ?>
                        </span>
                    </div>
                </div>
            <?php } ?>

            </div>

    </div>
</div>