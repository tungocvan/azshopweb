<?php 
    if(!isset($title)){ $title = "" ;}
?>
<!-- Start Bradcaump area -->
<div class='ht__bradcaump__area' style='background: rgba(0, 0, 0, 0) url(<?php echo TNV_URI_PUBLIC; ?>images/bg/2.jpg) no-repeat scroll center center / cover ;'>
    <div class='ht__bradcaump__wrap'>
        <div class='container'>
            <div class='row'>
                <div class='col-12'>
                    <div class='bradcaump__inner text-center'>
                        <h2 class='bradcaump-title'><?php echo $title; ?></h2>
                        <nav class='bradcaump-inner'>
                          <a class='breadcrumb-item' href='index.html'>Home</a>
                          <span class='brd-separetor'>/</span>
                          <span class='breadcrumb-item active'><?php echo $title; ?></span>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- End Bradcaump area -->