<?php
echo "<h2>Git Käsud</h2>";
echo "<ol>";
echo "<li>git init - uus repo";
?>
    <li> Nimi ja konfigureerimine
        <pre>
            git config --global user.name "Ervin Püsijainen"
            git config --global user.email "ervinpusijainen@gmail.com"
            git config --global --list
        </pre>
    </li>
    <li>
        // ssh võti loomine
        <pre>
            ssh-keygen -o -t rsa -C "ervinpusijainen@gmail.com"
        </pre>
        <br>võti salvestatakse opilane/.ssh/ kausta
        <br>id_rsa.pub tuleb avada Notepad'is ja kopeerida oma Github'i reposse:
    </li>
    <li>
        // lisa jälgimisele ja commit
        git add . <br>
        git commit -a -m "on loodud phpIndex" <br>
        git status <br>
    </li>
    <li>


        git remote remove origin<br>
        git remote add origin<br>
        git@github.com:Apeirophobia/PysijainenPHPIndexTARpe24.git<br>
        git branch -M main<br>
        git push -u origin main<br>
    </li>
</ol>
