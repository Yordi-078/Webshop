<h1 class="text-center">Persoon wijzigen</h1>
	<form name="update" method="post" action="<?=URL?>/empty/updateProduct">

			<tr>
				<td>Name</td>
				<td><input type="text" name="name" required value=<?php echo $name;?>></td>
			</tr>
			<tr>
				<td>image</td>
				<td><input type="text" name="image" required value=<?php echo $image;?>></td>
			</tr>
            <tr>
				<td>description</td>
				<td><input type="text" name="description" required value=<?php echo $description;?>></td>
			</tr>
            <tr>
				<td>category</td>
				<td><input type="text" name="category" required value=<?php echo $category;?>></td>
			</tr>
            <tr>
				<td>price</td>
				<td><input type="text" name="price" required value=<?php echo $price;?>></td>
			</tr>

	    <input type="hidden" name="id" value="<?=$id["id"] ?>"/>
	    <!--  Bouw hier de rest van je formulier   -->
    	<td><input type="submit" name="update" value="Update"></td>
	</form>