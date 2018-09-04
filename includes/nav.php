<div id="adminMenu" class="col-3">
    <p class="userName"><?php echo $user['user_prenom'].' '.$user['user_nom']; ?></p>
    <p class="userRole"><?php echo $user['user_role']; ?></p>
    <nav id="adminNav" class="navbar">
        <ul class="nav navbar-nav">
            <li><a href="index.php?page=dashboard"><i class="fas fa-clipboard"></i>Dashboard</a></li>
            <?php if(isset($_SESSION['currentUser'])){ ?>
            <li><a href="index.php?page=contacts"><i class="fas fa-users"></i>Contacts</a></li>
            <li><a href="index.php?page=societes"><i class="fas fa-building"></i>Companies</a></li>
            <li class="hasSub">
                <ul>
                    <li><a href="clients.php"><i class="fas fa-handshake"></i>Clients</a></li>
                    <li><a href="providers.php"><i class="fas fa-shopping-cart"></i>Providers</a></li>
                </ul>
            </li>
            <li><a href="index.php?page=factures"><i class="fas fa-file-invoice-dollar"></i>Bills</a></li>
            <?php
            // if(isset($_SESSION['currentUser'])){
            ?>
            <li><a href="logout.php"><i class="fas fa-power-off"></i>Se déconnecter</a></li>
            <?php
            }else {
            ?>
            <li><a href="login.php"><i class="fas fa-power-off"></i>Se connecter</a></li>
            <?php
            }
            ?>
        </ul>
    </nav>
</div>
