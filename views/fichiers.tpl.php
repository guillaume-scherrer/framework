<table class="table table-hover">
    <thead>
      <tr>
        <th>rang</th>
        <th>promotion</th>
        <th>libellé</th>
        <th>fichier</th>
        <th>Action </th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td>John</td>
        <td>Doe</td>
        <td>john@example.com</td>
        <td>RienDuTout.pdf</td>
        <td><span class="glyphicon glyphicon-plus" aria-hidden="true"></span>
        <span class="glyphicon glyphicon-remove" aria-hidden="true"></span>
        <span class="glyphicon glyphicon-move" aria-hidden="true"></span>
        <span class="glyphicon glyphicon-paperclip" aria-hidden="true"></span></td>  
      </tr>
      <tr>
        <td>Mary</td>
        <td>Moe</td>
        <td>mary@example.com</td>
      </tr>
      <tr>
        <td>July</td>
        <td>Dooley</td>
        <td>july@example.com</td>
      </tr>
    </tbody>
  </table>
  
    <?php 
    include '../lib/getData.php';
      $dbh = connect_to_db(); //connection à la base de donnée
      $bob = getAll($dbh);
  echo "<p>";


      if (empty($bob)) {
        echo "empty";
      }
      else{
      foreach ($bob as  $value) {
        print $value['promo'];
         echo "$value"; //NE RENVOIT AUCUN R2SULTAT;
       } //la requete est bonne.
      }
      
  echo "</p>";
  ?>