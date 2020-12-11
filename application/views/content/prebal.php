
<div class="container">
  <table class="table">
  <thead>
    <tr>
      <th scope="col">Kniha</th>
      <th scope="col">Přebal</th>

    </tr>
  </thead>
  <tbody>
     <?php foreach($prebaly as $p): ?>
      <tr>
            <td>
                <?php echo $p->nazev_knihy;?>       
            </td>
            <td> 
            <img src=<?php echo $p->prebal; ?>>
            </td>
  
    </tr>
  <?php endforeach; ?>
  </tbody>
</table>
</div>