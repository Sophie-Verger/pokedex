<p>Cliquez sur un type pour voir tous les Pokemons de ce type</p>

<div class="types">
  <?php foreach ($types as $type) : ?>
    <div style="background-color: #<?= $type->getColor() ?>">
      <a href="<?= $_SERVER['BASE_URI'] ?>/type/<?= $type->getId(); ?>">
        <div><?= $type->getName() ?></div>
      </a>
    </div>
  <?php endforeach; ?>
</div>