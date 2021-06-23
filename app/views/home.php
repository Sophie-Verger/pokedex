<div class="grid">
  <?php foreach ($pokemons as $pokemon) : ?>
    <div class="pokemon">
      <a href="<?= $_SERVER['BASE_URI'] ?>/pokemon/<?= $pokemon->getNumero(); ?>">
        <img src="<?= $_SERVER['BASE_URI'] ?>/img/<?= $pokemon->getNumero(); ?>.png" alt="">
        <h2>#<?= $pokemon->getNumero() ?> <?= $pokemon->getNom() ?></h2>
      </a>
    </div>
  <?php endforeach; ?>
</div>
