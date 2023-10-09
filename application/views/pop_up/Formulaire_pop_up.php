<?php $Ref = $this->session->userdata('referenceDept');?>
       <div id="FormPop" class="popup">
            <div class="popup-content">
                <span id="closePopupForm" class="close">&times;</span>
                <h2>Mon Popup Personnalisé</h2>
                <!-- <p>Ceci est un exemple de popup personnalisé.</p> -->
                <form action="<?php echo base_url("Form/formulaireDeBesoin"); ?>" method="post">
                    <p>departement: <select id="Dept" name="refDept">
                                        <?php for ($i=0; $i < count($Ref['data']); $i++) { ?>
                                            <option value="<?php echo $Ref['data'][$i]['id']; ?>"><?php echo $Ref['data'][$i]['Reference']; ?></option>
                                        <?php  } ?>
                                    </select> 
                    </p>
                    <p>mot de passe: <input type="password" name="mdp">  </p>
                    <input type="submit" value="Valider" >
                </form>
            </div>      
        </div>