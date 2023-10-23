<?php $deptNom = $this->session->userdata('deptName');?>
       <div id="FormPop" class="popup">
            <div class="popup-content">
                <span id="closePopupForm" class="close">&times;</span>
                <h2>Formulaire des besoins</h2>
                <!-- <p>Ceci est un exemple de popup personnalisé.</p> -->
                <form action="<?php echo base_url("ControlDept/AuthentificationDept"); ?>" method="post">
                    <p>departement: <select id="Dept" name="refDept">
                                        <?php for ($i=0; $i < count($deptNom['Service']) ; $i++) { ?>
                                            <option value="<?php echo $deptNom['Service'][$i]['id']; ?>"><?php echo $deptNom['Service'][$i]['Nom_departement']; ?>(<?php echo $deptNom['Service'][$i]['Reference'];?>)
                                            </option>
                                        <?php } ?>
                                    </select> 
                    </p>
                    <p>mot de passe: <input type="password" name="mdpService"></p>
                    <input type="submit" value="Valider" >
                </form>
            </div>      
        </div>