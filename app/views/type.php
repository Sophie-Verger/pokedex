<div class="grid">
  <?php foreach ($typePokemons as $typePokemon) : ?>
    <div class="pokemon">
      <a href="<?= $_SERVER['BASE_URI'] ?>/pokemon/<?= $typePokemon->getPokemonNumero(); ?>">
        <img src="<?= $_SERVER['BASE_URI'] ?>/img/<?= $typePokemon->getPokemonNumero(); ?>.png" alt="">
        <h2>#<?= $typePokemon->getPokemonNumero() ?> <?= $typePokemon->getPokemonNom() ?></h2>
      </a>
    </div>
  <?php endforeach; ?>
</div>