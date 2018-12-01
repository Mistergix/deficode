<?php
defined('BASEPATH') or exit('No direct script access allowed');
?>

<?=validation_errors();?>

<section class="section container">
            <div class="row">
                <div class="col-md-12">
					<?= form_open("registerchild", ["id" => "register-form", "class" => "form-horizontal", "name" => "register"]);?>
                        <fieldset>
                            <div class="form-group">
			                    <label class="col-md-4 control-label required" for="parent_fn">Votre prénom</label>
			                    <div class="col-md-4 offset-md-4">
				                    <input id="parent_fn" name="parent_fn" type="text" class="form-control input-md" value="<?=set_value('parent_fn');?>" required>
			                    </div>
		                    </div>
                            <div class="form-group">
			                    <label class="col-md-4 control-label required" for="parent_ln">Votre nom</label>
			                    <div class="col-md-4 offset-md-4">
				                    <input id="parent_ln" name="parent_ln" type="text" class="form-control input-md" value="<?=set_value('parent_ln');?>" required>
			                    </div>
		                    </div>
                            <div class="form-group">
                                <label class="col-md-4 control-label required" for="parent_email">Votre email</label>
                                <div class="col-md-4 offset-md-4">
                                    <input id="parent_email" name="parent_email" type="email" class="form-control input-md" value="<?=set_value('parent_email');?>" required>
                                </div>
		                    </div>
                            <div class="form-group">
                                <label class="col-md-4 control-label required" for="parent_phone">Votre numéro de téléphone portable</label>
                                <div class="col-md-4 offset-md-4">
                                    <input id="parent_phone" name="parent_phone" placeholder="0XXXXXXXXX" type="tel" maxlength="10" pattern="^0[1-9](?:\d{2}){4}$" title="0XXXXXXXXXXX" class="form-control input-md" value="<?=set_value('parent_phone');?>" required>
                                </div>
                            </div>
							<div class="form-group">
			                    <label class="col-md-4 control-label required" for="child_fn">Prénom de votre enfant</label>
			                    <div class="col-md-4 offset-md-4">
				                    <input id="child_fn" name="child_fn" type="text" class="form-control input-md" value="<?=set_value('child_fn');?>" required>
			                    </div>
		                    </div>
                            <div class="form-group">
			                    <label class="col-md-4 control-label required" for="child_ln">Nom de votre enfant</label>
			                    <div class="col-md-4 offset-md-4">
				                    <input id="child_ln" name="child_ln" type="text" class="form-control input-md" value="<?=set_value('child_ln');?>" required>
			                    </div>
		                    </div>
							<div class="form-group">
			                    <label class="col-md-4 control-label required" for="child_level">Classe de votre enfant</label>
			                    <div class="col-md-4 offset-md-4">
									<select id="child_level" name="child_level" class="form-control input-md" required>
										<option selected value="" disabled>Choisissez la classe</option>
										<option value="4">4ème</option>
										<option value="3">3ème</option>
									</select>
			                    </div>
		                    </div>
                            <div class="form-group">
			                    <label class="col-md-4 control-label required" for="parent_comment">Un petit mot ?</label>
			                    <div class="col-md-4 offset-md-4">
				                    <textarea id="parent_comment" name="parent_comment" placeholder="Quelques lignes sur sa personnalité, ce que vous attendez du Déficode" type="text" class="form-control input-md"><?=set_value('parent_comment');?></textarea>
			                    </div>
                            </div>
                            <div class="form-group">
                                <div class="col-md-2 offset-md-5">
                                        <div id="loader" class="loader d-none">
                                                <div class="spinner"><div class="double-bounce1"></div><div class="double-bounce2"></div></div>
                                        </div>
                                    <button id="button" type="submit">Inscrire mon enfant</button>
                                </div>
                            </div>
                        </fieldset>
                    </form>
                </div>
            </div>
</section>
