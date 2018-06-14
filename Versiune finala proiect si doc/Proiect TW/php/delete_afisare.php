<?php
function afisare_formular_del_change($con)
{
	if(isset($_COOKIE["aleg_stergere_cookie"]))
	{
					echo '
					<center>
						<form action="../php/delete_form.php" method="POST">
							<div class="select-field">
								
								<select name="poveste_aleasa" id="select_f">
									<option selected hidden>Alege povestea</option>';
									echo_povesti_pt_stergere($con);
							echo'
								</select>
							</div>
							<div class="padding_butoane">
								<input type="submit" value="Delete" name="submit_del" id="del_btn">
							</div>
					</form>
					</center>';
					setcookie("aleg_stergere_cookie", 1, time()-3600, '/');
	}
					mesaj_dupa_stergere();
					
				
	if(isset($_COOKIE["aleg_modifica_cookie"]))
	{
					echo'
					<div class="modificare">
						<center>
							<form action="../php/set_story_to_change.php" method="POST">
								<div class="select-field">
								
									<select name="poveste_aleasa" id="select_f">
										<option selected hidden>Alege povestea</option>';
										echo_povesti_pt_stergere($con);
								echo'
									</select>
								</div>
								<div class="padding_butoane">
									<input type="submit" value="Submit" name="submit_del" id="del_btn">
								</div>
							</form>
						</center>
					</div>';
					setcookie("aleg_modifica_cookie",1,time()-3600,'/');
	}
				
	if(isset($_COOKIE["id_poveste_aleasa_pt_modificare_to_verify"]))
	{
					
					echo'<center>
					
						<p class="intrebare_modif">Doriti sa modificati o pagina anume sau toata povestea?</p>
						<p class="intrebare_modif">Dati numarul pagini care vreti sa o modificati sau scrieti "Toata Povestea" pentru a modifica toata povestea</p> 
						<form action="../php/returneaza_text_pentru_modificare.php" method="POST">
							<input type="text" name="pagina_sau_poveste">
							<input type="submit" value="Submit" name="submit_pag_pov">
						</form>
					</center>';
					//setcookie("id_poveste_aleasa_pt_modificare",$id_poveste_aleasa,time()-3600,'/');
	}
	if(isset($_COOKIE["afiseaza_text"]))
	{
					$id_poveste_aleasa=$_COOKIE["id_poveste_aleasa_pt_modificare"];
					$poveste=get_poveste_to_modif($id_poveste_aleasa);
					/*if(isset($_COOKIE["pagina_de_modif_gresita"]))
					{
						echo'<p class="eroareAfisareTextPentruModificare">Ati introdus numarul de pagina prea mare sau prea mic</p>';
						setcookie("pagina_de_modif_gresita",1,time()-3600,'/');
					}
					else{*/
					echo'<center>
					<form action="../php/to_disable_cookie_id_poveste_aleasa_pt_modificare_and_change_to_DB.php" method="POST">
						<div id="input_pov">
							<textarea rows="30" cols="100" name="fragment_modificat">'.$poveste.'</textarea>
						</div>
						<input type="submit" value="Modifica" name="submit_modificare" id="del_btn">
					</form></center>';//}
	}
}
?>