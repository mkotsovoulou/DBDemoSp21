<h1> Add a new Project </h1>
<form method="POST" action="insert_project.php">

    <input type="text" id="title" name="title" required/>
    <select id="category" name="category">
        <option value="Billable">Billable</option>
        <option value="Deree">Deree</option>
        <option value="Personal">Personal</option>
    </select>
    <input type="submit" value="Save"/>
    <input type="reset" value="Clear"/>
</form>

