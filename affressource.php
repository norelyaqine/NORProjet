<?php include("exemple.html") ; ?>
<?php
mysql_connect('localhost',"root","");
mysql_select_db('gestion_projet');
$requette = mysql_query ("SELECT * from ressource where chef_projet='".$chef_projet."'");


?>

<div id="page-content">

<script type="text/javascript">

$(document).ready(function() {

});

</script>

<h4>
    Ressources
</h4>
<p class="font-gray-dark">
    Affichage <b>DINAMIQUE</b> des Ressources.
</p>
<br>
<br>
<table class="table" id="example1">
	<thead>
		<tr>
			<th>Nom </th>
			<th>Type de ressource</th>
			<th>Email</th>
			<th>groupe</th>
			<th>Cout d'utilisation</th>
            
		</tr>
	</thead>
	<tbody>
        <?php
                            while($donnee=mysql_fetch_array($requette)){
                           
                                echo "<tr>";
                                echo "<td>".$donnee['nom']."</td>";
                                echo "<td>".$donnee['type']."</td>";
                                echo "<td>".$donnee['email']."</td>";
                                echo "<td>".$donnee['group']."</td>";
                                echo "<td>".$donnee['cout']."</td>";
                                echo" </tr>";
}
		?>
		
	</tbody>
	<tfoot>
		<tr>
			<th>Nom </th>
            <th>Type de ressource</th>
            <th>Email</th>
            <th>groupe</th>
            <th>Cout d'utilisation</th>
		</tr>
	</tfoot>
</table>


                	</div><!-- #page-content -->
            </div><!-- #page-main -->
        </div><!-- #page-wrapper -->

    </body>
</html>
