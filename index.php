<?php include("koneksi.php") ?>
<?php include("header.php") ?>
<!-- Hero -->
<section class="flex-col md:flex-row md:flex gap-10 items-center px-10 md:px-20 py-12 bg-[#FBFBFB]">
    <img src="images/header-image.png" alt="Header Image" class="w-full">
    <div>
        <p class="subtitle">Book Now</p>
        <h1 class="text-[54px] text-slate-800 font-semibold">Let’s Enjoy Your trip with goTrip</h1>
        <p class="description mb-5">Thinking of taking a break from every day’s busy life? Planning to go out of the country with your loved ones to have some fun and quality time in a const-effective way?</p>
        <a href="locations.php" class="btn">Book Now</a>
    </div>
</section>
<!-- End Hero -->
<!-- Service -->
<section class="text-center p-10 md:p-20">
    <p class="subtitle">3 steps for the perfect trip</p>
    <h1 class="title mt-2 mb-4">Find Travel Perfection</h1>
    <p class="description max-w-md mx-auto">Naturally head of the class when it comes to luxury travel planning because we do more homework than anyone else.</p>
    <div class="grid grid-cols-1 md:grid-cols-3 gap-5 tiga-kolom mt-14">
        <?php
        $query = mysqli_query($koneksi, 'SELECT * FROM tb_services');
        while ($data = mysqli_fetch_array($query)) {
        ?>
            <div>
                <img src="<?= $data['image'] ?>" alt="">
                <h2><?= $data['title'] ?></h2>
                <p><?= $data['description'] ?></p>
            </div>
        <?php } ?>
    </div>
</section>
<!-- End Service -->
<!-- Location -->
<section class="p-10 md:p-20 bg-[#FBFBFB]">
    <div class="flex flex-col md:flex-row justify-between">
        <div>
            <p class="subtitle">Location</p>
            <h1 class="title mt-2 mb-3">Suggested Location</h1>
            <p class="description max-w-xl">Naturally head of the class when it comes to luxury travel planning because we do more homework than anyone else.</p>
        </div>
        <div class="flex items-end mt-4 md:mt-0">
            <a href="locations.php" class="btn">More ></a>
        </div>
    </div>
    <div class="grid grid-cols-1 md:grid-cols-3 gap-5 tiga-gambar mt-10" id="locations">
<?php
        include("function.php");
        $query = mysqli_query($koneksi, 'SELECT * FROM tb_locations');
        while ($data = mysqli_fetch_array($query)) {
            if ($data['id'] < 4) {
        ?>
                <a href="article.php?id=<?= $data['id']?>">
                    <div style="background-image: url('images/<?= $data['image'] ?>'" class="relative min-h-[500px] bg-cover rounded-xl">
                        <div class="w-3/4 flex text-white p-4 justify-between rounded bottom-4 right-0 left-0 mx-auto bg-black/30 min-h-[100px] absolute backdrop-blur-xl ">
                            <div>
                                <h2 class="font-semibold text-lg"><?= $data['title'] ?></h2>
                                <p class="text-slate-300 text-sm"><?= $data['location'] ?></p>
                            </div>
                            <div class="">
                                <img src="images/Frame 15.png" alt="" class="mb-3">
                                <p>Rp. <?= rupiah($data['price']) ?></p>
                            </div>
                        </div>
                    </div>
                </a>
        <?php  }
        } ?>
    </div>
</section>
<!-- End Location -->
<!-- Testimonials -->
<section class="p-10 md:p-20 text-center">
    <p class="subtitle">Testimonials</p>
    <h1 class="title mb-2 mt-3">What our says about us</h1>
    <p class="description mb-5">See and discover what adventurers tell us about their journey with us, we always listen to whatever experience they have to say</p>
    <img src="images/Ellipse 1.png" alt="" class="mx-auto rounded-full mt-12 mb-5">
    <div class="border border-slate-100 max-w-xl mx-auto p-10 rounded">
        <img src="images/petik.png" alt="" class="mx-auto mb-5">
        <p class="description mb-5">"Travelious really helped me in finding the best location for my first outdoor adventure trip. Their response was very fast and able to tell in detail about the ceita or the history of the place I was going to visit"</p>
        <h2 class="font-semibold">Alice Agasta</h2>
        <p class="description">London Travellers</p>
    </div>
</section>
<!-- End Testimonials -->


<?php include("footer.php") ?>