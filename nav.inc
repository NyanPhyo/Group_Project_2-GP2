<!--nav contain logo, company name and navgation bar-->
    <nav>
        <div class="logo">
            <img src="./resources/images/cyber-security-logo-design_23-2151863644.png" alt="page logo" title="page logo">
            <span class="title">3A1W</span>
            
            <?php if(isset($_SESSION["user_id"])): ?>
            <div class="nav-manager">
                <i class="fa-solid fa-user-shield"></i>
                <span class="nav-manager-name">
                    <?= htmlspecialchars($_SESSION["username"]) ?>
                </span>
            </div>
        <?php endif; ?>
        </div>
        
        
        <div class="menu">
            <div class="buttons">
                <label class="<?= $page == 'home' ? 'active' : '' ?>">
                    <a href="./index.php"><i class="fa-solid fa-home"></i>Home</a>
                </label>

                <label class="<?= $page == 'jobs' ? 'active' : '' ?>">
                    <a href="./jobs.php"><i class="fa-solid fa-briefcase"></i>Jobs</a>
                </label>

                <label class="<?= $page == 'apply' ? 'active' : '' ?>">
                    <a href="./apply.php"><i class="fa-solid fa-file-signature"></i>Apply</a>
                </label>

                <label  class="<?= $page == 'about' ? 'active' : '' ?>">
                    <a href="./about.php"><i class="fa-solid fa-circle-info"></i>About</a>
                </label>


                <?php
                if (isset($_SESSION["user_id"])) {
                    echo '<label class="' . ($page == 'manage' ? 'active' : '') . '">';
                    echo '<a href="./manage.php"><i class="fa-solid fa-file-signature"></i> Manage EOI</a>';
                    echo '</label>';

                    echo '<label class="btn">';
                    echo '<a class="log" href="./logout.php"><i class="fa-solid fa-right-from-bracket log"></i> Logout</a>';
                    echo '</label>';
                } else {
                    echo '<label class="btn">';
                    echo '<a class="log" href="./login.php"><i class="fa-solid fa-right-to-bracket log"></i> HR Login</a>';
                    echo '</label>';
                }
                ?>
            </div>
        </div> 
    </nav>