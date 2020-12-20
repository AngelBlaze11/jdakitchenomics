# Create the pages table
CREATE TABLE pages (id INT PRIMARY KEY AUTO_INCREMENT, title VARCHAR(100), content TEXT);

# Add some sample content
INSERT INTO pages
	SET title="Sinigang",
		content="
<p>Short description of sinigang</p>

<h4>Ingredients</h4>
<ol>
	<li>Ingredient 1</li>
	<li>Ingredient 2</li>
	<li>Ingredient 3</li>
</ol>

<h4>Procedures</h4>
<ol>
	<li>Procedure 1</li>
	<li>Procedure 2</li>
	<li>Procedure 3</li>
</ol>
";
