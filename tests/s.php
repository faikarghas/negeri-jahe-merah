<?php
$lang_id=$this->session->userdata('lang_id');
$base= base_url('assets/bp/');
$count=count($slider);
$img_pertama=$base.'img/bg.jpg';
if($slider){
    $img_pertama=base_url('uploads/slider/'.$slider[0]["image2"]);
}
$lang=$this->session->userdata('lang_id');
$lanjut='Lebih Lanjut';
if ($lang=='2'){
    $lanjut='Read more';
}
?>
<!DOCTYPE html>
<html lang="en">
    <head><meta http-equiv="Content-Type" content="text/html; charset=utf-8">
        <?php $this->load->view('template/meta');?>
    </head>
    <body>


        <div class="modal indexmax" id="saving_modal" tabindex="-1" role="dialog" aria-labelledby="defModalHead" aria-hidden="true">
            <div class="modal-dialog modal-sm">
                <div class="modal-content">
                    <div class="modal-body">
                        <div class="progress text-center">
                            <div id="theprogressbar" class="progress-bar progress-bar-striped active"  role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100" style="width: 45%"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div id="bp_modal" class="modal fade">
            <div class="modal-dialog modal-full">
                <div class="modal-content">
                    <a href="javascript:;" class="close_modal" data-dismiss="modal" aria-hidden="true">
                        <?php
                            if ($lang == 1) {
                                echo '<span>TUTUP</span>';
                            } else {
                                echo '<span>CLOSE</span>';
                            }
                        ?>
                    </a>
                    <div class="modal-body">
                    <?php echo $this->M_frontend->getmenu2(); ?>
                    </div>
                </div>
            </div>
        </div>




        <div id="loading">
            <div class="wraptocenter">
                <div class="wow flip"><img src="<?php echo base_url('assets/bp/img/logo-small.png')?>" class="centeredImage" /></div>
            </div>
            <ul class="bokeh">
                <li></li>
                <li></li>
                <li></li>
            </ul>
        </div>
        <script>var mwidth = window.innerWidth || document.documentElement.clientWidth || document.body.clientWidth; var baseURL='<?php echo base_url()?>'</script>
        <div id="main">
            <?php $this->load->view('template/header')?>

            <div id="main_body">
                <?php $this->load->view($main_body)?>
            </div>
            <div class="row contact_info" style="overflow: hidden;">
                <div id="section-map" class="col-xs-12 col-md-5 no-padding">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d15866.395673432748!2d106.929673!3d-6.184398!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x3382874435657afa!2sPT.%20Bina%20Pertiwi!5e0!3m2!1sid!2sid!4v1630409885445!5m2!1sid!2sid" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
                </div>

                <div  class="col-xs-12 col-md-7 no-padding">
                    <div id="head-office" class="no-gutter" style="">
                        <div class="head-office-item1">
                            <p class="no-margin bp_title" style="font-weight: bold;font-size:3em;">
                            <?php
                                if ($lang == 1) {
                                    echo 'KANTOR PUSAT';
                                } else {
                                    echo 'HEAD OFFICE';
                                }
                            ?>
                            </p><br>
                            <p class="no-margin branch">JALAN RAYA BEKASI CAKUNG BARAT,</p>
                            <p class="no-margin branch">KOTA JAKARTA TIMUR,</p>
                            <p class="no-margin branch">DAERAH KHUSUS IBUKOTA JAKARTA KM.22</p><br>
                            <div class="foot_contact">
                                <div class="icn"><i class="fa  fa-phone fa-2x"></i></div>
                                <ul>
                                    <li>021 -  46823539 / 46823540 / 46824886</li>
                                    <li>F. 021 - 4600903 / 46823570/ 46824913</li>
                                </ul>
                            </div>
                            <div class="foot_contact">
                                <div class="icn"><i class="fa  fa-fax fa-2x"></i></div>
                                <ul>
                                    <li>E. info@binapertiwi.co.id</li>
                                </ul>
                            </div>
                        </div>
                        <div class="head-office-item2">
                            <ul class="footer_site">
                                <li><a href="<?php echo base_url()?>about/gambaran-perusahaan">
                                <?php
                                    if ($lang == 1) {
                                        echo 'TENTANG KAMI';
                                    } else {
                                        echo 'ABOUT US';
                                    }
                                ?>
                                </a></li>
                                <li><a href="<?php echo base_url()?>product/tractor">
                                UNIT
                                </a></li>
                                <li><a href="<?php echo base_url()?>service/fluit-connector-house">
                                <?php
                                    if ($lang == 1) {
                                        echo 'PURNA JUAL';
                                    } else {
                                        echo 'AFTER MARKET';
                                    }
                                ?>
                                </a></li>
                                <li><a href="<?php echo base_url()?>csr">
                                <?php
                                    if ($lang == 1) {
                                        echo 'AKTIVITAS CSR';
                                    } else {
                                        echo 'OUR CARE';
                                    }
                                ?>
                                </a></li>
                                <li><a href="<?php echo base_url()?>news">
                                <?php
                                    if ($lang == 1) {
                                        echo 'BERITA TERKINI';
                                    } else {
                                        echo 'NEWS & UPDATES';
                                    }
                                ?>
                                </a></li>
                                <li><a href="<?php echo base_url()?>contact">
                                <?php
                                    if ($lang == 1) {
                                        echo 'KONTAK KAMI';
                                    } else {
                                        echo 'CONTACT US';
                                    }
                                ?>
                                </a></li>
                                <li><a href="<?php echo base_url()?>career">
                                <?php
                                    if ($lang == 1) {
                                        echo 'KARIR';
                                    } else {
                                        echo 'CAREER';
                                    }
                                ?>
                                </a></li>
                            </ul>
                        </div>
                    </div>
                </div>

            </div>
            <footer id="footer">
                <div class="col-md-12 text-center sm-p-l-10 sm-p-r-10 sm-p-t-10 p-l-100 p-r-100 bg-blue text-white" style="height:120px;position:relative;display:flex;align-items:center;">
                    <img class="footer_bg" src="<?php echo base_url('/assets/bp/img/footer.png')?>" alt="">
                    <div class="col-md-6 col-xs-12">
                        <div class="text-left fs-12 sm-text-center sm-p-b-10">
                            © Copyrights 2021 Bina Pertiwi. All Rights Reserved.
                        </div>
                    </div>
                    <div class="col-md-6 col-xs-12">
                        <div class="row animated opacity mar-bot0" data-andown="fadeIn" data-animation="animation">
                            <div class="text-right sm-text-center text-white">
                                <a href="<?php echo base_url('sitemap')?>" class="text-white" >Sitemap </a> | <a href="<?php echo base_url('privacy')?>" class="text-white" >Privacy Policy &nbsp;&nbsp;</a>
                                <ul class="social-network fs-20 text-white">
                                    <li>
                                        <a href="http://facebook.com/BinaPertiwi" class="icoFacebook text-white" title="Facebook" target="_blank">
                                            <i class="fa fa-facebook-square"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="http://google.com/+BinaPertiwiPTKotaJakartaTimur" class="icoGoogle text-white" title="Google +" target="_blank">
                                            <i class="fa fa-google-plus"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="https://www.instagram.com/pt.binapertiwi/" class="icoInstagram text-white" title="Instagram" target="_blank">
                                            <i class="fa fa-instagram"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="" class="icoInstagram text-white" title="Instagram" target="_blank">
                                            <i class="fa fa-youtube"></i>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </footer>
        </div>
        <?php $this->load->view('template/footer')?>

    </body>
</html>
