<div class="container mt-5">
  <h1 class="card-title">LISTE DES PROJETS</h1>
  <button type="submit" class="btn btn-primary m-3">
    <a class="badge" href="<?= $Constantes::WEB_ROOT . "projet-create" ?>">AJOUTER UN PROJET</a>
  </button>

  <table class="table table-striped" id="test">
    <thead>
      <tr>
        <th scope="col">#</th>
        <th scope="col">Code</th>
        <th scope="col">Nom du projet</th>
        <th scope="col">Budget</th>
        <th scope="col">Date de debut</th>
        <th scope="col">Date de fin</th>
        <th scope="col">ACTIONS</th>
      </tr>
    </thead>
    <tbody>
  <?php foreach ($projets as $key => $value) : ?>
    <tr>
      <th scope="row"><?= $key + 1 ?></th>
      <td><?= strtoupper($value->code) ?></td>
      <td><?= strtoupper($value->nom) ?></td>
      <td><?= number_format($value->budget).'FCFA'?></td>
      <td><?= $value->date_debut?></td>
      <td><?= $value->date_fin?></td>
      <td>
        <a href="<?= $Constantes::WEB_ROOT . "projet-edit/id=" . $value->id ?>" class="badge">
          <i class="fas h5 fa-edit text-warning m-3 test" title="Modifier"></i>
        </a>
        <a href="<?= $Constantes::WEB_ROOT . "projet-delete/id=" . $value->id ?>" class="badge">
          <i class="fas h5 fa-trash-alt text-danger m-3 test" onclick="confirmDelete(event)" title="Supprimer"></i>
        </a>
      </td>
    </tr>
  <?php endforeach ?>
</tbody>

  </table>

</div>

<script>
  function confirmDelete(event) {
    event.preventDefault(); // Empêche le comportement par défaut du lien

    Swal.fire({
      title: 'Êtes-vous sûr(e) de vouloir supprimer ?',
      text: 'Cette action est irréversible !',
      icon: 'warning',
      showCancelButton: true,
      confirmButtonColor: '#d33',
      cancelButtonColor: '#3085d6',
      confirmButtonText: 'Oui, supprimer',
      cancelButtonText: 'Annuler'
    }).then((result) => {
      if (result.isConfirmed) {
        // Redirection vers la suppression si l'utilisateur confirme
        window.location.href = event.target.parentElement.href;
      }
    });
  }
</script>

