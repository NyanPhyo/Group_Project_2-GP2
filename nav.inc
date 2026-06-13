<!--nav contain logo, company name and navgation bar-->
    <nav>
        <div class="logo">
            <img src="./resources/images/cyber-security-logo-design_23-2151863644.png" alt="page logo" title="page logo">
            <span class="title">3A1W</span>
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
            </div>
        </div> 
    </nav>