<?php include("koneksi.php") ?>
<?php include("header.php") ?>

<section class="max-w-md mx-auto p-10 border border-teal-400 mt-10">
    <div class="flex justify-center mb-3 gap-2">
        <img src="images/logo.png" alt="">
        <p class="text-2xl font-semibold">Login</p>
    </div>
    <form action="_aksi_login.php" class=" flex justify-center flex-col" method="post">
        <input type="text" placeholder="Username" class="input input-bordered input-accent block mb-3" name="username"/>
        <input type="password" placeholder="Password" class="input input-bordered input-accent block  mb-3" name="password" />
        <button class="btn btn-info mb-3">Login</button>
        <p>I'm not have account <a href="register.php" class="text-blue-500 hover:text-red-900">Register here</a></p>
    </form>
</section>

<?php include("footer.php") ?>
<script>
    const nav = document.querySelector('nav')
    nav.classList.add('hidden')
    const footer = document.querySelector('footer')
    footer.classList.add('hidden')
</script>