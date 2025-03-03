<fieldset>
<legend>Ajout Produit</legend>
<form method="POST" action="index.php?page=recupProduit">
<p>
<label for="designation">Désignation </label>
<input type="text" name="nomProduit" required maxlength="30" minlength="1"/>
<br>
<label for="description">Description </label>
<br><textarea id="text" name="DescriptionProduit" rows="10" cols="60" placeholder="Description..." required></textarea>
<br>
<label for="prixHTT"> Prix HT </p>
<input type="text" name="PrixHT" required maxlength="1" step="0.01"/>
<br>
<input type="submit" value="Ajouter" name="btAjout"/>
</p>
</form>
</fieldset>
