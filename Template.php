<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <a class="navbar-brand" href="index.php">Perpustakaan</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
            <?php
                $title = $title1;
                if($title == 'index'){
                    ?>
                    <li class="nav-item active">
                        <a class="nav-link" href="index.php">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="Member.php">Member</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="Buku.php">Buku</a>
                    </li>
                    <li class="nav-item">
                    <a class="nav-link" href="Peminjaman.php">Peminjaman</a>
                    </li>

                    <?php
                    
                }else if ($title == 'buku'){
                    ?>
                    <li class="nav-item">
                        <a class="nav-link" href="index.php">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="Member.php">Member</a>
                    </li>
                    <li class="nav-item active">
                        <a class="nav-link" href="Buku.php">Buku</a>
                    </li>
                    <li class="nav-item">
                    <a class="nav-link" href="Peminjaman.php">Peminjaman</a>
                    </li>
                    <?php
                }else if ($title == 'member'){
                    ?>
                    <li class="nav-item">
                        <a class="nav-link" href="index.php">Home</a>
                    </li>
                    <li class="nav-item active">
                        <a class="nav-link" href="Member.php">Member</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="Buku.php">Buku</a>
                    </li>
                    <li class="nav-item">
                    <a class="nav-link" href="Peminjaman.php">Peminjaman</a>
                    </li>
                    <?php
                }else if ($title == 'peminjaman'){
                    ?>
                    <li class="nav-item">
                        <a class="nav-link" href="index.php">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="Member.php">Member</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="Buku.php">Buku</a>
                    </li>
                    <li class="nav-item active">
                    <a class="nav-link" href="Peminjaman.php">Peminjaman</a>
                    </li>
                    <?php
                }else{
                    ?>
                    <li class="nav-item">
                        <a class="nav-link" href="index.php">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="Member.php">Member</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="Buku.php">Buku</a>
                    </li>
                    <li class="nav-item">
                    <a class="nav-link" href="Peminjaman.php">Peminjaman</a>
                    </li>
                    <?php
                }
            ?>
        </div>
    </nav>