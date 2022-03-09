<?php
/**
 * @Created by          : Waris Agung Widodo (ido.alit@gmail.com)
 * @Date                : 2020-01-02 16:27
 * @File name           : _modal_topic.php
 */

?>

<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
     aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel"><?=  __('Select the topic you are interested in'); ?></h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <ul class="topic d-flex flex-wrap justify-content-center p-0">
                    <li class="d-flex justify-content-center align-items-center m-2">
                        <a href="index.php?keywords=Perikanan%20Tangkap&search=search" class="d-flex flex-column">
                            <img src="<?=  assets('images/Perikanan_Tangkap.png'); ?>" width="80" class="mb-3 mx-auto"/>
                            <?=  __('Perikanan Tangkap'); ?>
                        </a>
                    </li>
                    <li class="d-flex justify-content-center align-items-center m-2">
                        <a href="index.php?keywords=Perikanan%20Budidaya&search=search" class="d-flex flex-column">
                            <img src="<?=  assets('images/Perikanan_Budidaya.png'); ?>" width="80" class="mb-3 mx-auto"/>
                            <?=  __('Perikanan Budidaya'); ?>
                        </a>
                    </li>
                    <li class="d-flex justify-content-center align-items-center m-2">
                        <a href="index.php?keywords=Pengolahan%20Ikan&search=search" class="d-flex flex-column">
                            <img src="<?=  assets('images/Pengolahan_Ikan.png'); ?>" width="80" class="mb-3 mx-auto"/>
                            <?=  __('Pengolahan Ikan'); ?>
                        </a>
                    </li>
                    <li class="d-flex justify-content-center align-items-center m-2">
                        <a href="index.php?keywords=Pulau%20Kecil&search=search" class="d-flex flex-column">
                            <img src="<?=  assets('images/Pulau_Kecil.png'); ?>" width="80" class="mb-3 mx-auto"/>
                            <?=  __('Pulau Kecil'); ?>
                        </a>
                    </li>
                    <li class="d-flex justify-content-center align-items-center m-2">
                        <a href="index.php?keywords=Masyarakat%20Pesisir&search=search" class="d-flex flex-column">
                            <img src="<?=  assets('images/Masyarakat_Pesisir.png'); ?>" width="80" class="mb-3 mx-auto"/>
                            <?=  __('Masyarakat Pesisir'); ?>
                        </a>
                    </li>
                    <li class="d-flex justify-content-center align-items-center m-2">
                        <a href="index.php?keywords=Local%20Content&search=search" class="d-flex flex-column">
                            <img src="<?=  assets('images/Local_Content.png'); ?>" width="80" class="mb-3 mx-auto"/>
                            <?=  __('Local Content'); ?>
                        </a>
                    </li>
                    <li class="d-flex justify-content-center align-items-center m-2">
                        <a href="index.php?callnumber=6&search=search" class="d-flex flex-column">
                            <img src="<?=  assets('images/Ekspor_Perikanan.png'); ?>" width="80" class="mb-3 mx-auto"/>
                            <?=  __('Ekspor Perikanan'); ?>
                        </a>
                    </li>
                    <li class="d-flex justify-content-center align-items-center m-2">
                        <a href="index.php?callnumber=7&search=search" class="d-flex flex-column">
                            <img src="<?=  assets('images/Illegal_Fishing.png'); ?>" width="80" class="mb-3 mx-auto"/>
                            <?=  __('Illegal Fishing'); ?>
                        </a>
                    </li>
                    <li class="d-flex justify-content-center align-items-center m-2">
                        <a href="index.php?callnumber=3&search=search" class="d-flex flex-column">
                            <img src="<?=  assets('images/Ilmu_ilmu_Sosial.png'); ?>" width="80" class="mb-3 mx-auto"/>
                            <?=  __('Ilmu - Ilmu Sosial'); ?>
                        </a>
                    </li>
                    <li class="d-flex justify-content-center align-items-center m-2">
                        <a href="index.php?callnumber=9&search=search" class="d-flex flex-column">
                            <img src="<?=  assets('images/Geografi_Sejarah.png'); ?>" width="80" class="mb-3 mx-auto"/>
                            <?=  __('Geografi dan Sejarah'); ?>
                        </a>
                    </li>
                </ul>
            </div>
            <div class="modal-footer text-muted text-sm">
                <div>Icons made by <a href="https://kkp.go.id" title="Biro Humas dan KLN Kementerian Kelautan dan Perikanan">Biro Humas dan KLN Kementerian Kelautan dan Perikanan</a> from <a href="https://kkp.go.id/" title="Biro Humas dan KLN">www.kkp.go.id</a></div>
            </div>
        </div>
    </div>
</div>
