<fieldset>
<legend>Ajout Produit</legend>
<form method="POST" action="index.php?page=recupProduit">
<p>
<label>Désignation </label>
<input type="text" name="nomProduit">
</p>
<p>
<label>Description </label>
<br><textarea id="text" name="DescriptionProduit" rows="4" cols="50">Description...</textarea><br><br>
</p>
<p> Prix HT </p>
<input type="text" name="PrixHT">
<p>
<input type="submit" value="Ajouter" name="btAjout"/>
</p>
</form>
</fieldset>