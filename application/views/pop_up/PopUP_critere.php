s<div id="Crite" class="popup">
    <div class="popup-content">
        <span id="closePopupCrite" class="close">&times;</span>
        <h2>Critère de selection</h2>
        <!-- <p>Ceci est un exemple de popup personnalisé.</p> -->
        <form action="<?php echo base_url('CritaireSelection/insertCritere'); ?>" method="post">
            <?php for ($i=0; $i < count($deptNom['Service']) ; $i++) { ?>
                <input type="hidden" name="idDeptReclame" value="<?php echo $deptNom['Service'][$i]['id']; ?>">
            <?php } ?>
           <p>
               <label class="label">genre:</label>
                    <select name="sexe">
                        <option value="1">femme</option>
                        <option value="2">homme</option>
                    </select>
           </p>
           <p>
                <label class="label">Diplôme  requise:</label> 
                    <select name="diplome" id="diplom">
                        <option value="1">doctorat</option>
                        <option value="2">master</option>
                        <option value="3">licence</option>
                        <option value="4">bacc</option>
                        <option value="5">bepc</option>
                        <option value="6">cepe</option>
                    </select>
            </p>
            <p>
                <label class="label">langue à maîtrisez: </label>
                <select name="lang">
                    <option value="1">malagasy</option>
                    <option value="2">anglais</option>
                    <option value="3">français</option>
                </select>
                <select name="niv">
                    <option>niveau</option>
                    <option value="0">débutant</option>
                    <option value="1">moyen</option>
                    <option value="2">courant</option>
                </select>
            </p>
            <p>
                <label class="label">Expérience requise:</label> 
                    <select name="experience" id="experience">
                        <option value="1">1 à 5</option>
                        <option value="2">5 à 10</option>
                        <option value="3">15 à 20</option>
                    </select>
            </p>
            <input type="submit" value="Valider">
        </form>
    </div>      
</div>