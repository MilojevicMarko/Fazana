<?php 
include "partials/header.php"; 
?>

<header class="headers">
<img src="img/blog1.webp" alt="izleti">
</header> <!-- end header .headers -->

<section class="intro py container">
   <h2>Blog</h2>
   <p>Fazana, mjesto polaska u otkrivanju...</p>
</section> <!-- end .intro -->

<section class="blog container">
<article>

    <div class="post">
        <div class="featuredImage">
            <img src="img/blog1.webp" alt="">
        </div><!-- end .featuredImage -->

        <div class="text">
            <h4>Pjesacenje</h4>
            <div class="meta">
                <p>27.08.2021 | <a href="">Admin</a></p>
            </div><!-- end .meta -->
            <p>Pjesacenjem mozete najbolji moguci nacin dozivjeti...</p>
            <a href="blog1.php" class="btn">Vise &gt;</a>
        </div><!-- end .text -->

    </div><!-- end .post -->

    <div class="post">
<div class="featuredImage">
    <img src="img/blog2.webp" alt="blog2">
</div><!-- end .featuredImage -->

<div class="text">
    <h4>Bicikliranje</h4>
    <div class="meta">
        <p>27.08.2021 | <a href="">Admin</a></p>
    </div><!-- end .meta -->
    <p>Doziviti Fazanu biciklirajuci..</p>
    <a href="blog2.php" class="btn">Vise &gt;</a>
</div><!-- end .text -->

</div><!-- end .post -->

<div class="post">
<div class="featuredImage">
    <img src="img/blog3.webp" alt="blog2">
</div><!-- end .featuredImage -->

<div class="text">
    <h4>Dragulj starogratske jezgre</h4>
    <div class="meta">
        <p>27.08.2021 | <a href="">Admin</a></p>
    </div><!-- end .meta -->
    <p>Pjesacenjem mozete najbolji moguci nacin dozivjeti...</p>
    <a href="blog3.php" class="btn">Vise &gt;</a>
</div><!-- end .text -->

</div><!-- end .post -->

</article>
<aside>
    <?php include "partials/sidebar.php"; ?>
    </aside>
</section> <!-- end .blog .container -- >


<?php include 'partials/istrazite-part.php' ?>
<?php 
include "partials/footer.php"; 
?>