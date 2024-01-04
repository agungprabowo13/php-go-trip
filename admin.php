<?php
include("koneksi.php");
include("header.php");
?>

<h1 class="text-center my-5">Tabel User</h1>
<div class="overflow-x-auto max-w-xl mx-auto border border-teal-200 ">
  <table class="table text-center">
    <!-- head -->
    <thead>
      <tr>
        <th>No</th>
        <th>Username</th>
        <th>Password</th>
        <th>Aksi</th>
      </tr>
    </thead>
    <tbody>
    <?php
        $no = 1;
        $query = mysqli_query($koneksi,"SELECT * FROM tb_users");
        while($data = mysqli_fetch_array($query)){
    ?>
      <tr>
        <th><?= $no++ ?></th>
        <td><?= $data['username'] ?></td>
        <td><?= $data['password'] ?></td>
        <td><a href="_aksi_delete.php?id=<?= $data['id'] ?>" class="btn">Hapus</a></td>
    </tr>
    <?php } ?>
    </tbody>
  </table>
</div>

<?php
include("footer.php");
?>
<script>
    const nav = document.querySelector('nav')
    nav.classList.add('hidden')
    const footer = document.querySelector('footer')
    footer.classList.add('hidden')
    
    const admin = document.querySelector('tbody').children[0].children[1].innerHTML
    const deleteAdmin = document.querySelector('tbody').children[0].children[3].children[0]
    
    if (admin == 'admin') {
        deleteAdmin.classList.add('hidden')
    }

</script>