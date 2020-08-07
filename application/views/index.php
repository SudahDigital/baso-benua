<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Baso Benua</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.1/css/all.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.0.0/animate.min.css"/>
    <link rel="stylesheet" href="<?=base_url()?>assets/css/style.css">
    <link rel="stylesheet" href="<?=base_url()?>assets/css/responsive.css">   
</head>
<body data-spy="scroll" data-target="#navbarNav" data-offset="200">
    
    <header>
        <nav class="navbar navbar-expand-lg navbar-light fixed-top">
            <div class="container">
            <a class="navbar-brand text-white" href="#"><strong>Baso Benua</strong></a>
            <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
              <ul class="navbar-nav">
                <li class="nav-item active">
                  <a class="nav-link" href="#">Home</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="#fitur">Fitur</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="#benefit">Benefit</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#produk">Produk</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#testimoni">Testimoni</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#informasi">Informasi</a>
                </li>
                
              </ul>
            </div>
        </div>
          </nav>
    </header>

    <!-- Hero section -->
    <section id="hero">

        <div class="container">

            <div class="row main-hero-content">

                    <div class="col-md-6">
                        <h1 class="animate__animated animate__bounceInLeft">BASO DAGING PREMIUM DENGAN PROSES PABRIK</h1>
                        <div class="d-inline-block d-md-none text-center animate__animated animate__jello">
                            <img src="assets/img/fotobanner.png" class="img-fluid w-50" alt="">
                        </div>
                        <p class="animate__animated animate__bounceInLeft">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Non architecto facere asperiores praesentium cumque voluptatum, quod labore quas quo rem quos deserunt earum ipsum inventore, doloremque maiores? Recusandae, mollitia quis!</p>
                        <div class="hero-buttons animate__animated animate__jello">
                            <a href="#produk" class="btn btn-white">Beli Sekarang</a>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="image-box animate__animated animate__jello">
                            <img src="assets/img/fotobanner.png" class="img-fluid" alt="">
                        </div>
                    </div>

            </div>

        </div>

    </section>

     <!-- Fitur section -->
     <section id="fitur">

        <div class="container">

            <div class="row section-title justify-content-center">
                <h2 class="section-title-heading">Fitur</h2>
            </div>

            <div class="row mt-5">

                <div class="col-md-6 order-2 order-md-1 my-auto" id="textFitur">
                    <?php foreach ($fitur as $key_fitur => $fitur): ?>
                    <h4><i class="fas fa-check mb-2 mr-2"></i> <?=$fitur['fitur']?></h4>
                    <?php endforeach ?>
                </div>
                <div class="col-md-6 order-1 order-md-2 text-center">
                    <img src="assets/img/feature.png" id="imageFiturDesktop" class="d-none d-md-inline-block img-fluid w-100" alt="">
                    <img src="assets/img/feature.png" id="imageFiturMobile" class="d-inline-block d-md-none img-fluid w-50" alt="">
                </div>
            </div>

        </div>

     </section>

     <!-- Benefit section -->
     <section id="benefit">

        <div class="container">

            <div class="row section-title justify-content-center">
                <h2 class="section-title-heading">Benefit</h2>
            </div>

            <div class="row mt-5 mb-5" id="benefitContent">

                <div class="col-md-6 mb-3">
                    <div class="benefit-block">
                        <i class="fas fa-lightbulb fa-3x mb-3"></i>
                        <h3 class="text-center">Solusi makanan bergizi utk keluarga</h3>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Vitae illum asperiores deleniti. Facere, possimus 
                            architecto necessitatibus alias veritatis aperiam eius quibusdam vel ducimus fuga 
                            delectus, velit, temporibus consequatur voluptatibus a.</p>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="benefit-block">
                        <i class="fas fa-user-shield fa-3x mb-3"></i>
                        <h3 class="text-center">Aman untuk Keluarga</h3>
                        <p class="mt-1">Lorem ipsum dolor sit amet consectetur adipisicing elit. Vitae illum asperiores deleniti. Facere, possimus 
                            architecto necessitatibus alias veritatis aperiam eius quibusdam vel ducimus fuga 
                            delectus, velit, temporibus consequatur voluptatibus a.</p>
                    </div>
                </div>

            </div>


        </div>

    </section>
    
    <!-- Produk section -->
    <section id="produk">

        <div class="container">

            <div class="row section-title justify-content-center">
                <h2 class="section-title-heading">Produk</h2>
            </div>

            <div class="row">
                <?php foreach($product as $key => $value): ?>
                <div class="col-md-6" style="margin-bottom: 60px;">
                    <div class="produk-table w-100">
                        <div class="row">
                            <div class="col-5">
                                <img src="<?=base_url().$value['image']?>" class="img-fluid w-100 h-100" alt="">
                            </div>
                            <div class="col-7 my-auto pl-0">
                                <div class="table-header text-center">
                                    <h4 class="mb-0"><?=$value['name']?></h4>
                                    <p class="mb-0"><?=$value['description']?></p>
                                    <p>Rp <?=number_format($value['harga'], 0, '', '.')?></p>
                                    <div class="px-1 py-2 mx-auto">
                                        <button class="btn btn-warning button_minus" onclick="button_minus(<?=$value['id']?>,'minus')" style="border-radius: 100% !important; padding: 5px 13px;">-</button>
                                        <p id="show_<?=$value['id']?>" class="mr-1 ml-1 d-inline" style="color: #000 !important;">1</p>
                                        <button class="btn btn-warning button_plus" onclick="button_minus(<?=$value['id']?>,'plus')" style="border-radius: 100% !important; padding: 5px 13px;">+</button>
                                    </div>
                                </div>
                                <div class="table-footer text-center">
                                    <input type="hidden" id="value_mount_<?=$value['id']?>" value="1">
                                    <input type="button" onclick="addtochart(<?=$value['id']?>)" class="btn btn-success button-tambah" value="Tambah">
                                </div>
                            </div>
                        </div>
    
                    </div>
                </div>
                <?php endforeach; ?>
            </div>
        </div>

    </section> 
   <!-- Testimoni section -->
    <section id="testimoni">

        <div class="container">

            <div class="row section-title justify-content-center">
                <h2 class="section-title-heading">Testimoni</h2>
            </div>

            <div class="row">

                <div class="col-md-6" style="margin-bottom: 60px;margin-top: 60px;">
                    <div class="produk-table w-100">
                        <div class="row">
                            <div class="col-md-5">
                                <img src="https://www.atlassian.com/dam/jcr:ba03a215-2f45-40f5-8540-b2015223c918/Max-R_Headshot%20(1).jpg" class="img-fluid w-100 h-100" alt="">
                            </div>
                            <div class="col-md-7 my-auto pl-0">
                                <div class="table-header text-center">
                                    <h4 class="mb-0">Anonimous</h4>
                                    <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Non architecto facere asperiores praesentium cumque voluptatum, quod labore quas quo rem quos deserunt earum ipsum inventore, doloremque maiores? Recusandae, mollitia quis!</p>
                                </div>
                            </div>
                        </div>
    
                    </div>
                </div>
                <div class="col-md-6" style="margin-bottom: 60px;margin-top: 60px;">
                    <div class="produk-table w-100">
                        <div class="row">
                            <div class="col-md-5">
                                <img src="data:image/jpeg;base64,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" class="img-fluid w-100 h-100" alt="">
                            </div>
                            <div class="col-md-7 my-auto pl-0">
                                <div class="table-header text-center">
                                    <h4 class="mb-0">Anonimous</h4>
                                    <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Non architecto facere asperiores praesentium cumque voluptatum, quod labore quas quo rem quos deserunt earum ipsum inventore, doloremque maiores? Recusandae, mollitia quis!</p>
                                </div>
                            </div>
                        </div>
    
                    </div>
                </div>
                <div class="col-md-6" style="margin-bottom: 60px;margin-top: 60px;">
                    <div class="produk-table w-100">
                        <div class="row">
                            <div class="col-md-5">
                                <img src="https://www.atlassian.com/dam/jcr:ba03a215-2f45-40f5-8540-b2015223c918/Max-R_Headshot%20(1).jpg" class="img-fluid w-100 h-100" alt="">
                            </div>
                            <div class="col-md-7 my-auto pl-0">
                                <div class="table-header text-center">
                                    <h4 class="mb-0">Anonimous</h4>
                                    <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Non architecto facere asperiores praesentium cumque voluptatum, quod labore quas quo rem quos deserunt earum ipsum inventore, doloremque maiores? Recusandae, mollitia quis!</p>
                                </div>
                            </div>
                        </div>
    
                    </div>
                </div>
                <div class="col-md-6" style="margin-bottom: 60px;margin-top: 60px;">
                    <div class="produk-table w-100">
                        <div class="row">
                            <div class="col-md-5">
                                <img src="https://www.atlassian.com/dam/jcr:ba03a215-2f45-40f5-8540-b2015223c918/Max-R_Headshot%20(1).jpg" class="img-fluid w-100 h-100" alt="">
                            </div>
                            <div class="col-md-7 my-auto pl-0">
                                <div class="table-header text-center">
                                    <h4 class="mb-0">Anonimous</h4>
                                    <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Non architecto facere asperiores praesentium cumque voluptatum, quod labore quas quo rem quos deserunt earum ipsum inventore, doloremque maiores? Recusandae, mollitia quis!</p>
                                </div>
                            </div>
                        </div>
    
                    </div>
                </div>
            </div>
        </div>

    </section> 


    <!-- Informasi section -->
    <section id="informasi">

        <div class="container">

            <div class="row section-title justify-content-center">
                <h2 class="section-title-heading">Informasi</h2>
            </div>

            <div class="row mt-5">

                <div class="col-md-8 offset-md-2">
                    <h4><i class="fas fa-arrow-right mb-2 mr-2"></i> Bakso Urat hanya bisa simpan 3 minggu di freezer</h4>
                    <h4><i class="fas fa-arrow-right mb-2 mr-2"></i> Bakso Gepeng 1 minggu di chiller</h4>
                    <h4><i class="fas fa-arrow-right mb-2 mr-2"></i> Bumbu ,minyak bawang, sambel ,bawang kering</h4>
                </div>

            </div>


        </div>

    </section> 

    <!-- Footer section -->
    <footer id="footer">

        <div class="container">

            <div class="row d-flex flex-column align-items-center">

                <div class="footer-logo mb-4 text-white">
                    <h3><strong>Baso Benua</strong></h3>
                </div>
                <div class="social-icons">
                    <a href="#"><i class="fab fa-facebook"></i></a>
                    <a href="#"><i class="fab fa-twitter"></i></a>
                    <a href="#"><i class="fab fa-youtube"></i></a>
                    <a href="#"><i class="fab fa-instagram"></i></a>
                    <a href="#"><i class="fab fa-linkedin-in"></i></a>
                </div>
                <div class="copyright text-center">
                    <p>Copyright 2020</p>
                </div>

            </div>

        </div>

    </footer>
    <div id="button_wa">
    <?=$link?>
    </a>
    </div>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" ></script>   
    <script src="<?=base_url()?>assets/js/custom.js" ></script>
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <script>
        //Get the button
        var mybutton = document.getElementById("beliFloating");
        
        // When the user scrolls down 20px from the top of the document, show the button
        window.onscroll = function() {scrollFunction()};
        
        function scrollFunction() {
          if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
            mybutton.style.display = "block";
          } else {
            mybutton.style.display = "none";
          }
        }
    </script>
    <script type="text/javascript">
       function button_minus(id,oprator)
       {
            var mount = $('#value_mount_'+id).val();
            if (oprator=='plus') {
                var jumlah = parseInt(mount) + 1;
            }else{

                var jumlah = parseInt(mount) - 1;
            }
            if (jumlah<1) {
                swal("Jumlah Tidak Boleh Nol");
            }else{
            $('#value_mount_'+id).val(jumlah);
            $('#show_'+id).html(jumlah);

            }
       }
       function addtochart(id)
       {

            var mount = $('#value_mount_'+id).val();
            $.ajax({
                url : '<?=site_url()?>Welcome/add?id_product='+id+'&mount='+mount,
                success : function(data){
                    console.log(data)
                    alert(data)
                    $('#button_wa').html(data)
                    swal("Berhasil");
                }
            })
       }
    </script>
</body>
</html>