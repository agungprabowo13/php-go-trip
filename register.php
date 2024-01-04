<?php include('header.php')?>
    <form action="_aksi_register.php" class="max-w-md mx-auto p-10 border border-teal-400 mt-10" method="post">
    <div class="flex justify-center mb-3 gap-2">
        <img src="images/logo.png" alt="">
        <p class="text-2xl font-semibold">Register</p>
    </div>
        <input type="text" name="username" placeholder="Username" class="w-full mb-3 input input-bordered input-accent"><br>
        <input type="password" name="password" placeholder="Password" class="w-full mb-3 input input-bordered input-accent"><br>
        <button type="submit" class="btn btn-info w-full mb-3">Register</button>
        <p>Already have account <a href="login.php" class="text-blue-500 hover:text-red-900">Login here</a></p>
    </form>
<?php include('footer.php')?>
<script>
    const nav = document.querySelector('nav')
    nav.classList.add('hidden')
    const footer = document.querySelector('footer')
    footer.classList.add('hidden')
</script>