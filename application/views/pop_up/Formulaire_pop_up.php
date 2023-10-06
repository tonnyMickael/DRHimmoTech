       <div id="FormPop" class="popup">
            <div class="popup-content">
                <span id="closePopupForm" class="close">&times;</span>
                <h2>Mon Popup Personnalisé</h2>
                <!-- <p>Ceci est un exemple de popup personnalisé.</p> -->
                <form action="<?php echo base_url("Form/formulaireDeBesoin"); ?>" method="post">
                    <p>departement: <select id="Dept" name="">
                                    <option>DRH</option>
                                    <option>DLF</option>
                                </select> 
                    </p>
                    <p>mot de passe: <input type="password" name="">  </p>
                    <input type="submit" value="Valider">
                </form>
            </div>      
        </div>