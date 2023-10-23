<div id="DRH" class="popup">
    <div class="popup-content">
        <span id="closePopupDRH" class="close">&times;</span>
        <h2>Administration du DRH</h2>
        <!-- <p>Ceci est un exemple de popup personnalisé.</p> -->
        <form action="<?php echo base_url('ControlDRh/AuthentificationDRH'); ?>" method="post">
            <p>Authentification DRH mot de passe svp!: <input type="password" name="mdpDRH">  </p>
            <input type="submit" value="Valider">
        </form>
    </div>      
</div>