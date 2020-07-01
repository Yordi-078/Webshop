<div class="text-center">
<h1>Persoon wijzigen</h1>
	<form name="update" method="post" action="<?=URL?>/empty/updateProduct">

			<tr>
				<td>Name</td>
				<td><input type="text" name="name" required value=<?= $id["name"];?>></td>
			</tr>
			<br> 	<br>
			<tr>
				<td>image</td>
				<td><input type="text" name="image" required value=<?= $id["image"];?>></td>
			</tr>
			<br> 	<br>
            <tr>
				<td>description</td>
				<td><input type="text" name="description" required value=<?= $id["description"];?>></td>
			</tr>
			<br>	<br>
            <tr>
				<td>category</td>
				<td><input type="text" name="category" required value=<?= $id["category"];?>></td>
			</tr>
			<br>	<br>
            <tr>
				<td>price</td>
				<td><input type="text" name="price" required value=<?= $id["price"];?>></td>
			</tr>
			<br>	<br>
	    <input type="hidden" name="id" value="<?=$id["id"] ?>"/>
	    <!--  Bouw hier de rest van je formulier.   -->
    	<td><input type="submit" name="update" value="Update"></td>
	</form>
</div>