<?php include("koneksi.php") ?>
<?php include("header.php") ?>

<!-- Location -->
<section class="p-10 md:p-20 bg-[#FBFBFB]">
    <div class="">
        <div>
            <p class="subtitle">Location</p>
            <h1 class="title mt-2 mb-3">Suggested Location</h1>
            <p class="description max-w-xl">Naturally head of the class when it comes to luxury travel planning because we do more homework than anyone else.</p>
        </div>
    </div>
    <div class="grid grid-cols-1 md:grid-cols-3 gap-5 tiga-gambar mt-10" id="locations">
        <?php
        function rupiah($angka)
        {
            $hasil_rupiah = number_format($angka, 0, ',', '.');
            return $hasil_rupiah;
        }
        ?>
        <?php
        $query = mysqli_query($koneksi, 'SELECT * FROM tb_locations');
        while ($data = mysqli_fetch_array($query)) {
        ?>
                <a href="article.php?id=<?= $data['id'] ?>">
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
        <?php  
        } ?>
    </div>
</section>
<!-- End Location -->

<?php include("footer.php") ?>