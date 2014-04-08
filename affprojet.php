<?php include("exemple.html") ; ?>
<?php
mysql_connect('localhost',"root","");
mysql_select_db('gestion_projet');
$requette = mysql_query ("SELECT * from projet where chef_projet='".$chef_projet."'");
?>

<div id="page-content">

<script type="text/javascript">

$(document).ready(function() {

});

</script>

<h4>
    Projets
</h4>
<p class="font-gray-dark">
    Affichage <b>DINAMIQUE</b> des Projets.
</p>
<br>
<br>
<table class="table" id="example1">
	<thead>
		<tr>
			<th>Nom </th>
			<th>Chef du Projet</th>
			<th>Date du Debut</th>
			<th>Note</th>
			
            
		</tr>
	</thead>
	<tbody>
        <?php
                            while($donnee=mysql_fetch_array($requette)){
                           
                                echo "<tr>";
                                echo "<td>".$donnee['nom']."</td>";
                                echo "<td>".$donnee['chef']."</td>";
                                echo "<td>".$donnee['date_debut']."</td>";
                                echo "<td>".$donnee['note']."</td>";
                               
                                echo" </tr>";
}
		?>
		
	</tbody>
	<tfoot>
		<tr>
			<th>Nom </th>
            <th>Chef du Projet</th>
            <th>Date du Projet</th>
            <th>Note</th>
            
		</tr>
	</tfoot>
</table>


                	</div><!-- #page-content -->
            </div><!-- #page-main -->
        </div><!-- #page-wrapper -->

    </body>
</html>
