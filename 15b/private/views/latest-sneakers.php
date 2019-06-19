<?php
include 'header.php';
?>
    <h1>Latest Shiny Sneakers</h1>
    <p class="sale-offer">
        Here are our 4 latest coolest dopest finest limited edition sneakers for you to admire.
        Grab your purse and start buying. Limited stock. Act fast!
    </p>

    <section class="sneakers">
        <a href="all-sneakers.php" class="button">See all our sneakers</a>

		  <?php foreach ( $statement as $sneaker ): ?>
            <article>
                <h2><?php echo $sneaker['brand'] ?></h2>
                <h3><?php echo $sneaker['model'] ?></h3>
                <figure>
                    <span class="color"><?php echo $sneaker['color']?></span>
                    <img src="images/<?php echo $sneaker['image'] ?>" alt="" class="fluid-img"/>
                </figure>
                <span class="price">$<?php echo $sneaker['price']?></span>
                <p>
					<?php echo $sneaker['description'] ?>
                </p>
            </article>
          <?php endforeach; ?>
          <a href="index.php?page=all" class="button">See all our sneakers</a>
				<?php include 'footer.php'; ?>
