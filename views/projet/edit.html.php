<section class="gradient-custom">
    <div class="container py-5 h-100">
        <div class="row justify-content-center align-items-center h-100">
            <div class="col-12 col-lg-9 col-xl-7">
                <div class="card shadow-2-strong card-registration" style="border-radius: 15px;">
                    <div class="card-body p-4 p-md-5">
                        <h3 class="mb-4 pb-2 pb-md-0 mb-md-5">Modifier le projet</h3>
                        <form action="<?= $Constantes::WEB_ROOT . "projet-update" ?>" method="POST">
                        <input type="hidden" name="id" value="<?= $projet['id']  ?>">
                        <input type="hidden" name="code" value="<?= $projet['code']  ?>">

    <div class="row">
        <div class="col-md-6 mb-4">
            <div class="form-outline">
                <label class="form-label" for="nom">Nom</label>
                <input type="text" id="nom" value="<?= $projet['nom']  ?>" name="nom" class="form-control form-control-lg" />
            </div>
        </div>
        <div class="col-md-6 mb-4">
            <div class="form-outline">
                <label class="form-label" for="budget">Budget</label>
                <input type="number" id="budget" value="<?= $projet['budget']  ?>" name="budget" class="form-control form-control-lg" />
            </div>
        </div>
    </div>

    <div class="row">
        
        <div class="col-md-6 mb-4">
            <div class="form-outline">
                <label class="form-label" for="date_debut">Date de début</label>
                <input type="date" value="<?= $projet['date_debut']  ?>" id="date_debut" name="date_debut" class="form-control form-control-lg" />
            </div>
        </div>
        <div class="col-md-6 mb-4">
            <div class="form-outline">
                <label class="form-label" for="date_fin">Date de fin</label>
                <input type="date" value="<?= $projet['date_fin']  ?>" id="date_fin" name="date_fin" class="form-control form-control-lg" />
            </div>
        </div>
    </div>

    <div class="row">
    <div class="col-md-6 mb-4">
            <div class="form-outline">
                <label class="form-label" for="description">Description</label>
                <textarea id="description"  name="description" class="form-control form-control-lg"><?= $projet['description']  ?></textarea>
            </div>
        </div>
    </div>

    <div class="mt-4 pt-2">
        <input class="btn btn-primary btn-lg" type="submit" value="Submit" id="submit_projet" />
    </div>

</form>

                    </div>
                </div>
            </div>
        </div>
    </div>
</section>