<div>
  <h1>Détails de <?= $pokemon->getNom() ?></h1>

  <div class="all-details">
    <img src="<?= $_SERVER['BASE_URI'] ?>/img/<?= $pokemon->getNumero(); ?>.png" alt="">

    <div class="fiche">
      <h2>#<?= $pokemon->getNumero() ?> <?= $pokemon->getNom() ?></h2>

      <div class="pokemon-type">
        <?php foreach ($pokemonTypes as $pokemonType) : ?>
          <div style="background-color: #<?= $pokemonType->getTypeColor() ?>">
            <a href=""><?= $pokemonType->getTypeName() ?></a>
          </div>
        <?php endforeach; ?>
      </div>

      <h2>Statistiques</h2>
      <div class="stat">
        <span>PV</span>
        <span><?= $pokemon->getPV() ?></span>
        <span class="barre"></span>
        <span class="stat-barre"></span>
      </div>
      <div class="stat">
        <span>Attaque</span>
        <span><?= $pokemon->getAttaque() ?></span>
        <span class="barre"></span>
        <span class="stat-barre"></span>
      </div>
      <div class="stat">
        <span>Défense</span>
        <span><?= $pokemon->getDefense() ?></span>
        <span class="barre"></span>
        <span class="stat-barre"></span>
      </div>
      <div class="stat">
        <span>Attaque Spé.</span>
        <span><?= $pokemon->getAttaqueSpe() ?></span>
        <span class="barre"></span>
        <span class="stat-barre"></span>
      </div>
      <div class="stat">
        <span>Défense Spé.</span>
        <span><?= $pokemon->getDefenseSpe() ?></span>
        <span class="barre"></span>
        <span class="stat-barre"></span>
      </div>
      <div class="stat">
        <span>Vitesse</span>
        <span ><?= $pokemon->getVitesse() ?></span>
        <span class="barre"></span>
        <span  class="stat-barre"></span>
      </div>
    </div>
  </div>
</div>


<p>Revenir à la liste</p>